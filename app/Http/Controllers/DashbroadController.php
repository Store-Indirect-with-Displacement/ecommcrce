<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;

class DashbroadController extends Controller {

    // Dashboard - Analytics
    public function dashboradAnalytics() {
        $pageConfigs = [
            'pageHeader' => false,
             'mainLayoutType' => 'horizontal',
            'direction' => env('MIX_CONTENT_DIRECTION', LaravelLocalization::getCurrentLocaleDirection()),
        ];
        return view('Dashborad.pages.dashborad-analytics', compact('pageConfigs'));
    }

}
