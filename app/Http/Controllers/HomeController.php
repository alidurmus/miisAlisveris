<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use CartProvider;

class HomeController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
        $categories = \App\Categories::all();
        $currencies = \App\Currencies::all();
        view()->share('categories', $categories);
        view()->share('currencies', $currencies);
    }

 
    public function index() {
        $products = \App\Products::all();
        return view('home.index', [
            'products' => $products,
            'page_title' => 'Homepage',
        ]);
    }

}
