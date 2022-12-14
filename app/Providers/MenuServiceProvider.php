<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class MenuServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        // get all data from menu.json file
        $verticalMenuJson = file_get_contents(base_path('resources/json/verticalMenu.json'));
        $verticalMenuData = json_decode($verticalMenuJson);
        $horizontalMenuJson = file_get_contents(base_path('resources/json/horizontalMenu.json'));
        $horizontalMenuData = json_decode($horizontalMenuJson);
        $mainMenuJson = file_get_contents(base_path('resources/json/mainMenu.json'));
        $mainMenuData = json_decode($mainMenuJson);
        // Share all menuData to all the views
        View::share('menuData', [$verticalMenuData, $horizontalMenuData, $mainMenuData]);
    }

}
