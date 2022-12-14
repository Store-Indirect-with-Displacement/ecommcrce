@extends('site/layouts/contentLayoutMaster')
@section('title', 'Product Cart')
{{-- Vendor Css files --}}
@section('vendor-style')
<!-- Vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
@endsection
@section('page-style')
{{-- Page Css files --}}
<style>

    .country{
        padding: 10px;
        display: inline;
        width: max-content;
        height: min-content;
    }
    .country .flag {
        left: 5px;
        top: 5px;
        width: 45dpx;
        height: 45px;
        font-size: 20px;
        color: black;
    }
    .country .name{

    }
</style>

<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/wizard.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/app-ecommerce-shop.css')}}">
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/forms/wizard.css')}}">
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/extensions/toastr.css') }}">
<?php endif; ?>

@endsection

@section('content')
<?php if (!$CartItems->isEmpty()): ?>
    <form action="#" class="icons-tab-steps checkout-tab-steps wizard-circle">
        <!-- Checkout Place order starts -->

        <h6>
            <i class="step-icon step feather icon-shopping-cart"></i>
            Cart
        </h6>

        <fieldset class="checkout-step-1 px-0">
            <section id="place-order" class="list-view product-checkout">
                <div class="checkout-items">
                    <?php foreach ($CartItems as $Item): ?>
                        <div id="cart_item"  class="card ecommerce-card">
                            <span id="item_id"style="display: none"><?= $Item->model_id ?></span>
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="<?= route('product_details', $Item->model_id) ?>">
                                        <img src="<?= asset('storage/' . $Item->image) ?>" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="<?= route('product_details', $Item->model_id) ?>"><?= App\Product::where('id', $Item->model_id)->first()->name ?></a>
                                        <span></span>
                                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="<?= $Item->quantity ?>">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 25</p>
                                    <p class="offers">17% off 4 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 id="cost_item"class="item-price">
                                                <?= $Item->quantity * $Item->price ?>
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div id="RemoveFromCat"class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div id="MoveToWishList" class="cart move-cart">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="checkout-options">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <p class="options-title">Options</p>
                                <div class="coupons">
                                    <div class="coupons-title">
                                        <p>Coupons</p>
                                    </div>
                                    <div class="apply-coupon">
                                        <p>Apply</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="price-details">
                                    <p>Price Details</p>
                                </div>
                                <div class="detail">
                                    <div class="detail-title">
                                        Sub Total 
                                    </div>
                                    <div id="subtotal"class="detail-amt">
                                        <?= $CartData['subtotal'] ?>
                                    </div>
                                </div>
                                <div class="detail">
                                    <div class="detail-title">
                                        Bag Discount
                                    </div>
                                    <div id="discount"class="detail-amt discount-amt">
                                        <?= $CartData['discount'] ?>$
                                    </div>
                                </div>
                                <div class="detail">
                                    <div class="detail-title">
                                        Delivery Charges
                                    </div>
                                    <div id="shipping_charges"class="detail-amt discount-amt">
                                        <?= $CartData['shipping_charges'] ?>$
                                    </div>
                                </div>
                                <div class="detail">
                                    <div class="detail-title">
                                        Net Total
                                    </div>
                                    <div id="net_total" class="detail-amt emi-details">
                                        <?= $CartData['net_total'] ?>$
                                    </div>
                                </div>
                                <div class="detail">
                                    <div class="detail-title">
                                        Estimated Tax
                                    </div>
                                    <div id="tax" class="detail-amt">
                                        <?= $CartData['tax'] ?>$
                                    </div>
                                </div>


                                <div class="detail">
                                    <div class="detail-title">
                                        Total
                                    </div>
                                    <div id="total"class="detail-amt discount-amt">
                                        <?= $CartData['total'] ?>$
                                    </div>
                                </div>
                                <hr>
                                <div class="detail">
                                    <div class="detail-title detail-total">Payable</div>
                                    <div id="payable"class="detail-amt total-amt"><?= $CartData['payable'] ?>$</div>
                                </div>
                                <div class="btn btn-primary btn-block place-order">PLACE ORDER</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </fieldset>
        <!-- Checkout Place order Ends -->

        <!-- Checkout Customer Address Starts -->
        <h6><i class="step-icon step feather icon-home"></i>Address</h6>
        <fieldset class="checkout-step-2 px-0">
            <section id="checkout-address" class="list-view product-checkout">
                <div class="card">
                    <div class="card-header flex-column align-items-start">
                        <h4 class="card-title">Add New Address</h4>
                        <p class="text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-name">Full Name:</label>
                                        <input type="text" id="checkout-name" class="form-control required" name="fname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-number">Mobile Number:</label>
                                        <input type="number" id="checkout-number" class="form-control required" name="mnumber">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-apt-number">Flat, House No:</label>
                                        <input type="number" id="checkout-apt-number" class="form-control required" name="apt-number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-landmark">Landmark e.g. near apollo hospital:</label>
                                        <input type="text" id="checkout-landmark" class="form-control required" name="landmark">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-city">Town/City:</label>
                                        <input type="text" id="checkout-city" class="form-control required" name="city">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-pincode">Pincode:</label>
                                        <input type="number" id="checkout-pincode" class="form-control required" name="pincode">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="checkout-state">State:</label>
                                        <select required name="state" class="form-control" id="checkout-state">
                                            <option value="" selected>Select State....</option>
                                            <?php foreach (App\conutry::all() as $country): ?>

                                                <option class="country"  value="<?= $country->id ?>">
                                                    <?= $country->country_flage ?>
                                                    <?= $country->country_name ?>
                                                    +<?= $country->country_code ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="add-type">Address Type:</label>
                                        <select class="form-control" id="add-type">
                                            <option>Home</option>
                                            <option>Work</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 offset-md-6">
                                    <div id="save_adderss"class="btn btn-primary delivery-address float-right">
                                        SAVE AND DELIVER HERE
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-card">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">John Doe</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body actions">
                                <p class="mb-0">9447 Glen Eagles Drive</p>
                                <p>Lewis Center, OH 43035</p>
                                <p>UTC-5: Eastern Standard Time (EST) </p>
                                <p>202-555-0140</p>
                                <hr>
                                <div class="btn btn-primary btn-block delivery-address" formnovalidate="formnovalidate">DELIVER TO THIS ADDRESS</div>
                            </div>
                        </div>
                    </div>
                </div>
     

            </section>
            <section id="gmaps-basic-maps" >
                    <!-- Info Window -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Info Window</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <input style="margin-bottom: 10px; margin-top: 10px; " type="text" id="searchInput" class="form-control width-95-per map-input"  name="search" placeholder="Enter a Location">
                           
                                        <div id="info-window" class="height-400 width-95-per" ></div>
                                        <div class="row width-95-per" style="margin-top: 10px; margin-bottom: 10px;">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="checkout-city">Location</label>
                                                <input type="hidden" value=""  id="checkout-Location" class="form-control required" name="city">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="checkout-pincode">Latitude </label>
                                                <input type="hidden" value="0" id="checkout-Latitude" class="form-control required" name="pincode" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="checkout-pincode">Longitude</label>
                                                <input  type="hidden" id="checkout-pincode" class="form-control required" name="pincode" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </fieldset>

        <!-- Checkout Customer Address Ends -->

        <!-- Checkout Payment Starts -->
        <h6><i class="step-icon step feather icon-credit-card"></i>Payment</h6>
        <fieldset class="checkout-step-3 px-0">
            <section id="checkout-payment" class="list-view product-checkout">
                <div class="payment-type">
                    <div class="card">
                        <div class="card-header flex-column align-items-start">
                            <h4 class="card-title">Payment options</h4>
                            <p class="text-muted mt-25">Be sure to click on correct payment option</p>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="vs-radio-con vs-radio-primary">
                                        <input type="radio" name="vueradio" checked="" value="false">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>

                                        <span>US Unlocked Debit Card 12XX XXXX XXXX 0000  </span>

                                    </div>
                                    <div class="card-holder-name mt-75">
                                        John Doe
                                    </div>
                                    <div class="card-expiration-date mt-75">
                                        11/2020
                                    </div>
                                </div>
                                <div class="customer-cvv mt-1">
                                    <div class="form-inline">
                                        <label class="mb-50" for="card-holder-cvv">Enter CVV:</label>
                                        <input type="number" class="form-control ml-75 mb-50 input-cvv" id="card-holder-cvv">
                                        <div class="btn btn-primary btn-cvv ml-50 mb-50">Continue</div>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <ul class="other-payment-options list-unstyled">
                                    <li>
                                        <div class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="vueradio" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span>
                                                Credit / Debit / ATM Card
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="vueradio" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span>
                                                Net Banking
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="vueradio" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span>
                                                EMI (Easy Installment)
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="vueradio" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span>
                                                Cash On Delivery
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                <div class="gift-card">
                                    <p><i class="feather icon-plus-square mr-25 font-medium-5"></i>
                                        Add Gift Card
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="amount-payable checkout-options">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Price Details</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="detail">
                                    <div class="details-title">
                                        Price of <?= $CartItems->count() ?> items
                                    </div>
                                    <div class="detail-amt">
                                        <strong><?= $CartData['payable'] ?>$</strong>
                                    </div>
                                </div>
                                <div class="detail">
                                    <div class="details-title">
                                        Delivery Charges
                                    </div>
                                    <div class="detail-amt discount-amt">
                                        Free
                                    </div>
                                </div>
                                <hr>
                                <div class="detail">
                                    <div class="details-title">
                                        Amount Payable
                                    </div>
                                    <div class="detail-amt total-amt"><?= $CartData['payable'] ?>$</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </fieldset>

        <!-- Checkout Payment Starts -->
    </form>
<?php else: ?>
    <section class="row flexbox-container center">
        <div class=" col-12 d-flex justify-content-center">
            <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/pages/maintenance-2.png') }}" class="img-fluid align-self-center" alt="branding logo">
                        <h1 class="font-large-2 my-1">Cart is Empty!</h1>
                        <p class="px-2">
                            paraphonic unassessable foramination Caulopteris worral Spirophyton encrimson esparcet aggerate chondrule
                            restate whistler shallopy biosystematy area bertram plotting unstarting quarterstaff.
                        </p>
                        <a class="btn btn-primary btn-lg mt-1" href="<?= route('index') ?>">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
@endsection




@section('vendor-script')
<!-- Vendor js files -->
<script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
<script src="{{asset(mix('vendors/js/ui/jquery.sticky.js'))}}"></script>

     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuDK8PB2oYuPJ8q_22dkFmDimTYejWppk&libraries=places"
  type="text/javascript"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/charts/gmaps/maps.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/pages/app-ecommerce-shop.js')) }}"></script>
@endsection