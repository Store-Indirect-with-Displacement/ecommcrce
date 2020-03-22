<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\ProductImage;
use Arr;

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
        $rules = [
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable',
            'subsubcategory_id' => 'nullable',
            'details_en' => 'required|max:1000',
            'details_ar' => 'required|max:1000',
            'price' => 'required|numeric',
            'Image' => 'required|mimes:jpg,jpeg,png,gif,mp4,mwv,wma,webm',
        ];
        $request->validate($rules);
        $category = Category::find($request->input('category_id'));
        $subcategory = SubCategory::find($request->input('subcategory_id'));
        $subsubCategory = SubSubCategory::find($request->input('subsubcategory_id'));
        $product = new Product();
        $product->translateOrNew('en')->name = $request->input('name_en');
        $product->translateOrNew('ar')->name = $request->input('name_ar');
        $product->Category()->associate($category);
        $product->SubCategory()->associate($subcategory);
        $product->SubSubCategory()->associate($subsubCategory);
        $product->order_status = $request->input('status');
        $product->price = $request->input('price');
        $product->image = $request->input('Image');
        $images = $request->session()->get('images');
        $product->save();
        if ($images) {
            $request->session()->forget('images');
            foreach ($images as $key => $img) {
                $image = ProductImage::where('id', $img)->first();
                $image->product()->associate($product);
                $image->update();
            }
        }

        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $product = Product::where('id', $id)->first();
        return view('site.ForntEnd.product_details' . compact('product'));
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
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('ProductImages', $filename);
//        $file->move($path, $filename);
        $image = new ProductImage;
        $image->image = $filename;
        $image->is_main = false;
        $Issave = $image->save();
        $images = [
            'id' => $image->id,
            'image' => $image->image,
            'is_main' => $image->is_main,
        ];
        $request->session()->push('images', $images);
        if ($Issave) {
             return response('success' ,200);
        }
    }

    public function removeImage(Request $request) {
        $filename = $request->input('file');
        $image = ProductImage::where('image', $filename)->first();
        $path = 'ProductImages/' . $request->input('file');
        Storage::delete($path);
        if ($request->session()->has('images')) {
            foreach ($request->session()->get('images') as $key => $img) {
                if ($img["image"] === $filename) {
                    $request->session()->pull('images.' . $key);
                    break;
                }
            }
        }
        $image->delete();
        return response('success' ,200);
    }

}
