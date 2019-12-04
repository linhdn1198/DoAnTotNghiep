<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Product;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function changeLanguage($language)
    {
        \Session::put('language', $language);

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $banner = Banner::first();
        $products = Product::all();
        $productCategories = ProductCategory::all();

        return view('clients.index', compact('products', 'productCategories', 'banner'));
    }

    public function displayProductByCategory($slug)
    {
        $banner = Banner::first();
        $category = ProductCategory::where('slug', $slug)->first();
        $products = Product::where('product_category_id', $category->id)->get();
        $productCategories = ProductCategory::all();

        return view('clients.index', compact('products', 'productCategories', 'category', 'banner'));
    }
    
    public function searchProduct(Request $request)
    {
        $banner = Banner::first();
        $keyword = $request->search;
        $products = Product::where('name', 'like', '%' . $keyword . '%')->get();
        $productCategories = ProductCategory::all();

        return view('clients.index', compact('products', 'productCategories', 'banner'));
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
        $posts = Post::with('user', 'comments')->get();
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.blog', compact('posts', 'postCategories', 'tags', 'postRecentes'));
    }

    public function postSearch(Request $request)
    {
        $keyword = $request->search;

        $posts = Post::where('title', 'like', '%' . $keyword . '%')->with('user', 'comments')->get();
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.blog', compact('posts', 'postCategories', 'tags', 'postRecentes'));
    }

    public function displayPostByCategory($slug)
    {
        $category = PostCategory::where('slug', $slug)->first();
        $posts = Post::where('post_category_id', $category->id)->with('user', 'comments')->get();
        $postCategories = PostCategory::all();
        $postRecentes = Post::orderBy('created_at', 'DESC')->get();
        $tags = Tag::all();

        return view('clients.blog', compact('posts', 'postCategories', 'tags', 'postRecentes'));
    }
}
