<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;
class AuthenticationController extends Controller {

    public function login() {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true ,
            'direction' => env('MIX_CONTENT_DIRECTION' ,LaravelLocalization::getCurrentLocaleDirection()),
        ];
        return view('Authentication.login', compact('pageConfigs'));
    }

    public function register() {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true,
            'direction' => env('MIX_CONTENT_DIRECTION' ,LaravelLocalization::getCurrentLocaleDirection()),
        ];

        return view('Authentication.register', compact('pageConfigs'));
    }

    public function forgot_password() {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true,
            'direction' => env('MIX_CONTENT_DIRECTION' ,LaravelLocalization::getCurrentLocaleDirection()),
        ];
        return view('Authentication.forgot_password', compact('pageConfigs'));
    }

    public function reset_password() {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true,
            'direction' => env('MIX_CONTENT_DIRECTION' ,LaravelLocalization::getCurrentLocaleDirection()),
        ];
        return view('Authentication.reset_password', compact('pageConfigs'));
    }

    public function lock_screen() {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true,
            'direction' => env('MIX_CONTENT_DIRECTION' ,LaravelLocalization::getCurrentLocaleDirection()),
        ];
        return view('Authentication.lock_screen', compact('pageConfigs'));
    }

}
