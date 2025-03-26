<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('products.food-beverage');
    }

    public function homeCare()
    {
        return view('products.home-care');
    }

    public function babyKid()
    {
        return view('products.baby-kid');
    }
}
