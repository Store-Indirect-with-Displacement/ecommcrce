                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>@yield('title') - E-Commerce </title>
        {{-- Include core + vendor Styles --}}
        @include('site/layouts/style')
        <!--===============================================================================================-->

    </head>
    <body class="ps-loading">
        <div class="header--sidebar"></div>
        <!-- Header -->
        <header class="header">
            <div class="header__top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                            <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                            <div class="header__actions">
                                <a href="<?= route('login') ?>">{{__('main.Login')}}</a>
                                <a href="<?= route('register') ?>">{{__('main.Register')}}</a>
                                <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><img src="{{asset('website/images/flag/usa.svg')}}" alt=""> USD</a></li>
                                        <li><a href="#"><img src="{{asset('website/images/flag/singapore.svg')}}" alt=""> SGD</a></li>
                                        <li><a href="#"><img src="{{asset('website/images/flag/japan.svg')}}" alt=""> JPN</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group ps-dropdown">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php foreach (LaravelLocalization::getSupportedLocales(true) as $localCode => $properties): ?>
                                            <?php if ($localCode == App::getLocale()): ?>
                                                <?= $properties['native'] ?> 
                                                <i class="fa fa-angle-down"></i>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach (LaravelLocalization::getSupportedLocales(true) as $localCode => $properties): ?>
                                            <?php if ($localCode != App::getLocale()): ?>
                                                <li>
                                                    <a href="<?= LaravelLocalization::getLocalizedURL($localCode, null, [], true) ?>" hreflang="$localCode">
                                                        <?= $properties['native'] ?>  
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navigation">
                <div class="container-fluid">
                    <div class="navigation__column left">
                        <div class="header__logo"><a class="ps-logo" href="<?= route('index') ?>"><img src="{{asset('userInterface/images/logo.png')}}" alt=""></a></div>
                    </div>
                    <div class="navigation__column center">
                        <ul class="main-menu menu">
                            <li class="menu-item menu-item-has-children dropdown"><a href="<?= route('index') ?>">{{__('main.home')}}</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="<?= route('index') ?>">{{__('main.Homepage #1')}}</a></li>
                                    <li class="menu-item"><a href="#">{{__('main.Homepage #2')}}</a></li>
                                    <li class="menu-item"><a href="#">{{__('main.Homepage #3')}}</a></li>
                                </ul>
                            </li>
                            <?php foreach ($categoires as $cat): ?>  
                                <li class="menu-item menu-item-has-children has-mega-menu"><a href="#"><?= $cat->name ?></a>
                                    <div class="mega-menu">
                                        <div class="mega-wrap">
                                            <?php if ($cat->id == 1): ?>
                                                <div class="mega-column">
                                                    <ul class="mega-item mega-features">
                                                        <li><a href="<?= route('productshop') ?>">NEW RELEASES</a></li>
                                                        <li><a href="<?= route('productshop') ?>">FEATURES SHOES</a></li>
                                                        <li><a href="<?= route('productshop') ?>">BEST SELLERS</a></li>
                                                        <li><a href="<?= route('productshop') ?>">NOW TRENDING</a></li>
                                                        <li><a href="<?= route('productshop') ?>">SUMMER ESSENTIALS</a></li>
                                                        <li><a href="<?= route('productshop') ?>">MOTHER'S DAY COLLECTION</a></li>
                                                        <li><a href="<?= route('productshop') ?>">FAN GEAR</a></li>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                            <?php foreach ($cat->subCategories as $subcat): ?>
                                                <div class="mega-column">
                                                    <h4 class="mega-heading"><?= $subcat->name ?></h4>
                                                    <ul class="mega-item">
                                                        <li><a href="product-listing.html">{{__('main.All')}} <?= $subcat->name ?></a></li>
                                                        <?php foreach ($subcat->subsubCategories as $subsubcat): ?>
                                                            <li><a href="product-listing.html"><?= $subsubcat->name ?></a></li>

                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endforeach; ?>


                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            <li class="menu-item menu-item-has-children dropdown"><a href="<?= route('siteblogList') ?>">Blogs</a>

                            </li>
                            <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                                    <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                                </ul>
                            </li>
                            <?php if (auth()->check()): ?>
                                <?php if (auth()->user()->isAdmin == 1): ?>
                                    <li class="menu-item">
                                        <a <?php if (App::getLocale() == 'ar'): ?> style="font-size:18px;" <?php endif; ?> href="{{ route('dashborad-analytics') }}">{{__('main.Dashboard')}}</a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="navigation__column right">

                        <div class="ps-cart">
                            <a class="ps-cart__toggle" href="#">
                                <span><i id="cartcount">0</i></span>
                                <i class="ps-icon-shopping-cart"></i>
                            </a>
                            <div id="cart_list"class="ps-cart__listing">

                                <div class="ps-cart__total">
                                    <p>Number of items:<span id="numberitems">0</span></p>
                                    <p>Item Total:<span id="item_total">00.00$</span></p>
                                </div>
                                <div class="ps-cart__footer"><a class="ps-btn" href="<?= route('productcart') ?>">Check out<i class="ps-icon-arrow-left"></i></a></div>
                            </div>
                        </div>
                        <div class="ps-cart">
                            <a class="ps-cart__toggle" href="#">
                                <span><i id="witchcount">0</i></span>
                                <i class="ps-icon-heart"></i>
                            </a>
                            <div id="witch_list"class="ps-cart__listing">

                                <div class="ps-cart__total">
                                    <p>Number of items:<span id="numberitemswitch">36</span></p>
                                </div>
                                <div class="ps-cart__footer"><a class="ps-btn" href="<?= route('productwishlist') ?>">Wish List Page<i class="ps-icon-arrow-left"></i></a></div>
                            </div>
                        </div>
                        <div class="menu-toggle"><span></span></div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="header-services">
            <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
                <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
                <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
            </div>
        </div>
        <main class="ps-main">
            @yield('content')
        </main>
        @include('site/layouts/footer')


        <!-- Menu Mobile -->


        <!-- JS Library-->
        {{-- Include core + vendor scripts --}}
        @include('site/layouts/scripts')
    </body>
</html>