<?php

use App\Helpers\Helper;

$configData = Helper::applClasses();
?>
{{-- Horizontal Menu --}}
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav {{($configData['theme'] === 'light') ? "navbar-light" : "navbar-dark" }} navbar-without-dd-arrow navbar-shadow navbar-brand-center" role="navigation" data-menu="menu-wrapper" data-nav="brand-center">
                                                                               <div class="navbar-header">
                                                                                   <ul class="nav navbar-nav flex-row">
                                                                                       <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard-analytics">
                                                                                               <div class="brand-logo"></div>
                                                                                               <h2 class="brand-text mb-0">E-Commerce</h2></a></li>
                                                                                       <li class="nav-item nav-toggle">
                                                                                           <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                                                                                               <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                                                                                               <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                                                                                           </a>
                                                                                       </li>
                                                                                   </ul>
                                                                               </div>
                                                                               <!-- Horizontal menu content-->
                                                                               <div class="navbar-container main-menu-content" data-menu="menu-container">
                                                                                   <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                                                                                       {{-- Foreach menu item starts --}}
                                                                                       <?php foreach ($menuData[1]->menu as $menu): ?>
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
                                                                                           <li class="dropdown nav-item <?= (request()->is($menu->url)) ? 'active' : '' ?> <?= $custom_classes ?>" data-menu="dropdown">
                                                                                               <a 
                                                                                               <?php if ($menu->url != "#"): ?>
                                                                                                       href="<?= route($menu->url) ?>" 
                                                                                                   <?php else: ?>
                                                                                                       href="<?= url($menu->url) ?>" 
                                                                                                   <?php endif; ?>

                                                                                                   class="dropdown-toggle nav-link" data-toggle="dropdown">
                                                                                                   <i class="<?= $menu->icon ?>"></i>
                                                                                                   <span data-i18n="<?= $translation ?>"><?= $menu->name ?></span>
                                                                                               </a>
                                                                                               <?php if (isset($menu->submenu)): ?>
                                                                                                   @include('panels/horizontalSubmenu', ['menu'=>$menu->submenu])
                                                                                               <?php endif; ?>
                                                                                           </li>
                                                                                       <?php endforeach; ?>
                                                                                       {{-- Foreach menu item ends --}}
                                                                                   </ul>
                                                                               </div>
                                                                           </div>
                                                                          </div>