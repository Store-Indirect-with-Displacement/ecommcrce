<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductShopController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'bodyClass' => 'ecommerce-application',
             'isMain' => '0',
            'mainLayoutType' => 'horizontal',
        ];

        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "eCommerce"], ['name' => "Shop"]
        ];
        $products = Product::all();
        $catagoires = Category::all();
        return view('site.ForntEnd.product_shop', compact('pageConfigs', 'breadcrumbs', 'products', 'catagoires'));
    }

    public function Fliter(Request $request) {
        return $request;
    }

}
