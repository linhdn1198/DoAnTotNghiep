<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\About;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
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
        $productRelation = Product::where('product_category_id', $product->product_category_id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('clients.simple_product', compact('product', 'productRelation'));
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
