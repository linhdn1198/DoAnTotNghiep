<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Banner;
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
        return view('clients.simple_product');
    }
}
