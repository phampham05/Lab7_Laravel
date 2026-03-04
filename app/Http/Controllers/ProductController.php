<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'iPhone 15', 'price' => 25],
            ['name' => 'Samsung A54', 'price' => 8],
            ['name' => 'MacBook Pro', 'price' => 35],
            ['name' => 'Tai nghe Bluetooth', 'price' => 2],
        ];

        return view('products', compact('products'));
    }
}