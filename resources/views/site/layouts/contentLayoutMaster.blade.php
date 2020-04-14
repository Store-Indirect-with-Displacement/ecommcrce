<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use App\Helpers\Helper;

if (isset($pageConfigs))
    Helper::updatePageConfig($pageConfigs);
?>
<!DOCTYPE html>
<html lang="{{  App::getLocale() }}" data-textdirection="<?= LaravelLocalization::getCurrentLocaleDirection() ?>">
      
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - E-Commerce  Dashboard </title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

        {{-- Include core + vendor Styles --}}
        @include('panels/styles')
        
    </head>

    {{-- {!! Helper::applClasses() !!} --}}
    <?php $configData = Helper::applClasses(); ?>
 {{-- {!! Helper::applClasses() !!} --}}
    <?php $configData = Helper::applClasses(); ?>
    @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'site.layouts.horizontalLayoutMaster' : 'site.layouts.verticalLayoutMaster' ))