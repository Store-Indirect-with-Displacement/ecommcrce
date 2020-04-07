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

    <body class="vertical-layout vertical-menu-modern 2-columns {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }}  {{($configData['theme'] === 'light') ? '' : $configData['theme'] }} {{ $configData['navbarType'] }} {{ $configData['sidebarClass'] }} {{ $configData['footerType'] }}  footer-light" data-layout="{{ $configData['theme'] }}" data-menu="vertical-menu-modern" data-col="2-columns">


        <!-- BEGIN: Content-->
        <div class="app-content">
            <!-- BEGIN: Header-->
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>

            {{-- Include Navbar --}}
            @include('site.layouts.navbar')

            <div class="content-wrapper">
                <div class="{{ $configData['sidebarPositionClass'] }}">
                    <div class="sidebar">
                        {{-- Include Sidebar Content --}}
                        @yield('content-sidebar')
                    </div>
                </div>
                <div class="{{ $configData['contentsidebarClass'] }}">
                    <div class="content-body">
                        {{-- Include Page Content --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Content-->

        <?php if ($configData['blankPage'] == false): ?>
            @include('Dashborad.pages.customizer')


        <?php endif; ?>

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        {{-- include footer --}}
        @include('panels/footer')

        {{-- include default scripts --}}
        @include('panels/scripts')

    </body>
</html>

