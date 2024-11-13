<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('backend.pages.orders.list');
    }

    public function details()
    {
        return view('backend.pages.orders.details');
    }

    public function cart()
    {
        return view('backend.pages.orders.cart');
    }
    public function cheakout()
    {
        return view('backend.pages.orders.cheakout');
    }
}
