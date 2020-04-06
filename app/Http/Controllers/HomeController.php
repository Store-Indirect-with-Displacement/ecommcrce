<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $categoires = Category::where('is_navbar', 1)->get();

        $allcategories = Category::all();

        $products = Product::all();
        return view('home', compact('categoires', 'products', 'allcategories'));
    }



}
