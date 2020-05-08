<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Request;
use LaravelLocalization;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function validate_trans(Request $request, $params) {
        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            foreach ($params as $param) {
                $request->validate([
                    "$param[0].$localeCode => $param[1]"
                ]);
            }
        }
    }

    public function getJson_en() {
        $json_en = file_get_contents(base_path('public/data/locales/en.json'));
        $en = json_decode($json_en);
        return response()->json($en);
    }

    public function getJson_ar() {
        $json_ar = file_get_contents(base_path('public/data/locales/ar.json'));
        $ar = json_decode($json_ar);
        return response()->json($ar);
    }
    

}
