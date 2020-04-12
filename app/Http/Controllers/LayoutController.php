<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller {

    public function content() {
        $breadcrumbs = [
            [
                'link' => "dashboard-analytics",
                'name' => "Home"
            ],
            [
                'link' => "dashboard-analytics",
                'name' => "Starter Kit"
            ],
            [
                'name' => "Content Layout"
            ]
        ];
        return view('Dashborad.pages.content-layout', compact('breadcrumbs'));
    }

    public function full() {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true,
            'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        return view('Dashborad.pages.full-layout', compact('pageConfigs'));
    }

}
