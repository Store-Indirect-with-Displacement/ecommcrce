<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $category = new Category;
        $category->translateOrNew('ar')->name = "رجالي";
        $category->translateOrNew('en')->name = "Men";
         $category->is_navbar = 1;
        $category->save();

        $subcategory = new SubCategory;
        $subcategory->translateOrNew('ar')->name = "أحذية";
        $subcategory->translateOrNew('en')->name = "Shoes";
        $subcategory->category()->associate($category);
        $subcategory->save();


        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "صالة تدريب";
        $subsubcategory->translateOrNew('en')->name = "Training & Gym";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "كرة سلة";
        $subsubcategory->translateOrNew('en')->name = "Basketball";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "كرة القدم";
        $subsubcategory->translateOrNew('en')->name = "Football";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();


        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "البيسبول";
        $subsubcategory->translateOrNew('en')->name = "Baseball";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();



        $subcategory = new SubCategory;
        $subcategory->translateOrNew('ar')->name = "ملابس";
        $subcategory->translateOrNew('en')->name = "Clothes";
        $subcategory->category()->associate($category);
        $subcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "ضغط و Nike Pro";
        $subsubcategory->translateOrNew('en')->name = "Compression & Nike Pro";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = " بلايز وقمصان";
        $subsubcategory->translateOrNew('en')->name = "Tops & T-Shirts";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "جاكيتات وسترات";
        $subsubcategory->translateOrNew('en')->name = "Jackets & Vests";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();


        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "بناطيل وجوارب";
        $subsubcategory->translateOrNew('en')->name = "Pants & Tights";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();



        $subcategory = new SubCategory;
        $subcategory->translateOrNew('ar')->name = "إكسسوارات";
        $subcategory->translateOrNew('en')->name = "ACCESSORIES";
        $subcategory->category()->associate($category);
        $subcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "ضغط و Nike Pro";
        $subsubcategory->translateOrNew('en')->name = "Compression & Nike Pro";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = " بلايز وقمصان";
        $subsubcategory->translateOrNew('en')->name = "Tops & T-Shirts";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "جاكيتات وسترات";
        $subsubcategory->translateOrNew('en')->name = "Jackets & Vests";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();


        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "بناطيل وجوارب";
        $subsubcategory->translateOrNew('en')->name = "Pants & Tights";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();




        $subcategory = new SubCategory;
        $subcategory->translateOrNew('ar')->name = "اصناف";
        $subcategory->translateOrNew('en')->name = "BRAND";
        $subcategory->category()->associate($category);
        $subcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "نايك";
        $subsubcategory->translateOrNew('en')->name = "NIKE";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "شركة اديداس";
        $subsubcategory->translateOrNew('en')->name = "Adidas";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "ديور";
        $subsubcategory->translateOrNew('en')->name = "Diors";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();

        $subsubcategory = new SubSubCategory;
        $subsubcategory->translateOrNew('ar')->name = "B&G";
        $subsubcategory->translateOrNew('en')->name = "B&G";
        $subsubcategory->subCategory()->associate($subcategory);
        $subsubcategory->save();
        

        $category = new Category;
        $category->translateOrNew('ar')->name = "حريمي";
        $category->translateOrNew('en')->name = "ًWomen";
         $category->is_navbar = 1;
        $category->save();

        $category = new Category;
        $category->translateOrNew('ar')->name = "أطفالي";
        $category->translateOrNew('en')->name = "Kids";
         $category->is_navbar = 1;
        $category->save();
    }

}
