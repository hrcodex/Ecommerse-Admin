<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\generalsetting;
use App\Models\Order;
use App\Models\OrderAddresse;
use App\Models\OrderProduct;
use Illuminate\Http\Request;



class InvoiceController extends Controller
{
    public function generatePDF($id)
    {
        $order = Order::find($id);
        $orderAddresse  = OrderAddresse::where('order_id', $id)->first();
        $orderProduct  = OrderProduct::where('order_id', $id)->first();
        $generalSettings  = generalsetting::first();

        return view('backend.pages.invoices.details')
            ->with('order', $order)
            ->with('orderAddresse', $orderAddresse)
            ->with('generalSettings', $generalSettings)
            ->with('orderProduct', $orderProduct);
    }
}
