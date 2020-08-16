<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use View;
use App\User;

/**
 * Description of SetupServiceProvider
 *
 * @author hassa
 */
class SetupServiceProvider extends ServiceProvider {

    public function register() {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
       $categories = Category::latest()->paginate(5);
       $cats = Category::all();
       View::share('categories', [$categories, $cats]);
       $this->setUerStatus();
    }

    public function setUerStatus() {
        $users = User::all();
        foreach ($users as $user) {
            if ($user->isOnline()) {
                $user->status = 'active';
                $user->update();
            } else {
                $user->status = 'deactivated';
                $user->update();
            }
        }
    }

}
