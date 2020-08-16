@extends('site/layouts/contentLayoutMaster')
@section('title', 'Product Wish List')
{{-- Vendor Css files --}}
@section('vendor-style')

@endsection
@section('page-style')
{{-- Page Css files --}}
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" href="{{asset('userInterface/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">

<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{asset('userInterface/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/app-ecommerce-shop.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css-rtl/custom-rtl.css')}}">


<?php endif; ?>


@endsection
@section('content')
<?php if(!$wishListData['WitchListItems']->isEmpty()):?>
<!-- Wishlist Starts -->

<section id="wishlist" class="grid-view wishlist-items">
    <?php foreach ($wishListData['WitchListItems'] as $Item): ?>
        <div id="witch_item"class="card ecommerce-card">
            <div class="card-content">
                <span id="Item_w_id"style="display: none;"><?= $Item->model_id ?></span>
                <a href="<?= route('product_details', $Item->model_id) ?>">
                    <div class="item-img text-center">
                        <img src="<?= asset('storage/' . $Item->image) ?>" class="img-fluid" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                        <div class="item-wrapper">
                            <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="item-price">
                                    <?= $Item->price ?>
                                </h6>
                            </div>
                        </div>
                        <div class="item-name">
                            <span><?= App\Product::where('id', $Item->model_id)->first()->name ?></span>
                        </div>
                        <div>
                            <p class="item-description">
                                <?= App\Product::where('id', $Item->model_id)->first()->Details ?>
                            </p>
                        </div>
                    </div>
                </a>
                <div class="item-options text-center">
                    <div id="RemoveFromWitchList" class="wishlist remove">
                        <i class="feather icon-x align-middle"></i> Remove
                    </div>
                    <div id="moveToCart" class="cart move-cart">
                        <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to cart</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<!-- Wishlist Ends -->
<?php else:?>
<section class="row flexbox-container">
  <div class="col-12 d-flex justify-content-center">
    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
      <div class="card-content">
        <div class="card-body text-center">
          <img src="{{ asset('images/pages/maintenance-2.png') }}" class="img-fluid align-self-center" alt="branding logo">
          <h1 class="font-large-2 my-1">WishList is Empty!</h1>
          <p class="px-2">
            paraphonic unassessable foramination Caulopteris worral Spirophyton encrimson esparcet aggerate chondrule
            restate whistler shallopy biosystematy area bertram plotting unstarting quarterstaff.
          </p>
          <a class="btn btn-primary btn-lg mt-1" href="<?=route('index')?>">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;?>
@endsection


@section('vendor-script')
<!-- Vendor js files -->
<script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection

@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/pages/app-ecommerce-shop.js')) }}"></script>
@endsection