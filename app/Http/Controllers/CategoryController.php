<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CategoryController extends Controller {

    public function __construct() {

        $categories = \App\Categories::all();
        $currencies = \App\Currencies::all();
        view()->share('categories', $categories);
        view()->share('currencies', $currencies);
    }

    public function index($slug) {
        $category = \App\Categories::where('slug', $slug)->first();
        if (!$category) {
            \Session::flash('flash_message_error', 'We have no category with this name.');
            return redirect()->back();
        }
        $category_products_ids = \App\ProductsCategories::where('category_id', $category->id)->lists('product_id');
        $products = \App\Products::whereIn('id', $category_products_ids)->get();




        return view('category.index', [
            'page_title' => $category->name,
            'category' => $category,
            'category_products' => $products,
        ]);
    }

}
