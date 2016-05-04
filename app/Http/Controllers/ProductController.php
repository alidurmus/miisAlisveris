<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ProductController extends Controller {

    public function __construct() {

        $categories = \App\Categories::all();
        $currencies = \App\Currencies::all();
        view()->share('categories', $categories);
        view()->share('currencies', $currencies);
    }

    public function index($slug) {

        $products = \App\Products::all();
        $product = \App\Products::where('slug', $slug)->first();
        if (!$product) {
            \Session::flash('flash_message_error', 'We have no products with this name.');
            return redirect()->back();
        }
        return view('product.index', [
            'products' => $products,
            'page_title' => $product->name,
            'product' => $product
        ]);
    }

}
