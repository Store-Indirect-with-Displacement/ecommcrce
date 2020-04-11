{{-- {!! Helper::applClasses() !!} --}}
<?php
$configData = Helper::applClasses();
?>
@extends((( $configData["mainLayoutType"] === 'horizontal') ? 'site/layouts/hproductshop' : 'site/layouts/productshop' ))

@section('title', 'Shop')

@section('vendor-style')
<!-- Vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/nouislider.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/ui/prism.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
<!-- Page css files -->
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>

    <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/noui-slider.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/extensions/noui-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/app-ecommerce-shop.css') }}">

<?php endif; ?>

<script>
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
</script>
<script type="text/javascript">
    window.Laravel.addTocart = '<?= route('addTocart', ':id') ?>';
    window.Laravel.addTowishList = '<?= route('addTowishList', ':id') ?>';
    window.Laravel.getWishList = '<?= route('getWishList') ?>';
    window.Laravel.checkcartItem = '<?= route('checkcartitem', ':id') ?>';
    window.Laravel.checkwishlistItem = '<?= route('checkwishlistItem', ':id') ?>';
    window.Laravel.removeFromWishList = '<?= route('removeFromWishList', ':id') ?>';
    window.Laravel.Filter = '<?= route('shop_page_fliter')?>';

</script>
@endsection

@include('site/layouts/app-ecommerce-sidebar')
@section('content')
<!-- Ecommerce Content Section Starts -->
<section id="ecommerce-header">
    <div class="row">
        <div class="col-sm-12">
            <div class="ecommerce-header-items">
                <div class="result-toggler">
                    <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                        <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                    </button>
                    <div class="search-results">
                        16285 results found
                    </div>
                </div>
                <div class="view-options">
                    <select class="price-options form-control" id="ecommerce-price-options">
                        <option selected>Featured</option>
                        <option value="1">Lowest</option>
                        <option value="2">Highest</option>
                    </select>
                    <div class="view-btn-option">
                        <button class="btn btn-white view-btn grid-view-btn active">
                            <i class="feather icon-grid"></i>
                        </button>
                        <button class="btn btn-white list-view-btn view-btn">
                            <i class="feather icon-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ecommerce Content Section Starts -->
<!-- background Overlay when sidebar is shown  starts-->
<div class="shop-content-overlay"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- Ecommerce Search Bar Starts -->
<section id="ecommerce-searchbar">
    <div class="row mt-1">
        <div class="col-sm-12">
            <fieldset class="form-group position-relative">
                <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                <div class="form-control-position">
                    <i class="feather icon-search"></i>
                </div>
            </fieldset>
        </div>
    </div>
</section>
<!-- Ecommerce Search Bar Ends -->

<!-- Ecommerce Products Starts -->
<section id="ecommerce-products" class="list-view">
    <?php foreach ($products as $product): ?>
        <div id="pro_item" class="card ecommerce-card">
            <span id="pro_id" style="display: none;"><?= $product->id ?></span>
            <div class="card-content">

                <a href="<?= route('product_details', $product->id) ?>">
                    <div class="item-img text-center">
                        <img class="img-fluid" src="<?= asset('storage/' . $product->image) ?>" alt="img-placeholder">
                    </div>
                </a>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <div class="badge badge-primary badge-md">
                                <span>4</span> <i class="feather icon-star"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="item-price">
                                <?= $product->price ?>$
                            </h6>
                        </div>
                    </div>
                    <div class="item-name">
                        <span><?= $product->name ?></span>
                        <p class="item-company">By <span class="company-name">Google</span></p>
                    </div>
                    <div>
                        <p class="item-description">
                            <?= $product->Details ?>
                        </p>
                    </div>
                </div>

                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <div class="badge badge-primary badge-md">
                                <span>4</span> <i class="feather icon-star"></i>
                            </div>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">
                                <?= $product->price ?>$
                            </h6>
                        </div>
                    </div>
                    <div id="wishlist"class="wishlist">
                        <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                    </div>
                    <div id="cart" class="cart">
                        <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Add to cart</span> <a
                            href="<?= route('productcart') ?>" class="view-in-cart d-none">View In Cart</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<!-- Ecommerce Products Ends -->

<!-- Ecommerce Pagination Starts -->
<section id="ecommerce-pagination">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-2">
                    <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Ecommerce Pagination Ends -->

@endsection

@section('vendor-script')
<!-- Vendor js files -->
<script src="{{ asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/wNumb.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/nouislider.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/pages/app-ecommerce-shop.js')) }}"></script>

@endsection