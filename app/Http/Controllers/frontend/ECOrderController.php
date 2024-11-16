<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\generalsetting;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\OrderAddresse;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ECOrderController extends Controller
{
    public function productDetails($id)
    {
        $settings = generalsetting::first();
        $products = Product::find($id);
        $category_products = Product::where('status', 'Published')->where('category_id', $products->category_id)->take(10)->get();
        $products_images = ProductImage::where('product_id', $id)->get();
        return view('frontend.pages.product_details.product-details')
            ->with('products', $products)
            ->with('products_images', $products_images)
            ->with('settings', $settings)
            ->with('category_products', $category_products);
    }
    public function cheakout(Request $request)
    {
        $request->validate([
            'qty' => ['required', 'string', 'max:2', 'regex:/^[0-9]*$/'],
        ]);

        $product = Product::find($request->product_id);

        session([
            'qty' => $request->qty,
            'product_id_cart' => $product->id,
            'atr_Colors' => $request->atr_Colors,
            'atr_Wide' => $request->atr_Wide,
            'atr_Size' => $request->atr_Size,
            'atr_Dimension' => $request->atr_Dimension,
            'atr_Height' => $request->atr_Height,
            'atr_Weight' => $request->atr_Weight,
            'atr_Pieces' => $request->atr_Pieces,
            'atr_Material' => $request->atr_Material,
        ]);
        $subtotal = $product->sale_price * session('qty');



        return view('frontend.pages.cheakout.cheakout', ['product_id' => $request->product_id, 'subtotal' => $subtotal]);
    }

    public function completeCheakout(Request $request, $product_id)
    {
        $request->validate([
            'name' => ['required', 'string',],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'type' => ['required', 'string',],
        ]);

        $products = Product::find($product_id);
        $product_price = $products->sale_price * session('qty');
        $product_qty = session('qty');
        $order_id = 'T' . date('ymdhi') . mt_rand(1000, 9999);
        if ($request->type == 'inside') {
            $delivery_charge = 80;
        } else {
            $delivery_charge = 150;
        }

        //Order Main Table Intsert
        $order = new Order();
        $order->code = $order_id;
        $order->amount = $product_price + $delivery_charge;
        $order->sub_total = $product_price;
        $order->shipping_amount = $delivery_charge;
        $order->save();

        //Order Main Table Intsert
        $orderaddress = new OrderAddresse();
        $orderaddress->name = $request->name;
        $orderaddress->phone = $request->phone;
        $orderaddress->address = $request->address;
        $orderaddress->order_id = $order->id;
        $orderaddress->save();

        //Order Product Details Insert
        $table = new OrderProduct();
        $table->order_id = $order->id;
        $table->qty = $product_qty;
        $table->price = $products->sale_price;
        $table->product_id = $products->id;
        $table->product_name = $products->name;
        $table->product_image = $products->image;
        $table->atr_Colors = session('atr_Colors');
        $table->atr_Wide =  session('atr_Wide');
        $table->atr_Size =  session('atr_Size');
        $table->atr_package =  session('atr_package');
        $table->atr_Dimension =  session('atr_Dimension');
        $table->atr_Height =  session('atr_Height');
        $table->atr_Weight =  session('atr_Weight');
        $table->atr_Pieces =  session('atr_Pieces');
        $table->atr_Names =  session('atr_Names');
        $table->atr_Material =  session('atr_Material');
        $table->save();
        $request->session()->forget(['atr_Wide', 'atr_Colors', 'atr_Size', 'atr_package', 'atr_Dimension', 'atr_Height', 'atr_Weight', 'atr_Pieces', 'atr_Names', 'atr_Material', '_token', 'product_id_cart', 'qty']);
        return view('frontend.pages.complete_order.complete-order', ['order_id' => $order->id]);
    }
}
