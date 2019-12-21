<?php

namespace App\Http\Controllers;

use Cart;
use Auth;
use Session;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Order;
use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Product;
use App\Models\CommentPost;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\PostCategory;
use App\Models\CommentProduct;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\User\UpdateProfileRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PageController extends Controller
{
    use AuthenticatesUsers, RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
        AuthenticatesUsers::guard insteadof RegistersUsers;
    }

    protected $redirectTo = '/';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'dateOfBirth' => ['required', 'date'],
            'gender' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'dateOfBirth' => $data['dateOfBirth'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 0,
            'image' => 'user.png',
        ]);
    }

    public function __construct()
    {
        $banner = Banner::first();
        $contact = Contact::first();
        $productCategories = ProductCategory::all();

        view()->share('contact', $contact);
        view()->share('banner', $banner);
        view()->share('productCategories', $productCategories);
    }

    public function changeLanguage($language)
    {
        \Session::put('language', $language);

        return redirect()->back();
    }

    public function showLoginForm()
    {
        return view('clients.login');
    }

    public function showRegisterForm()
    {
        return view('clients.register');
    }
    
    public function index(Request $request)
    {
        $products = Product::paginate(6);

        return view('clients.index', compact('products',));
    }

    public function displayProductByCategory($slug)
    {
        $category = ProductCategory::where('slug', $slug)->first();
        $products = Product::where('product_category_id', $category->id)->paginate(6);
        $productCategories = ProductCategory::all();

        return view('clients.index', compact('products', 'productCategories', 'category'));
    }
    
    public function searchProduct(Request $request)
    {
        $keyword = $request->search;
        $products = Product::where('name', 'like', '%' . $keyword . '%')->paginate(6);
        $productCategories = ProductCategory::all();

        return view('clients.index', compact('products', 'productCategories'));
    }

    public function simpleProduct($slug)
    {
        $product = Product::with('productCategory', 'comments', 'comments.user')
            ->where('slug', $slug)
            ->firstOrFail();
        $productRelations = Product::where('product_category_id', $product->product_category_id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('clients.simple_product', compact('product', 'productRelations'));
    }

    public function shoppingCart()
    {
        return view('clients.shopping_cart');
    }

    public function addToCart(Request $request)
    {
        $product = Product::where('quantity', '>=', $request->quantity)
            ->where('id', $request->product_id)
            ->firstOrFail();
        if ($product) {
            Cart::add([
                'id' => $product->slug,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'attributes' => [
                    'product_id' => $product->id,
                ]
            ]);

            Session::flash('success', __('home.add_to_cart_success'));
            return redirect()->back();
        } else {
            Session::flash('success', __('home.add_to_cart_errror'));
            return redirect()->back();
        }
    }

    public function updateCart(Request $request)
    {
        $ids = $request->ids;
        $quantities = $request->quantities;

        foreach ($ids as $index => $id) {
            Cart::update($id, [
                'quantity' => [
                    'relative' => false,
                    'value' => $quantities[$index],
                ],
            ]);
        }
        Session::flash('success',  __('home.update_cart_success'));

        return redirect()->route('shopping_cart');
    }

    public function removeItemCart($id){
        Cart::remove($id);
        Session::flash('success', __('home.success_deleted_product'));
        return redirect()->route('shopping_cart');
    }

    public function checkout()
    {
        if (!Cart::isEmpty()) {
            try {
                DB::beginTransaction();
                $order = Order::create([
                    'user_id' => Auth::id(),
                    'total' => Cart::getTotal(),
                    'status' => 0,
                ]);
                foreach (Cart::getContent() as $item) {
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'product_id' => $item->attributes->product_id,
                        'qty' => $item->quantity,
                        'price' => $item->price,
                    ]);
                }
                DB::commit();
                Cart::clear();
                Auth::user()->notify(new InvoicePaid($order));
                Session::flash('success', __('home.checkout_success'));

                return redirect()->back();
            } catch (\Exception $ex) {
                DB::rollback();
                \Log::error($ex);
                Session::flash('error', __('home.checkout_error'));

                return redirect()->back();
            }
        }
    }

    public function confirmation($id)
    {
        $order = Order::where('id', $id)->update(['status' => 1]);
        if ($order) {
            $orderDetails = Order::with('orderDetails', 'orderDetails.product', 'user')
                ->where('id', $id)
                ->firstOrFail();

            return view('clients.confirmation', compact('orderDetails'));
        }

        \abort(404);
    }

    public function purchaseHistory()
    {
        $orders = Order::with('user')
            ->where('user_id', Auth::id())
            ->get();

        return view('clients.purchase_history', compact('orders'));
    }

    public function purchaseHistoryDetail($id)
    {
        $orderDetails = Order::with('orderDetails', 'orderDetails.product', 'user')
                ->where('id', $id)
                ->firstOrFail();

        return view('clients.purchase_history_detail', compact('orderDetails'));
    }

    public function showFormChangePassword()
    {
        return view('clients.change_password');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        $user = User::where('id', Auth::id())
            ->update(['password' => Hash::make($request->password)]);
        if ($user) {
            Session::flash('success', __('home.change_password_success'));

            return redirect()->back();
        } else {
            Session::flash('warning', __('home.change_password_fail'));

            return redirect()->back();
        }
    }

    public function showFormChangeProfile()
    {
        $user = User::where('id', Auth::id())
            ->firstOrFail();

        return view('clients.change_profile', compact('user'));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::where('id', Auth::id())
            ->update([
                'email' => $request->email,
                'dateOfBirth' => $request->dateOfBirth,
                'gender' => $request->gender,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                ]);
        if ($user) {
            Session::flash('success', __('home.change_profile_success'));

            return redirect()->back();
        } else {
            Session::flash('warning', __('home.change_profile_fail'));

            return redirect()->back();
        }
    }

    public function getCommentProduct($product_id)
    {
        $comments = Product::with('comments', 'comments.user')
                    ->where('id', $product_id)
                    ->firstOrFail()->comments;

        return response()->json($comments);
    }

    public function storeCommentProduct(Request $request)
    {
        $commentProduct = CommentProduct::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'content' => $request->content,
        ]);
        $comment = CommentProduct::with('user')->where('id', $commentProduct->id)->firstOrFail();

        return response()->json(['message' => 'success', 'comment' => $comment]);
    }

    public function post()
    {
        $posts = Post::with('user', 'comments')->paginate(1);
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.blog', compact('posts', 'postCategories', 'tags', 'postRecentes'));
    }

    public function postSearch(Request $request)
    {
        $keyword = $request->search;

        $posts = Post::where('title', 'like', '%' . $keyword . '%')->with('user', 'comments')->paginate(1);
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.blog', compact('posts', 'postCategories', 'tags', 'postRecentes'));
    }

    public function displayPostByCategory($slug)
    {
        $category = PostCategory::where('slug', $slug)->first();
        $posts = Post::where('post_category_id', $category->id)->with('user', 'comments')->paginate(1);
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.blog', compact('posts', 'postCategories', 'tags', 'postRecentes'));
    }

    public function simpleBlog($slug)
    {
        $post = Post::with('user', 'comments', 'comments.user')->where('slug', $slug)->firstOrFail();
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.simple_blog', compact('post', 'postCategories', 'tags', 'postRecentes'));
    }

    public function getCommentBlog($post_id)
    {
        $comments = Post::with('comments', 'comments.user')
            ->where('id', $post_id)
            ->firstOrFail()->comments;

        return response()->json($comments);
    }

    public function storeCommentBlog(Request $request)
    {
        $commentPost = CommentPost::create([
            'user_id' => Auth::id(),
            'post_id' => $request->post_id,
            'content' => $request->content,
        ]);
        $comment = CommentPost::with('user')->where('id', $commentPost->id)->firstOrFail();

        return response()->json(['message' => 'success', 'comment' => $comment]);
    }

    public function about()
    {
        $about = About::first();

        return view('clients.about', compact('about'));
    }

    public function contact()
    {
        $contact = Contact::first();

        return view('clients.contact', compact('contact'));
    }
}
