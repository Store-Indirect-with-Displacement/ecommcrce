<?php

namespace App\Http\Controllers\Ecommerce;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use App\ProductSize;
use App\SubCategory;
use App\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use LaravelLocalization;
class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $products = Product::all();
           $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"],
        ];
        return view('Dashborad.pages.product', compact('products', 'breadcrumbs','pageConfigs'));
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
            'discount' => 'nullable',
        ];
        $request->validate($rules);
        $category = Category::find($request->input('category_id'));
        $subcategory = SubCategory::find($request->input('subcategory_id'));
        $subsubCategory = SubSubCategory::find($request->input('subsubcategory_id'));
        $product = new Product();
        $product->translateOrNew('en')->name = $request->input('name_en');
        $product->translateOrNew('ar')->name = $request->input('name_ar');
        $product->translateOrNew('en')->Details = $request->input('details_en');
        $product->translateOrNew('ar')->Details = $request->input('details_ar');
        $product->price = $request->input('price');
        $product->Discount = $request->input('discount');
        $product->category_id;
        if ($request->input('discount') != null) {
            $product->is_Discount = 1;
        }

        $imagepath = 'images/pages/productlist/productsmainImages';
        $path = $request->file('Image')->storeAs($imagepath, $request->file('Image')->getClientOriginalName(), ['disk' => 'public']);
        $product->image = $path;
        $product->Category()->associate($category);
        $product->SubCategory()->associate($subcategory);
        $product->SubSubCategory()->associate($subsubCategory);
        $images = $request->session()->get('images');
        $product->save();

        if ($request->input('size')) {
            foreach ($request->input('size') as $size) {
                $productsize = new ProductSize;
                $productsize->size = $size;
                $productsize->Product()->associate($product);
                $productsize->save();
            }
        }
        if ($request->input('color')) {
            foreach ($request->input('color') as $color) {
                $productcolor = new ProductColor;
                $productcolor->color = $color;
                $productcolor->Product()->associate($product);
                $productcolor->save();
            }
        }
        if ($images) {
            $request->session()->forget('images');
            foreach ($images as $key => $img) {
                $image = ProductImage::where('id', $img["id"])->first();
                $image->product()->associate($product);
                $image->update();
            }
        }

        return redirect()->route('productList');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $pageConfigs = [
            'bodyClass' => 'ecommerce-application',
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "eCommerce"], ['name' => "Checkout"]
        ];
        $product = Product::where('id', $id)->first();
        $category = Category::where('id', $product->category_id)->first();
        $products = $category->products;
        $categoires = Category::where('is_navbar', 1)->get();
        return view('site.ForntEnd.product_details', compact('product', 'categoires', 'products', 'pageConfigs', 'breadcrumbs'));
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
        $imagepath = 'images/pages/productlist/productsImages';
        $path = $file->storeAs($imagepath, $filename, ['disk' => 'public']);
//        $file->move($path, $filename);
        $image = new ProductImage;
        $image->path = $path;
        $image->name = $file->getClientOriginalName();
        $image->is_main = false;
        $Issave = $image->save();
        $images = [
            'id' => $image->id,
            'image' => $image->path,
            'name' => $image->name,
            'is_main' => $image->is_main,
        ];
        $request->session()->push('images', $images);
        if ($Issave) {
            return response('success', 200);
        }
    }

    public function removeImage(Request $request) {
        $filename = $request->input('file');
        $image = ProductImage::where('name', $filename)->first();
        Storage::delete('public/' . $image->path);
        if ($request->session()->has('images')) {
            foreach ($request->session()->get('images') as $key => $img) {
                if ($img["name"] === $filename) {
                    $request->session()->pull('images.' . $key);
                    break;
                }
            }
        }
        $image->delete();
        return response('success', 200);
    }

}
