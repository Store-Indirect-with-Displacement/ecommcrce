<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;


class ProductCartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pageConfigs = [
            'bodyClass' => 'ecommerce-application',
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "eCommerce"], ['name' => "Checkout"]
        ];

        return view('site.ForntEnd.prouduct_cart', compact('pageConfigs', 'breadcrumbs'));
    }

    public function addCart($id) {
        $product = Product::where('id', $id)->first();
        
    }

}
