@extends('site.layouts.header')
@section('title', 'Home Page')
@section('content')
    <div class="ps-section masonry-root pt-20 pb-40">
        <div class="ps-container">
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        <div class="grid-item">
                            <div class="grid-item__content-wrapper"><a class="ps-offer" href=""><img src="{{asset('userInterface/images/offer/home-2-1.jpg')}}" alt=""></a></div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="{{asset('userInterface/images/offer/home-2-2.jpg')}}" alt=""></a></div>
                        </div>
                        <div class="grid-item high">
                            <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="{{asset('userInterface/images/offer/home-2-5.jpg')}}" alt=""></a></div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="{{asset('userInterface/images/offer/home-2-3.jpg')}}" alt=""></a></div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item__content-wrapper"><a class="ps-offer" href="product-detail.html"><img src="{{asset('userInterface/images/offer/home-2-4.jpg')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--features-product ps-section masonry-root pt-40 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="features">-New Product</h3>
                <ul class="ps-masonry__filter">
                    <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
                    <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
                </ul>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <div class="ps-badge"><span>New</span></div>
                                        <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                        <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">\n\
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                                                <del>£220</del> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item nike">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                        <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                        <a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal"><img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories">
                                                <a href="#">Men shoes</a>,
                                                <a href="#"> Nike</a>,
                                                <a href="#"> Jordan</a>
                                            </p>
                                            <span class="ps-shoe__price"> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item adidas">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                        <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal"><img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <div class="ps-badge ps-badge--sale"><span>-35%</span></div>
                                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                        <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt=""></div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories">
                                                <a href="#">Men shoes</a>,
                                                <a href="#"> Nike</a>,
                                                <a href="#"> Jordan</a>
                                            </p>
                                            <span class="ps-shoe__price">
                                                <del>£220</del> £ 120
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item men">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                        <img src="{{asset('userInterface/images/clothes/5.jpg')}}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item women">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <a class="ps-shoe__favorite" href="#">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                        <img src="{{asset('userInterface/images/clothes/6.jpg')}}" alt="">
                                        <a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                        <img src="{{asset('userInterface/images/clothes/7.jpg')}}" alt="">
                                        <a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories">
                                                <a href="#">Men shoes</a>,
                                                <a href="#"> Nike</a>,
                                                <a href="#"> Jordan</a>
                                            </p>
                                            <span class="ps-shoe__price"> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <a class="ps-shoe__favorite" href="#">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                        <img src="{{asset('userInterface/images/clothes/8.jpg')}}" alt="">
                                        <a class="ps-shoe__overlay" href="product-detail.html"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <img src="{{asset('userInterface/images/clothes/1.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/2.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/3.jpg')}}" alt="">
                                                <img src="{{asset('userInterface/images/clothes/4.jpg')}}" alt="">
                                            </div>
                                            <select class="ps-rating ps-shoe__rating">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                                            <p class="ps-shoe__categories">
                                                <a href="#">Men shoes</a>,
                                                <a href="#"> Nike</a>,
                                                <a href="#"> Jordan</a>
                                            </p>
                                            <span class="ps-shoe__price"> £ 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('images/blog/1.jpg')}}" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">An Inside Look at the Breaking2 Kit</a>
                            <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>
                            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-morelink" href="blog-detail.html">Read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-post">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('images/blog/2.jpg')}}" alt=""></div>
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
