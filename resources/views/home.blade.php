@extends('site.layouts.header')
@section('title', 'Home Page')
@section('site-page-style')
<link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/responsive.css')}}">
<script>
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>

</script>

<script type="text/javascript">
    window.Laravel.addTocart = '<?= route('addTocart', ':id') ?>';
    window.Laravel.removeFromcart = '<?= route('removeCart', ':id') ?>';
    window.Laravel.getCartData = '<?= route('getcart') ?>';
    window.Laravel.product_detials = '<?= route('product_details', ':id') ?>';
    window.Laravel.addTowishList = '<?= route('addTowishList', ':id') ?>';
    window.Laravel.getWishListData = '<?= route('getWishList') ?>';
</script>

@endsection
@section('content')

<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="{{asset('images/h4-slide.png')}}" alt="Slide" pagespeed_url_hash="3541382440">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone 
                        <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="<?=route('productshop')?>"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{asset('images/h4-slide2.png')}}" alt="Slide" pagespeed_url_hash="1094292692" >
                <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{asset('images/h4-slide3.png')}}" alt="Slide" pagespeed_url_hash="1388792613" >
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{asset('images/h4-slide4.png')}}" alt="Slide" pagespeed_url_hash="1683292534" >
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="ps-section--features-product ps-section masonry-root pt-40 pb-80">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="features">-New Product</h3>
            <ul class="ps-masonry__filter">

                <li class="current">
                    <a href="#" data-filter="*" >
                        All 
                        <sup><?= $products->count() ?></sup>
                    </a>
                </li>
                <?php foreach ($allcategories as $category): ?>
                    <li id="item">
                        <a href="" data-filter=".<?= $category->name ?>" data-id = <?= $category->id ?> id="category_prouducts">
                            <?= $category->name ?> 
                            <sup><?= $category->products->count() ?></sup>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
        <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                <div class="ps-masonry" id="list_product">
                    <?php foreach ($products as $product): ?>
                        <div class="grid-sizer"></div>
                        <div id="product_item" class="grid-item <?= $product->category->name ?>">
                            <span id="product_id" style="display: none;"><?= $product->id ?></span>
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail" style="background-color: #DEE2D8">
                                        <?php if ($product->is_New == 1): ?>
                                            <div class="ps-badge">
                                                <span>New</span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($product->is_Discount == 1): ?>
                                            <div class="ps-badge ps-badge--sale <?php if ($product->is_New == 1): ?> ps-badge--2nd<?php endif; ?>">
                                                <span>-<?= $product->Discount ?>%</span>
                                            </div>
                                        <?php endif; ?>
                                        <a id="addToWishList"class="ps-shoe__favorite" href="javascript::void(0)">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                        <a id="addTocart"class="ps-shoe__cart" href="javascript::void(0)">
                                            <i class="ps-icon-shopping-cart"></i>
                                        </a>
                                        <img id="imageproudect" style="padding: 20px;"src="<?= asset('storage/' . $product->image) ?>" alt="">
                                        <a class="ps-shoe__overlay" href="<?= route('product_details', $product->id) ?>">

                                        </a>

                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <?php foreach ($product->images as $image): ?>
                                                    <img src="<?= asset('storage/' . $image->path) ?>" alt="">
                                                <?php endforeach; ?>
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail">
                                            <a class="ps-shoe__name" href="<?= route('product_details', $product->id) ?>"><?= $product->name ?></a>
                                            <p class="ps-shoe__categories">
                                                <a href="#"><?= $product->category->name ?></a>
                                                ,<a href="#"><?= $product->SubCategory["name"] ?></a>
                                                ,<a href="#"><?= $product->SubSubCategory["name"] ?></a>
                                            </p>
                                            <span class="ps-shoe__price">

                                                <?php if ($product->is_Discount == 1): ?>

                                                    <del>
                                                        <?= $discount = round(($product->price * 100) / (100 - $product->Discount)); ?>$
                                                    </del>  
                                                <?php endif; ?>
                                                <?= $product->price ?> $
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="ps-section ps-owl-root ps-hotdeal--2 pt-80 pb-80">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="SALE OFF">- HOT DEAL TODAY</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                </div>
            </div>
        </div>
        <div class="ps-section__content">
            <div class="row">
                <div class="ps-owl--collection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="50000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product--hotdeal">
                        <div class="ps-product__thumbnail">
                            <a class="ps-product__overlay" href="product-detail.html"></a>
                            <img src="{{asset('userInterface/images/offer/clothes-1.jpg')}}" alt=""></div>
                        <div class="ps-product__content">
                            <a class="ps-product__title" href="product-detail.html">
                                Slim Fit Men Sport Hoodie
                            </a>
                            <p class="ps-product__price">Only: 
                                <span>£155</span>
                            </p>
                            <div class="ps-product__status">
                                <div class="sold">Already sold: 
                                    <span>10</span>
                                </div>
                                <div class="avaiable">avaiable: 
                                    <span>30</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                            <ul class="ps-countdown" data-time="December 1, 2017 00:00:00">
                                <li><span class="hours"></span><p>Hours</p></li>
                                <li class="divider">:</li>
                                <li><span class="minutes"></span><p>minutes</p></li>
                                <li class="divider">:</li>
                                <li><span class="seconds"></span><p>Seconds</p></li>
                            </ul>
                            <a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
                        </div>
                    </div>
                    <div class="ps-product--hotdeal">
                        <div class="ps-product__thumbnail">
                            <a class="ps-product__overlay" href="product-detail.html"></a>
                            <img src="{{asset('userInterface/images/offer/clothes-2.jpg')}}" alt=""></div>
                        <div class="ps-product__content">
                            <a class="ps-product__title" href="product-detail.html">Mens Long-sleeved Polos</a>
                            <p class="ps-product__price">Only: 
                                <span>£79</span>
                            </p>
                            <div class="ps-product__status">
                                <div class="sold">Already sold: 
                                    <span>10</span
                                    ></div>
                                <div class="avaiable">avaiable: 
                                    <span>30</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                            <ul class="ps-countdown" data-time="May 1, 2018 00:00:00">
                                <li><span class="hours"></span><p>Hours</p></li>
                                <li class="divider">:</li>
                                <li><span class="minutes"></span><p>minutes</p></li>
                                <li class="divider">:</li>
                                <li><span class="seconds"></span><p>Seconds</p></li>
                            </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
                        </div>
                    </div>
                    <div class="ps-product--hotdeal">
                        <div class="ps-product__thumbnail">
                            <a class="ps-product__overlay" href="product-detail.html"></a>
                            <img src="{{asset('userInterface/images/offer/clothes-1.jpg')}}" alt=""></div>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Slim Fit Men Sport Hoodie</a>
                        <p class="ps-product__price">Only: <span>£155</span></p>
                        <div class="ps-product__status">
                            <div class="sold">Already sold: <span>10</span></div>
                            <div class="avaiable">avaiable: <span>30</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                        <ul class="ps-countdown" data-time="December 1, 2017 00:00:00">
                            <li><span class="hours"></span><p>Hours</p></li>
                            <li class="divider">:</li>
                            <li><span class="minutes"></span><p>minutes</p></li>
                            <li class="divider">:</li>
                            <li><span class="seconds"></span><p>Seconds</p></li>
                        </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
                    </div>
                </div>
                <div class="ps-product--hotdeal">
                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="{{asset('userInterface/images/offer/clothes-2.jpg')}}" alt=""></div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Mens Long-sleeved Polos</a>
                        <p class="ps-product__price">Only: <span>£79</span></p>
                        <div class="ps-product__status">
                            <div class="sold">Already sold: <span>10</span></div>
                            <div class="avaiable">avaiable: <span>30</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                        <ul class="ps-countdown" data-time="May 1, 2018 00:00:00">
                            <li><span class="hours"></span><p>Hours</p></li>
                            <li class="divider">:</li>
                            <li><span class="minutes"></span><p>minutes</p></li>
                            <li class="divider">:</li>
                            <li><span class="seconds"></span><p>Seconds</p></li>
                        </ul><a class="ps-btn" href="cart.html">Order Today<i class="ps-icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="ps-features pt-80 pb-80">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <div class="ps-iconbox">
                    <div class="ps-iconbox__header"><i class="ps-icon-delivery"></i>
                        <h3>Free shipping</h3>
                        <p>ON ORDER OVER $199</p>
                    </div>
                    <div class="ps-iconbox__content">
                        <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <div class="ps-iconbox">
                    <div class="ps-iconbox__header"><i class="ps-icon-money"></i>
                        <h3>100% MONEY BACK.</h3>
                        <p>WITHIN 30 DAYS AFTER DELIVERY.</p>
                    </div>
                    <div class="ps-iconbox__content">
                        <p>You may return most new, unopened items sold within 30 days of delivery for a full refund.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <div class="ps-iconbox">
                    <div class="ps-iconbox__header"><i class="ps-icon-customer-service"></i>
                        <h3>SUPPORT 24/7.</h3>
                        <p>WE CAN HELP YOU ONLINE.</p>
                    </div>
                    <div class="ps-iconbox__content">
                        <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-section ps-home-blog pt-80 pb-80">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <h2 class="ps-section__title" data-mask="News">- Our Story</h2>
            <div class="ps-section__action"><a class="ps-morelink text-uppercase" href="#">View all post<i class="fa fa-long-arrow-right"></i></a></div>
        </div>
        <div class="ps-section__content">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-post">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('userInterface/images/blog/1.jpg')}}" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">An Inside Look at the Breaking2 Kit</a>
                            <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>
                            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-morelink" href="blog-detail.html">Read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-post">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('userInterface/images/blog/2.jpg')}}" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">Unpacking the Breaking2 Race Strategy</a>
                            <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>
                            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-morelink" href="blog-detail.html">Read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-post">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('userInterface/images/blog/3.jpg')}}" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">Nike’s Latest Football Cleat Breaks the Mold</a>
                            <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>
                            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-morelink" href="blog-detail.html">Read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-subscribe">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('site-page-script')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/jquery.easing.1.3.min.js')}}"></script>


<script type="text/javascript" src="{{asset('userInterface/js/slidermain.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/script.slider.js')}}"></script>



<script>window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-10146041-25');</script>
@endsection

