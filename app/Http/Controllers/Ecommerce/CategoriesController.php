<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use LaravelLocalization;

class CategoriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::all();
        $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"]
        ];
        return view('Dashborad.pages.categories-list-view', compact('categories', 'breadcrumbs','pageConfigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeSub_SubCategories(Request $request, $id) {
        $rules = [
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ];

        $request->validate($rules);
        $subcategory = SubCategory::where('id', $id)->first();
        $sub_subCategory = new SubSubCategory;
        $sub_subCategory->translateOrNew('en')->name = $request->input('name_en');
        $sub_subCategory->translateOrNew('ar')->name = $request->input('name_ar');
        $sub_subCategory->subCategory()->associate($subcategory);
        $sub_subCategory->save();
        return response()->json($sub_subCategory);
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
        ];
        $request->validate($rules);
        $category = new Category;
        $category->translateOrNew('en')->name = $request->input('name_en');
        $category->translateOrNew('ar')->name = $request->input('name_ar');
        $category->save();
        if ($request->input('branchs')) {
            foreach ($request->input('branchs') as $key => $branch) {
                $subCategory = new SubCategory;
                $subCategory->translateOrNew('en')->name = $branch["en"];
                $subCategory->translateOrNew('ar')->name = $branch["ar"];
                $subCategory->category()->associate($category);
                $subCategory->save();
            }
        }
        return redirect()->route('categorieslist');
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
        $category = Category::where('id', $id)->first();
        $subcategory = $category->subCategories();
        foreach ($subcategory as $subcat) {
            $subcat->subsubCategories()->delete();
        }
        $subcategory->delete();
        $category->delete();
        return response('sucess', 200);
    }

    public function getSubSubCategoey($id) {
        $subCategory = SubCategory::where('id', $id)->first();
        $sub_subCategories = $subCategory->subsubCategories;
        return response()->json($sub_subCategories);
    }

    public function deleteSubsubCategory($id) {
        $subsubCategory = SubSubCategory::where('id', $id)->delete();
        return response('sucess', 200);
    }

    public function deteteSubCategory($id) {
        $subCategory = SubCategory::where('id', $id)->first();
        
        $subCategory->subsubCategories()->delete();
        $subCategory->delete();
        return response('sucess', 200);
    }

    
   
}
