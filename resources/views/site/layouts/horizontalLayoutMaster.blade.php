<?php

use App\Helpers\Helper;

if (isset($pageConfigs)) {
    Helper::updatePageConfig($pageConfigs);
}
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  dir="<?= LaravelLocalization::getCurrentLocaleDirection() ?>"data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - E-Commerce DashBorad</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?= asset('images/logo/favicon.ico') ?>">

        {{-- Include core + vendor Styles --}}
        @include('panels/styles')

    </head>

    {{-- {!! Helper::applClasses() !!} --}}
    <?php $configData = Helper::applClasses(); ?>

    <body class="horizontal-layout horizontal-menu navbar-floating <?= $configData['blankPageClass'] ?> <?= $configData['bodyClass'] ?>  <?= ($configData['theme'] === 'light') ? '' : $configData['theme'] ?> <?= $configData['sidebarClass'] ?> <?= $configData['navbarType'] ?> <?= $configData['footerType'] ?> footer-light" data-menu="horizontal-menu" data-col="2-columns" data-open="hover"  data-layout="<?= $configData['theme'] ?>">


        <!-- BEGIN: Header-->
        {{-- Include Navbar --}}
        @include('site.layouts.navbar')

        {{-- Include Sidebar --}}
        @include('site.layouts.horizontalMenu')

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <!-- BEGIN: Header-->
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>

            <div class="content-wrapper">
                <div class="<?= $configData['sidebarPositionClass'] ?>">
                    <div class="sidebar">
                        {{-- Include Sidebar Content --}}
                        @yield('content-sidebar')
                    </div>
                </div>
                <div class="<?= $configData['contentsidebarClass'] ?>">
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
        @include('site/layouts/footer')

        {{-- include default scripts --}}
        @include('panels/scripts')
    </body>
</html>

