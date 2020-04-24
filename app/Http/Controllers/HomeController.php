<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Blog;
use LaravelLocalization;

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
        $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'isMain' => '1',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"],
        ];
        $categoires = Category::where('is_navbar', 1)->get();
        $blogs = Blog::latest()->paginate(3);
        $allcategories = Category::all();
        $products = Product::all();
        return view('welcome', compact('categoires', 'products', 'allcategories', 'pageConfigs', 'breadcrumbs','blogs'));
    }

    public function home3() {
        $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"],
        ];
        $categoires = Category::where('is_navbar', 1)->get();
        $allcategories = Category::all();
        $products = Product::all();
        return view('home', compact('categoires', 'products', 'allcategories', 'pageConfigs', 'breadcrumbs'));
    }

}
