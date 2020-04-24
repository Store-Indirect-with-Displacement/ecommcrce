<?php declare(strict_types=1) ?>
@extends('site/layouts/contentLayoutMaster')
@section('title', 'Welcome')
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/swiper.min.css')) }}">
@endsection
@section('page-style')
{{-- Page Css files --}}

<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">

<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userInterface/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/welcome.css') }}">

<?php endif; ?>
@endsection
@section('content')



<!-- Background variants section start -->
<section id="bg-variants">
    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">New Product</h4>
        </div>
    </div>
    <div class="row">

        <?php foreach ($products as $key => $product): ?>

            <?php if ($product->is_New == 1): ?>
                <div class = "col-lg-4 col-md-6 col-sm-12">
                    <div class = "card text-white bg-gradient-dark text-center">
                        <div class = "card-content d-flex">
                            <div class = "card-body">
                                <?php if ($product->is_New == 1): ?>
                                    <div  class=" badgeX1 badge badge-square badge-md badge-success mr-1 mb-1">
                                        <span>New</span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($product->is_Discount == 1): ?>
                                    <div  class=" badgeX2 badge badge-square badge-md badge-danger mr-1 mb-1">
                                        <span>-<?= $product->Discount ?>%</span>
                                    </div>
                                <?php endif; ?>
                                <a href="<?= route('product_details', $product->id) ?>">
                                    <img src = "<?= asset('storage/' . $product->image) ?>" alt = "element 03" width = "150" height = "150"
                                         class = "float-right px-1">
                                </a>
                                <button type="button" class="badgeY btn btn-icon btn-icon rounded-circle btn-flat-danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-heart"></i></button>
                                <button type="button" class="badgeY2 btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-shopping-cart"></i></button>


                                <?php
                                $pieces = explode(" ", $product->name);
                                $length = count($pieces);
                                ?>
                                <a href="<?= route('product_details', $product->id) ?>">
                                    <?php if ($length > 2): ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] . ' ' . $pieces[1] . ' ' . $pieces[2] ?></h4>
                                        <p class = "card-text">
                                            <?php for ($i = 3; $i < $length; $i++): ?>
                                                <?= $pieces[$i] ?>
                                            <?php endfor; ?>
                                        </p>
                                    <?php elseif ($length <= 1): ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] . ' ' . $pieces[1] ?></h4>
                                        <p class = "card-text">Donut toffee candy brownie.</p>
                                    <?php else: ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] ?></h4>
                                        <p class = "card-text">Donut toffee candy brownie.</p>
                                    <?php endif; ?>
                                </a>
                                <div  class=" badgeX3 badge-square  badge-md badge-danger mr-1 mb-1">
                                    <span><?= $product->price ?>$</span>
                                </div>
                                <div  class=" badgeX4 badge-square  badge-md badge-danger mr-1 mb-1">
                                    <span>4</span>
                                    <i class="feather icon-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif ($product->is_Discount): ?>
                <div class = "col-lg-4 col-md-6 col-sm-12">
                    <div class = "card text-white bg-gradient-danger text-center">
                        <div class = "card-content d-flex">
                            <div class = "card-body">
                                <?php if ($product->is_New == 1): ?>
                                    <div  class=" badgeX1 badge badge-square badge-md badge-success mr-1 mb-1">
                                        <span>New</span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($product->is_Discount == 1): ?>
                                    <div  class=" badgeX2 badge badge-square badge-md badge-primary mr-1 mb-1">
                                        <span>-<?= $product->Discount ?>%</span>
                                    </div>
                                <?php endif; ?>
                                <a href="<?= route('product_details', $product->id) ?>">
                                    <img src = "<?= asset('storage/' . $product->image) ?>" alt = "element 03" width = "150" height = "150"
                                         class = "float-right px-1">
                                </a>
                                <button type="button" class="badgeY btn btn-icon btn-icon rounded-circle btn-flat-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-heart"></i></button>
                                <button type="button" class="badgeY2 btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-shopping-cart"></i></button>


                                <?php
                                $pieces = explode(" ", $product->name);
                                $length = count($pieces);
                                ?>
                                <a href="<?= route('product_details', $product->id) ?>">
                                    <?php if ($length > 2): ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] . ' ' . $pieces[1] . ' ' . $pieces[2] ?></h4>
                                        <p class = "card-text">
                                            <?php for ($i = 3; $i < $length; $i++): ?>
                                                <?= $pieces[$i] ?>
                                            <?php endfor; ?>
                                        </p>
                                    <?php elseif ($length <= 1): ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] . ' ' . $pieces[1] ?></h4>
                                        <p class = "card-text">Donut toffee candy brownie.</p>
                                    <?php else: ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] ?></h4>
                                        <p class = "card-text">Donut toffee candy brownie.</p>
                                    <?php endif; ?>
                                </a>
                                <div  class=" badgeX3 badge-square  badge-md badge-danger mr-1 mb-1">
                                    <span><?= $product->price ?>$</span>
                                </div>
                                <div  class=" badgeX4 badge-square  badge-md badge-danger mr-1 mb-1">
                                    <span>4</span>
                                    <i class="feather icon-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>

                <div class = "col-lg-4 col-md-6 col-sm-12">

                    <div class = "card text-white bg-gradient-primary text-center">
                        <div class = "card-content d-flex">
                            <div class = "card-body">
                                <?php if ($product->is_New == 1): ?>
                                    <div  class=" badgeX1 badge badge-square badge-md badge-success mr-1 mb-1">
                                        <span>New</span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($product->is_Discount == 1): ?>
                                    <div  class=" badgeX2 badge badge-square badge-md badge-danger mr-1 mb-1">
                                        <span>-<?= $product->Discount ?>%</span>
                                    </div>
                                <?php endif; ?>
                                <a href="<?= route('product_details', $product->id) ?>">
                                    <img src = "<?= asset('storage/' . $product->image) ?>" alt = "element 03" width = "150" height = "150"
                                         class = "float-right px-1">
                                </a>
                                <button type="button" class="badgeY btn btn-icon btn-icon rounded-circle btn-flat-danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-heart"></i></button>
                                <button type="button" class="badgeY2 btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-shopping-cart"></i></button>


                                <?php
                                $pieces = explode(" ", $product->name);
                                $length = count($pieces);
                                ?>
                                <a href="<?= route('product_details', $product->id) ?>">
                                    <?php if ($length > 2): ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] . ' ' . $pieces[1] . ' ' . $pieces[2] ?></h4>
                                        <p class = "card-text">
                                            <?php for ($i = 3; $i < $length; $i++): ?>
                                                <?= $pieces[$i] ?>
                                            <?php endfor; ?>
                                        </p>
                                    <?php elseif ($length <= 1): ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] . ' ' . $pieces[1] ?></h4>
                                        <p class = "card-text">Donut toffee candy brownie.</p>
                                    <?php else: ?>
                                        <h4 class = "card-title text-white mt-3"><?= $pieces[0] ?></h4>
                                        <p class = "card-text">Donut toffee candy brownie.</p>
                                    <?php endif; ?>
                                </a>
                                <div  class=" badgeX3 badge-square  badge-md badge-danger mr-1 mb-1">
                                    <span> <?= $product->price ?>$</span>
                                </div>
                                <div  class=" badgeX4 badge-square  badge-md badge-danger mr-1 mb-1">
                                    <span>4</span>
                                    <i class="feather icon-star"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>
<!-- Background variants section end -->

<section>
    <div class="card">
        <div class="card-body">
            <div class="mt-4 mb-2 text-center">
                <h2>RELATED PRODUCTS</h2>
                <p>People also search for this items</p>
                <a class="ps-morelink text-uppercase" href="<?= route('productshop') ?>">
                    Shop Now

                </a>
            </div>
            <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                <div class="swiper-wrapper">

                    <div class="swiper-slide ">
                        <div class="card text-white bg-gradient-dark text-center">
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="{{ asset('images/elements/beats-headphones.png') }}" alt="element 02" width="150"
                                         height="200" class="mb-1">
                                    <h3 class="card-title text-white">Ceramic Bottle</h3>
                                    <p class="card-text">456 items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide ">
                            <div class="card text-white bg-gradient-danger text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="{{ asset('images/elements/beats-headphones.png') }}" alt="element 02" width="150"
                                             height="200" class="mb-1">
                                        <h3 class="card-title text-white">Ceramic Bottle</h3>
                                        <p class="card-text">456 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="card text-white bg-gradient-primary text-center">
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="{{ asset('images/elements/beats-headphones.png') }}" alt="element 02" width="150"
                                         height="200" class="mb-1">
                                    <h3 class="card-title text-white">Ceramic Bottle</h3>
                                    <p class="card-text">456 items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="card text-white bg-gradient-success text-center">
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="{{ asset('images/elements/beats-headphones.png') }}" alt="element 02" width="150"
                                         height="200" class="mb-1">
                                    <h3 class="card-title text-white">Ceramic Bottle</h3>
                                    <p class="card-text">456 items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-white bg-gradient-secondary text-center">
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="{{ asset('images/elements/beats-headphones.png') }}" alt="element 02" width="150"
                                         height="200" class="mb-1">
                                    <h3 class="card-title text-white">Ceramic Bottle</h3>
                                    <p class="card-text">456 items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
        </div>

    </div>
    <div class="card text-white bg-gradient-dark">

        <div class="item-features py-5">
            <div class="row text-center pt-2">
                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                    <div class="w-75 mx-auto">
                        <i class="feather icon-truck text-primary font-large-5"></i>
                        <h5 class="mt-2 font-weight-bold white">FREE SHIPPING</h5>
                        <h6 class=" font-size-xsmall font-weight-bold white" >ON ORDER OVER $199.</h6>
                        <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="w-75 mx-auto">
                        <i class="feather icon-dollar-sign text-primary font-large-5"></i>
                        <h5 class="mt-2 font-weight-bold white">100% MONEY BACK.</h5>
                        <h6 class=" font-size-xsmall font-weight-bold white" >WITHIN 30 DAYS AFTER DELIVERY.</h6>
                        <p>You may return most new, unopened items sold within 30 days of delivery for a full refund..
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="w-75 mx-auto">
                        <i class="feather icon-phone-call text-primary font-large-5"></i>
                        <h5 class="mt-2 font-weight-bold white">1 Year Warranty</h5>
                        <h6 class=" font-size-xsmall font-weight-bold white" >WE CAN HELP YOU ONLINE.</h6>
                        <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>


<section>
    <div class="card ">


        <div class="card-body">
            <div class="mt-4 mb-2 text-center">
                <h2>OUR STORY</h2>
                <div>
                    <a class="ps-morelink text-uppercase" href="<?= route('siteblogList') ?>">
                        View all post

                    </a>
                </div>
            </div>

            <div class="row match-height">
                <?php foreach ($blogs as $blog): ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="card border-danger  bg-transparent">
                            <div class="card-content">
                                <img class="img-fluid imageblog" src="<?= asset('storage/'.$blog->image)?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="mt-1 text-center"><?=$blog->title?></h5>
                                    <p class="card-text">Posted By <?=$blog->user->name?></p>
                                    <p class="card-text"><?=$blog->body?></p>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <span class="float-left"><?= $blog->date ?></span>
                                <span class="float-right">
                                    <a href="<?=route('siteblogshow', $blog->id)?>" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>




    </div>

</section>









@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/extensions/swiper.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}

<script type="text/javascript" src="{{asset('userInterface/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/jquery.easing.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/slidermain.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userInterface/js/script.slider.js')}}"></script>
<script src="{{ asset(mix('js/scripts/pages/welcome.js')) }}"></script>


<script>window.dataLayer = window.dataLayer || [];
    function gtag() {
    dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-10146041-25');</script>
@endsection
