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
            Route::get('/', function () {
                return view('home');
            });

            Auth::routes();
            Route::get('/home', 'HomeController@index')->name('home');

//authentication Views
            Route::get('auth-login', 'AuthenticationController@login')->name('auth-login');
            Route::get('auth-register', 'AuthenticationController@register')->name('auth-register');
            Route::get('auth-forgot_password', 'AuthenticationController@forgot_password')->name('auth-forgot_password');
            Route::get('auth-reset_password', 'AuthenticationController@reset_password')->name('auth-reset_password');
            Route::get('auth-lock_screen', 'AuthenticationController@lock_screen')->name('auth-lock_screen');
            Route::get('data/locales/en.json', 'Controller@getJson_en');
            Route::get('data/locales/ar.json', 'Controller@getJson_ar');


            Route::group(['middleware' => ['auth']], function() {
                //Dashborad
                Route::group(['middleware' => ['admin']], function () {
                    Route::get('dashborad-analytics', 'DashbroadController@dashboradAnalytics')->name('dashborad-analytics');
                    //Product and Categories
                    Route::get('productList', 'Ecommerce\ProductController@index')->name('productList');
                    Route::get('categorieslist', 'Ecommerce\CategoriesController@index')->name('categorieslist');
                    Route::post('categoryStore', 'Ecommerce\CategoriesController@store')->name('cat_store');
                    Route::post('subsubcategorystore/{id}', 'Ecommerce\CategoriesController@storeSub_SubCategories')->name('sub_cat_store');
                    Route::get('getsubsubcategory/{id}', 'Ecommerce\CategoriesController@getSubSubCategoey')->name('getsubcat');
                    Route::post('deletesubsubcategory/{id}', 'Ecommerce\CategoriesController@deleteSubsubCategory')->name('deletesubsubCategory');
                    Route::post('deletesubcategory/{id}', 'Ecommerce\CategoriesController@deteteSubCategory')->name('deletesubCategory');
                    Route::post('deletecategory/{id}', 'Ecommerce\CategoriesController@destroy')->name('deletecategory');
                });
            });
        });
