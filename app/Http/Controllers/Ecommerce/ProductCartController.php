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

    public function moveToWishList($id) {
        $product = Product::where('id', $id)->first();
        if (ProductWitchList()->isEmptyW()) {
            ProductWitchList()->addWhitcList($product);
            $cart = ProductCart()->removeMItem($product);
        } else {
            $cart = ProductCart()->moveMToWitchList($product);
        }
        return response()->json($cart);
    }

    public function wishListIndex() {
        $pageConfigs = [
            'bodyClass' => 'ecommerce-application',
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "eCommerce"], ['name' => "Checkout"]
        ];
        if (auth()->check()) {
            ProductWitchList()->setUserW(auth()->user()->id);
        }
        $wishListData = ProductWitchList()->data();
        return view('site.ForntEnd.product_wishlist', compact('pageConfigs', 'breadcrumbs', 'wishListData'));
    }

    public function moveToCart($id) {
        $product = Product::where('id', $id)->first();
        if (ProductCart()->isEmpty()) {
            ProductCart()->addCart($product);
            $wishList = ProductWitchList()->removeMWItem($product);
        } else {
            $wishList = ProductWitchList()->moveMToCart($product);
        }
        return response()->json($wishList);
    }

    public function addToWishList($id) {
        $product = Product::where('id', $id)->first();
        $WishList = ProductWitchList()->addWhitcList($product);
        return response()->json($WishList);
    }

    public function removeFromWishList($id) {
        $product = Product::where('id', $id)->first();
        $WishList = ProductWitchList()->removeMWItem($product);
        return response()->json($WishList);
    }

    public function getWishList() {
        $WishList = ProductWitchList()->data();
        return response()->json($WishList);
    }

    public function checkcartItem($id) {
        $cartData = ProductCart()->toArray(true);
        foreach ($cartData['CartItems'] as $itme) {
            if ($id == $itme->model_id) {
                return true;
            }
        }
        return false;
    }

    public function checkwishlistItem($id) {
        $wishData = ProductWitchList()->data();
        foreach ($wishData['WitchListItems'] as $item) {
            if ($id == $item->model_id) {
                return true;
            }
        }
        return false;
    }

}
