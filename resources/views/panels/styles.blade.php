<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">
<link rel="stylesheet" href="{{ asset('vendors/css/vendors.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
{{-- Vendor Styles --}}
@yield('vendor-style')
{{-- Theme Styles --}}
<?php

use App\Helpers\Helper; ?>
<?php $configData = Helper::applClasses(); ?>

<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/dark-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/knowledge-base.css')) }}">
    {{-- Layout Styles works when don't use customizer --}}
    <?php if ($configData['theme'] == 'dark-layout'): ?>
        <link rel="stylesheet" href="{{ asset('css/themes/dark-layout.css') }}">
    <?php endif; ?>
    <?php if ($configData['theme'] == 'semi-dark-layout'): ?>
        <link rel="stylesheet" href="{{ asset('css/themes/semi-dark-layout.css')}}">
    <?php endif; ?> 


    {{-- Page Styles --}}
    <?php if ($configData['mainLayoutType'] === 'horizontal'): ?>
        <link rel="stylesheet" href="{{ asset('css/core/menu/menu-types/horizontal-menu.css')}}">
    <?php endif; ?>
    <link rel="stylesheet" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/core/colors/palette-gradient.css') }}">

    {{-- Page Styles --}}
    @yield('page-style')

    {{-- Laravel Style --}}
    <link rel="stylesheet" href="{{ asset('css/custom-laravel.css') }}">

    {{-- Custom RTL Styles --}}
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css-rtl/pages/knowledge-base.css')}}">
    {{-- Layout Styles works when don't use customizer --}}
    <?php if ($configData['theme'] == 'dark-layout'): ?>
        <link rel="stylesheet" href="{{ asset('css-rtl/themes/dark-layout.css') }}">
    <?php endif; ?>
    <?php if ($configData['theme'] == 'semi-dark-layout'): ?>
        <link rel="stylesheet" href="{{ asset('css-rtl/themes/semi-dark-layout.css')}}">
    <?php endif; ?> 


    {{-- Page Styles --}}
    <?php if ($configData['mainLayoutType'] === 'horizontal'): ?>
        <link rel="stylesheet" href="<?= asset('css-rtl/core/menu/menu-types/horizontal-menu.css') ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/core/colors/palette-gradient.css') }}">

    {{-- Page Styles --}}
    @yield('page-style')

    {{-- Laravel Style --}}
    <link rel="stylesheet" href="{{ asset('css/custom-laravel.css') }}">
<?php endif; ?>