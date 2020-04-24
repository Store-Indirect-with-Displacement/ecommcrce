<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php if ($pageConfigs['isMain'] == '1'): ?>
    <div class = "card  white" id = "aSearch" style = "top: 120px">
        <div class = "card-content">
            <div class = "card-body p-sm-4 p-2">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-12">
                        <fieldset class="form-group position-relative has-icon-left mx-1 my-0 w-100">
                            <input type="text" class="form-control round" id="chat-search" placeholder="Search">
                            <div class="form-control-position">
                                <i class="feather icon-search"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="slider-area">
                    <!-- Slider -->
                    <div class="block-slider block-slider4">
                        <ul class="" id="bxslider-home4">
                            <li>
                                <img src="<?= asset('images/h4-slide.png') ?>" alt="Slide" pagespeed_url_hash="3541382440">
                                <div class="caption-group">
                                    <h2 class="caption title">
                                        iPhone 
                                        <span class="primary">6 <strong>Plus</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle">Dual SIM</h4>
                                    <a class="caption button-radius" href="<?= route('productshop') ?>"><span class="icon"></span>Shop now</a>
                                </div>
                            </li>
                            <li><img src="<?= asset('images/h4-slide2.png') ?>" alt="Slide" pagespeed_url_hash="1094292692" >
                                <div class="caption-group">
                                    <h2 class="caption title">
                                        by one, get one <span class="primary">50% <strong>off</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                                    <a class="caption button-radius" href="<?= route('productshop') ?>"><span class="icon"></span>Shop now</a>
                                </div>
                            </li>
                            <li><img src="<?= asset('images/h4-slide3.png') ?>" alt="Slide" pagespeed_url_hash="1388792613" >
                                <div class="caption-group">
                                    <h2 class="caption title">
                                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle">Select Item</h4>
                                    <a class="caption button-radius" href="<?= route('productshop') ?>"><span class="icon"></span>Shop now</a>
                                </div>
                            </li>
                            <li><img src="<?= asset('images/h4-slide4.png') ?>" alt="Slide" pagespeed_url_hash="1683292534" >
                                <div class="caption-group">
                                    <h2 class="caption title">
                                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                                    </h2>
                                    <h4 class="caption subtitle">& Phone</h4>
                                    <a class="caption button-radius" href="<?= route('productshop') ?>"><span class="icon"></span>Shop now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- ./Slider -->
                </div> <!-- End slider area -->



            </div>
        </div>
    </div>
<?php else : ?>
    <div class = "card knowledge-base-bg white" id = "aSearch" style = "top: 120px">
        <div class = "card-content">
            <div class = "card-body p-sm-4 p-2">
                <h1 class = "white">Dedicated Source Used on Website</h1>
                <p class = "card-text mb-2">
                    Bonbon sesame snaps lemon drops marshmallow ice cream carrot cake croissant wafer.
                </p>
                <form>
                    <fieldset class = "form-group position-relative has-icon-left mb-0">
                        <input type = "text" class = "form-control form-control-lg" id = "searchbar"
                               placeholder = "Search Topic or Keyword">
                        <div class = "form-control-position">
                            <i class = "feather icon-search px-1"></i>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>