<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function viewProducts() {
        return view('products.main-product');
    }

    public function viewFoodBeverage() {
        return view('products.food-beverage');
    }

    public function viewHomeCare() {
        return view('products.home-care');
    }

    public function viewBeautyHealth() {
        return view('products.beauty-health');
    }

    public function viewBabyKid() {
        return view('products.baby-kid');
    }
}
