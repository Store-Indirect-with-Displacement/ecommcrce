<?php
use App\Helpers\Helper;
$configData = Helper::applClasses();
?>
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-light" : "menu-dark"}} menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= route('dashborad-analytics') ?>">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">{{__('main.E-Commerce')}}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Foreach menu item starts --}}
            <?php foreach ($menuData[0]->menu as $menu): ?>
                <?php if (isset($menu->navheader)): ?>
                    <li class="navigation-header">
                        <span><?= $menu->navheader ?></span>
                    </li>
                <?php else: ?>
                    {{-- Add Custom Class with nav-item --}}
                    <?php
                    $custom_classes = "";
                    if (isset($menu->classlist)) {
                        $custom_classes = $menu->classlist;
                    }
                    $translation = "";
                    if (isset($menu->i18n)) {
                        $translation = $menu->i18n;
                    }
                    ?>
                    <li class="nav-item {{ (request()->is($menu->url)) ? 'active' : '' }} {{ $custom_classes }}">
                        <a href="{{ $menu->url }}">
                            <i class="{{ $menu->icon }}"></i>
                            <span class="menu-title" data-i18n="{{ $translation }}">{{ $menu->name }}</span>
                            <?php if (isset($menu->badge)): ?>
                                <?php $badgeClasses = "badge badge-pill badge-primary float-right" ?>
                                <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass.' test' : $badgeClasses.' notTest' }} ">{{$menu->badge}}</span>
                            <?php endif; ?>
                        </a>
                        <?php if (isset($menu->submenu)): ?>
                            @include('panels/submenu', ['menu' => $menu->submenu])
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
            {{-- Foreach menu item ends --}}
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
