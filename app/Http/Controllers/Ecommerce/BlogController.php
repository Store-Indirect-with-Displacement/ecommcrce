<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelLocalization;
use App\Blog;
use App\BlogPostions;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use Carbon\Carbon;
use Storage;

class BlogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"]
        ];
        $blogs = Blog::latest()->paginate(10);
        return view('Dashborad.pages.blogs.blog', compact('breadcrumbs', 'pageConfigs', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"]
        ];
        $categires = Category::all();
        return view('Dashborad.pages.blogs.create_blog', compact('breadcrumbs', 'pageConfigs', 'categires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules = [
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'body_en' => 'required|max:1000',
            'body_ar' => 'required|max:1000',
            'content_en' => 'required|max:1000',
            'content_ar' => 'required|max:1000',
            'Image' => 'nullable|mimes:jpg,jpeg,png,gif,mp4,mwv,wma,webm'
        ];
        $request->validate($rules);
        $blog = new Blog;
        $blog->translateOrNew('en')->title = $request->input('title_en');
        $blog->translateOrNew('ar')->title = $request->input('title_ar');
        $blog->translateOrNew('en')->body = $request->input('body_en');
        $blog->translateOrNew('ar')->body = $request->input('body_ar');
        $blog->translateOrNew('en')->content = $request->input('content_en');
        $blog->translateOrNew('ar')->content = $request->input('content_en');
        $blog->date = $this->setdate();
        if ($request->hasFile('Image')) {
            $imagepath = 'images/pages/bloglist/blogmainImages';
            $path = $request->file('Image')->storeAs($imagepath, $request->file('Image')->getClientOriginalName(), ['disk' => 'public']);
            $blog->image = $path;
        } else {
//create deflaut image
            $defaultpath = public_path('userInterface/images/blog/1.jpg');
            $imagepath = 'images/pages/bloglist/blogmainImages';
            if (!Storage::exists($defaultpath)) {
                $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, '1.jpg');
                $blog->image = $path;
            } else {
                $path = Storage::get($defaultpath);
                $blog->image = $path;
            }
        }
        $user = auth()->user();
        $blog->user()->associate($user);
        $blog->save();
        if ($request->has('positions_categories')) {
            foreach ($request->input('positions_categories') as $cat_id) {
                $cat = Category::where('id', $cat_id)->first();
                $blogpos = new BlogPostions;
                $blogpos->blog()->associate($blog);
                $blogpos->Category()->associate($cat);
                $blogpos->save();
            }
        }

        if ($request->has('positions_subcategories')) {
            foreach ($request->input('positions_subcategories')as $subcat_id) {
                $subCategory = SubCategory::where('id', $subcat_id)->first();
                $cat = Category::where('id', $subCategory->category_id)->first();
                $blogpos = BlogPostions::where('category_id', $cat->id)->first();
                if ($blogpos) {
                    $blogpos->blog()->associate($blog);
                    $blogpos->SubCategory()->associate($subCategory);
                    $blogpos->update();
                } else {
                    $blogpos = new BlogPostions;
                    $blogpos->blog()->associate($blog);
                    $blogpos->Category()->associate($cat);
                    $blogpos->SubCategory()->associate($subCategory);
                    $blogpos->save();
                }
            }
        }


        if ($request->has('positions_subsubcategories')) {
            foreach ($request->input('positions_subsubcategories')as $subsubcat_id) {
                $subsubCategory = SubSubCategory::where('id', $subsubcat_id)->first();
                //find subCategory
                $subCategory = SubCategory::where('id', $subsubCategory->sub_category_id)->first();
                //find category 
                $cat = Category::where('id', $subCategory->category_id)->first();
                //find blogs by category and subcategory
                $blogpos = BlogPostions::where('category_id', $cat->id)
                        ->where('sub_category_id', $subCategory->id)
                        ->first();
                if ($blogpos) {
                    $blogpos->blog()->associate($blog);
                    $blogpos->SubSubCategory()->associate($subsubCategory);
                    $blogpos->update();
                } else {
                    $blogpos = new BlogPostions;
                    $blogpos->blog()->associate($blog);
                    $blogpos->Category()->associate($cat);
                    $blogpos->SubCategory()->associate($subCategory);
                    $blogpos->SubSubCategory()->associate($subsubCategory);
                    $blogpos->save();
                }
            }
        }

        return redirect()->route('blogList');
    }

    /**
     * 
     * @return type
     */
    private function setdate() {
        $date = now()->timezone('egypt');
        $format = "D , j M  \A\T H:i ";
        $dateFormat = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($format);
        $DateTime = strtoupper($dateFormat);
        return $DateTime;
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
        $pageConfigs = [
            'pageHeader' => false,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Data List"], ['name' => "List View"]
        ];
        $blog = Blog::where('id', $id)->first();
        $blogPos = BlogPostions::where('blog_id', $blog->id)->get();
        $categires = Category::all();

        return view('Dashborad.pages.blogs.edit_blog', compact('pageConfigs', 'breadcrumbs', 'blog', 'categires', 'blogPos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $rules = [
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'body_en' => 'required|max:1000',
            'body_ar' => 'required|max:1000',
            'content_en' => 'required|max:1000',
            'content_ar' => 'required|max:1000',
            'Image' => 'nullable|mimes:jpg,jpeg,png,gif,mp4,mwv,wma,webm'
        ];
        $request->validate($rules);
        $blog = Blog::where('id', $id)->first();
        $blog->translateOrNew('en')->title = $request->input('title_en');
        $blog->translateOrNew('ar')->title = $request->input('title_ar');
        $blog->translateOrNew('en')->body = $request->input('body_en');
        $blog->translateOrNew('ar')->body = $request->input('body_ar');
        $blog->translateOrNew('en')->content = $request->input('content_en');
        $blog->translateOrNew('ar')->content = $request->input('content_en');
        $blog->date = $this->setdate();
        if ($request->hasFile('Image')) {
            $imagepath = 'images/pages/bloglist/blogmainImages';
            $path = $request->file('Image')->storeAs($imagepath, $request->file('Image')->getClientOriginalName(), ['disk' => 'public']);
            $blog->image = $path;
        }
        $user = auth()->user();
        $blog->user()->associate($user);
        $blog->update();
        //update positison
        $blogpos = BlogPostions::where('blog_id', $blog->id)->get();


        foreach ($blogpos as $pos) {
            if ($request->has('positions_categories')) {
                foreach ($request->input('positions_categories') as $cat_id) {
                    $cat = Category::where('id', $cat_id)->first();
                    $pos->blog()->associate($blog);
                    $pos->Category()->associate($cat);
                    $pos->update();
                }
            }

            if ($request->has('positions_subcategories')) {
                foreach ($request->input('positions_subcategories')as $subcat_id) {
                    $subCategory = SubCategory::where('id', $subcat_id)->first();
                    $cat = Category::where('id', $subCategory->category_id)->first();
                    $blogpostions = BlogPostions::where('category_id', $cat->id)
                            ->where('blog_id', $blog->id)
                            ->first();
                    if ($blogpostions) {
                        $blogpostions->blog()->associate($blog);
                        $blogpostions->SubCategory()->associate($subCategory);
                        $blogpostions->update();
                    } else {
                        $pos->blog()->associate($blog);
                        $pos->Category()->associate($cat);
                        $pos->SubCategory()->associate($subCategory);
                        $pos->update();
                    }
                }
            }


            if ($request->has('positions_subsubcategories')) {
                foreach ($request->input('positions_subsubcategories')as $subsubcat_id) {
                    $subsubCategory = SubSubCategory::where('id', $subsubcat_id)->first();
                    //find subCategory
                    $subCategory = SubCategory::where('id', $subsubCategory->sub_category_id)->first();
                    //find category 
                    $cat = Category::where('id', $subCategory->category_id)->first();
                    //find blogs by category and subcategory
                    $blogpostions = BlogPostions::where('category_id', $cat->id)
                            ->where('sub_category_id', $subCategory->id)
                            ->where('blog_id', $blog->id)
                            ->first();
                    if ($blogpostions) {
                        $blogpostions->blog()->associate($blog);
                        $blogpostions->SubSubCategory()->associate($subsubCategory);
                        $blogpostions->update();
                    } else {
                        $pos->blog()->associate($blog);
                        $pos->Category()->associate($cat);
                        $pos->SubCategory()->associate($subCategory);
                        $pos->SubSubCategory()->associate($subsubCategory);
                        $pos->update();
                    }
                }
            }
        }
        return redirect()->route('blogList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $blog = Blog::where('id', $id)->first();
        $blogpos = BlogPostions::where('blog_id', $blog->id)->get();
        foreach ($blogpos as $pos) {
            BlogPostions::where('id', $pos->id)->delete();
        }
        return $blog->delete();
    }

}
