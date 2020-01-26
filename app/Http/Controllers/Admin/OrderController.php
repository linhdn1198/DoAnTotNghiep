<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('user')
            ->orderBy('created_at', 'DESC')
            ->get();
        
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('user', 'orderDetails.product')
            ->where('id', $id)
            ->firstOrFail();

        return view('admin.order.show', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        try {
            $order = Order::where('id', $id)->firstOrFail();
            $order->status = !boolval($order->status);
            $order->save();

            Session::flash('success', __('admin.edit_success_message'));

            return redirect()->route('orders.index');
        } catch (\Exception $ex) {
            Session::flash('error', __('admin.edit_fail_message'));

            return redirect()->route('orders.index');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::where('id', $id)->firstOrFail();
        $order->products()->detach();
        $order->delete();
        Session::flash('success', __('admin.delete_success_message'));

        return redirect()->route('orders.index');
    }
}
