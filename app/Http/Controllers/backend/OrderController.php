<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderAddresse;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(15);
        $total_orders = Order::get();
        return view('backend.pages.orders.list')
            ->with('orders', $orders)
            ->with('total_orders', $total_orders);


        //         UserData:select(DB::raw("count(phone) as total"))
        // ->whereYear('creation_date', Carbon::now()->year)
        // ->whereMonth('creation_date', Carbon::now()->month)
        // ->get();
    }

    public function details($id)
    {

        $order = Order::find($id);
        $orderAddresse  = OrderAddresse::where('order_id', $id)->first();
        $orderProduct  = OrderProduct::where('order_id', $id)->first();

        return view('backend.pages.orders.details')
            ->with('order', $order)
            ->with('orderAddresse', $orderAddresse)
            ->with('orderProduct', $orderProduct);
    }

    public function changeStatus($id, $sl_id)
    {

        $order = Order::find($id);

        if ($sl_id == 1) {
            $order->unconfirmed = 0;
            $order->confirmed = 1;
            $order->painding = 0;
            $order->deliverd = 0;
            $order->return = 0;
            $order->return_accepted = 0;
        } elseif ($sl_id == 2) {
            $order->unconfirmed = 0;
            $order->confirmed = 0;
            $order->painding = 1;
            $order->deliverd = 0;
            $order->return = 0;
            $order->return_accepted = 0;
        } elseif ($sl_id == 3) {
            $order->unconfirmed = 0;
            $order->confirmed = 0;
            $order->painding = 0;
            $order->deliverd = 1;
            $order->return = 0;
            $order->return_accepted = 0;
        } elseif ($sl_id == 4) {
            $order->unconfirmed = 0;
            $order->confirmed = 0;
            $order->painding = 0;
            $order->deliverd = 0;
            $order->return = 1;
            $order->return_accepted = 0;
        } elseif ($sl_id == 5) {
            $order->unconfirmed = 0;
            $order->confirmed = 0;
            $order->painding = 0;
            $order->deliverd = 0;
            $order->return = 0;
            $order->return_accepted = 1;
        } else {
            $order->unconfirmed = 1;
            $order->confirmed = 0;
            $order->painding = 0;
            $order->deliverd = 0;
            $order->return = 0;
            $order->return_accepted = 0;
        }

        $order->save();

        $notification = array('messege' => 'Status Change Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function cart()
    {
        return view('backend.pages.orders.cart');
    }
    public function cheakout()
    {
        return view('backend.pages.orders.cheakout');
    }
    public function destroy($id)
    {
        //get Table Data By ID
        $order  = Order::find($id);
        $orderAddresse  = OrderAddresse::where('order_id', $id)->first();
        $orderProduct  = OrderProduct::where('order_id', $id)->first();

        //Deletd Row
        $orderProduct->delete();
        $orderAddresse->delete();
        $order->delete();


        $notification = array('messege' => 'Order Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
