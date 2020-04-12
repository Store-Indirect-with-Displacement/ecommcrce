<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\BlogPostions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\User;

class BlogsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 10; $i++) {
            $blog = new Blog;
            $blog->translateOrNew('en')->title = "UNPACKING THE BREAKING 2 RACE STRATEGY";
            $blog->translateOrNew('ar')->title = "تفكيك استراتيجية السباق";
            $blog->translateOrNew('en')->body = "No matter how far along you are in your sophistication as an amateur astronomer, there is always one fundamental moment that we all go back to. That is that very first moment that we went out where you could really see the cosmos well and you took in the night sky. For city dwellers, this is a revelation as profound as if we discovered aliens living among us. Most of us have no idea the vast panorama of lights that dot a clear night sky when there are no city lights to interfere with the view.";
            $blog->translateOrNew('ar')->body = "بغض النظر عن مدى طولك في تعقيدك كفلكي فلكي ، هناك دائمًا لحظة أساسية واحدة نعود إليها جميعًا. هذه هي اللحظة الأولى التي خرجنا فيها حيث يمكنك حقًا رؤية الكون جيدًا وأخذت في سماء الليل. بالنسبة لسكان المدينة ، هذا الوحي عميق كما لو اكتشفنا الأجانب الذين يعيشون بيننا. معظمنا ليس لديه فكرة عن البانوراما الشاسعة للأضواء التي تنتشر في سماء الليل الصافية عندما لا توجد أضواء المدينة للتدخل في العرض.";
            $blog->translateOrNew('en')->content = "It seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. And there is no question, investing in a good telescope can really enhance your enjoyment of your new passion in astronomy.";
            $blog->translateOrNew('ar')->content = "يبدو أنه منذ اللحظة التي بدأت فيها تأخذ حبك لعلم الفلك على محمل الجد ، فإن الشيء الذي يدور في ذهنك هو نوع التلسكوب الذي ستحصل عليه. ولا شك أن الاستثمار في مقراب جيد يمكن أن يعزز استمتاعك بشغفك الجديد في علم الفلك.";
            $blog->date = $this->setdate();
            //create deflaut image
            if ($i == 0) {
                $defaultpath = public_path('images/pages/card-img-overlay.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'card-img-overlay.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 1) {
                $defaultpath = public_path('images/pages/content-img-1.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'content-img-1.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 2) {
                $defaultpath = public_path('images/pages/card-img-overlay.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'card-img-overlay.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }

            if ($i == 3) {
                $defaultpath = public_path('images/pages/content-img-2.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'content-img-2.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 4) {
                $defaultpath = public_path('images/pages/content-img-3.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'content-img-3.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 5) {
                $defaultpath = public_path('images/pages/content-img-4.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'content-img-4.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 6) {
                $defaultpath = public_path('images/pages/search-result.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'search-result.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }

            if ($i == 7) {
                $defaultpath = public_path('images/pages/knowledge-base-cover.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'knowledge-base-cover.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 8) {
                $defaultpath = public_path('images/pages/faq.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'faq.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }
            if ($i == 9) {
                $defaultpath = public_path('images/pages/card-img-overlay.jpg');
                $imagepath = 'images/pages/bloglist/blogmainImages';
                if (!Storage::exists($defaultpath)) {
                    $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'card-img-overlay.jpg');
                    $blog->image = $path;
                } else {
                    $path = Storage::get($defaultpath);
                    $blog->image = $path;
                }
            }

            $user = User::where('id', 1)->first();
            $blog->user()->associate($user);
            $blog->save();


            $cat = Category::where('id', 1)->first();
            $blogpos = new BlogPostions;
            $blogpos->blog()->associate($blog);
            $blogpos->Category()->associate($cat);
            $blogpos->save();

            $cat = Category::where('id', 2)->first();
            $blogpos = new BlogPostions;
            $blogpos->blog()->associate($blog);
            $blogpos->Category()->associate($cat);
            $blogpos->save();

            $cat = Category::where('id', 3)->first();
            $blogpos = new BlogPostions;
            $blogpos->blog()->associate($blog);
            $blogpos->Category()->associate($cat);
            $blogpos->save();


            $subCategory = SubCategory::where('id', 1)->first();
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

            $subCategory = SubCategory::where('id', 2)->first();
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

            $subCategory = SubCategory::where('id', 3)->first();
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

            $subsubCategory = SubSubCategory::where('id', 1)->first();
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


            $subsubCategory = SubSubCategory::where('id', 3)->first();
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


            $subsubCategory = SubSubCategory::where('id', 2)->first();
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

    private function setdate() {
        $date = now()->timezone('egypt');
        $format = "D , j M  \A\T H:i ";
        $dateFormat = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($format);
        $DateTime = strtoupper($dateFormat);
        return $DateTime;
    }

}
