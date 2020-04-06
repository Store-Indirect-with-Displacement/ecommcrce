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
        if (auth()->check()) {
            ProductCart()->setUser(auth()->user()->id);
        }
        $CartData = ProductCart()->data();
        $CartItems = ProductCart()->toArray(true)['CartItems'];

        return view('site.ForntEnd.prouduct_cart', compact('pageConfigs', 'breadcrumbs', 'CartData', 'CartItems'));
    }

    //add to cart with out quntity
    public function addCart($id) {
        $product = Product::where('id', $id)->first();
        $Cart = Product::addToCart($product->id);
        return response()->json($Cart);
    }

    public function getCart() {
        $Cart = ProductCart()->toArray(true);
        return response()->json($Cart);
    }

    public function removeItemCart($id) {
        $product = Product::where('id', $id)->first();
        $Cart = ProductCart()->removeMItem($product);
        return response()->json($Cart);
    }

    public function IncrementItem($id) {
        $product = Product::where('id', $id)->first();
        $cart = ProductCart()->IncrementItem($product);
        return response()->json($cart);
    }

    public function DecrementItem($id) {
        $product = Product::where('id', $id)->first();
        $cart = ProductCart()->DecrementItem($product);
        return response()->json($cart);
    }

}
