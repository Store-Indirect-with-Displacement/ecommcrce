
<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::prefix(LaravelLocalization::setLocale())
        ->middleware('web', 'localizationRedirect', 'localeViewPath')
        ->middleware('localeSessionRedirect')
        ->group(function() {

            Route::get('/', 'HomeController@index')->name('index');
            Route::get('data/locales/en.json', 'Controller@getJson_en');
            Route::get('data/locales/ar.json', 'Controller@getJson_ar');
            Auth::routes();




            Route::group(['middleware' => ['auth']], function() {
                //Dashborad
                Route::group(['middleware' => ['admin']], function () {
                    Route::get('dashborad-analytics', 'DashbroadController@dashboradAnalytics')->name('dashborad-analytics');
                    // Categories

                    Route::get('categorieslist', 'Ecommerce\CategoriesController@index')->name('categorieslist');
                    Route::post('categoryStore', 'Ecommerce\CategoriesController@store')->name('cat_store');
                    Route::post('subsubcategorystore/{id}', 'Ecommerce\CategoriesController@storeSub_SubCategories')->name('sub_cat_store');
                    Route::get('getsubsubcategory/{id}', 'Ecommerce\CategoriesController@getSubSubCategoey')->name('getsubcat');
                    Route::post('deletesubsubcategory/{id}', 'Ecommerce\CategoriesController@deleteSubsubCategory')->name('deletesubsubCategory');
                    Route::post('deletesubcategory/{id}', 'Ecommerce\CategoriesController@deteteSubCategory')->name('deletesubCategory');
                    Route::post('deletecategory/{id}', 'Ecommerce\CategoriesController@destroy')->name('deletecategory');

                    //Product
                    Route::get('productList', 'Ecommerce\ProductController@index')->name('productList');
                    Route::get('getcategorirs', 'Ecommerce\ProductController@getcategories')->name('getcategories');
                    Route::get('getsubcategorirs/{id}', 'Ecommerce\ProductController@getsubcategories')->name('getsubcategories');
                    Route::get('getsubsubcategorirs/{id}', 'Ecommerce\ProductController@getsubsubcategories')->name('getsubsubcategories');
                    Route::post('uploadproductimage', 'Ecommerce\ProductController@uploadImage')->name('uploadImage');
                    Route::post('removeprouct', 'Ecommerce\ProductController@removeImage')->name('removeImage');
                    Route::post('saveproduct', 'Ecommerce\ProductController@store')->name('storeproduct');
                });
            });

            //Proudct Fornt End  
            Route::get('/proudct/{id}/details', 'Ecommerce\ProductController@show')->name('product_details');
            Route::get('/proudct/cart', 'Ecommerce\ProductCartController@index')->name('productcart');
            Route::get('/product/cart/data', 'Ecommerce\ProductCartController@getCart')->name('getcart');
            Route::get('/product/{id}/addtocart', 'Ecommerce\ProductCartController@addCart')->name('addTocart');
            Route::get('/product/{id}/removefromcart', 'Ecommerce\ProductCartController@removeItemCart')->name('removeCart');
            Route::get('/product/{id}/incrementcart', 'Ecommerce\ProductCartController@IncrementItem')->name('incrementcart');
            Route::get('/product/{id}/decrementcart', 'Ecommerce\ProductCartController@DecrementItem')->name('decrementcart');
        });
