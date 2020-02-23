<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Models\CommentProduct;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // dd($this->statisticUser());
        $info = $this->getInfor();
        $revenue = $this->statisticRevenue();
        $order = json_encode($this->statisticOrder());
        $user = $this->statisticUser();
        
        // dd($data);
        return view('admin.dashboard.dashboard', compact('info', 'revenue', 'order', 'user'));
    }

    public function getInfor()
    {
        return [
            'order' => Order::count(),
            'productCategory' => ProductCategory::count(),
            'product' => Product::count(),
            'commentProduct' => CommentProduct::count(),
            'postCategory' => PostCategory::count(),
            'post' => Post::count(),
            'tag' => Tag::count(),
            'user' => User::count(),
        ];
    }
    public function statisticRevenue()
    {
        // $product = Product::select(DB::raw('Date(created_at) as date'), DB::raw('SUM(input_price * quantity) as "input_price"'), DB::raw('SUM(price * quantity) as "price"'))
        //     ->whereBetween('created_at', [$startDay, $endDay])
        //     ->groupBy('date')
        //     ->orderBy('date', 'ASC')
        //     ->get();
        $order = Order::select(DB::raw('Date(created_at) as date'), DB::raw('SUM(total) as "total"'))
            ->where('created_at', '>=', now()->firstOfMonth())
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();
        // $data['date'] = $product->pluck('date')->toArray();
        // $data['inputPrice'] = $product->pluck('input_price')->toArray();
        // $data['price'] = $product->pluck('price')->toArray();
        $data['date'] = $order->pluck('date')->toArray();
        $data['total'] = $order->pluck('total')->toArray();

        return json_encode($data);
        // dd($product);
    }

    public function statisticRevenueAjax(Request $request)
    {
        $order = Order::select(DB::raw('Date(created_at) as date'), DB::raw('SUM(total) as "total"'))
            ->whereBetween('created_at', [$request->startDay, $request->endDay])
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();
        $data['date'] = $order->pluck('date')->toArray();
        $data['total'] = $order->pluck('total')->toArray();
        
        return json_encode($data);
    }

    public function statisticOrder()
    {
        
        $order = Order::select(DB::raw('Date(created_at) as date'), DB::raw('COUNT(total) as "order"'), DB::raw('SUM(total) as "total"'))
            // ->whereBetween('created_at', [now()->firstOfMonth(), now()->endOfMonth()])
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();
        $data['date'] = $order->pluck('date')->toArray();
        $data['order'] = $order->pluck('order')->toArray();
        $data['total'] = $order->pluck('total')->toArray();
        // dd($data);
        return $data;
    }

    public function statisticUser()
    {
        $users = User::select(DB::raw('Date(created_at) as date'), DB::raw('COUNT(*) as "user"'))
            // ->whereBetween('created_at', [$startDay, $endDay])
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();
        
        $data['date'] = $users->pluck('date')->toArray();
        $data['count'] = $users->pluck('count')->toArray();

        return $data;
    }
}
