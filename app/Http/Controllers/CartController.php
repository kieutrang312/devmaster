<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends GeneralController
{
    public function index()
    {
        return view('shop.cart.index');
    }
}
