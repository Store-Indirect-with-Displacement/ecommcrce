<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use View;
use App\User;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
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
