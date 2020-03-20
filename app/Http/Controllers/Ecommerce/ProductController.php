<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\ProductImage;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $products = Product::all();
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"]
        ];
        return view('Dashborad.pages.product', compact('products', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function getcategories() {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function getsubcategories($id) {
        $category = Category::where('id', $id)->first();
        $subcategoires = $category->subCategories;
        return response()->json($subcategoires);
    }

    public function getsubsubcategories($id) {
        $subcategory = SubCategory::where('id', $id)->first();
        $subsubcategories = $subcategory->subsubCategories;
        return response()->json($subsubcategories);
    }

    public function uploadImage(Request $request) {
        $file = $request->file('file');
        $path = $file->store('media_proudects');
        $image = new ProductImage;
        $image->image = $file;
        $image->is_main = false;
        $image->save();
    }

}
