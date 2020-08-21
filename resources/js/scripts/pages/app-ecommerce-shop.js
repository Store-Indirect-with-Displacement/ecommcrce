/*=========================================================================================
 File Name: app-ecommerce-shop.js
 Description: Ecommerce Shop
 ----------------------------------------------------------------------------------------
 Item name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
 Author: PIXINVENT
 Author URL: http://www.themeforest.net/user/pixinvent
 ==========================================================================================*/
$(document).ready(function () {
    "use strict";

    // RTL Support
    var direction = 'ltr';
    if ($('html').data('textdirection') == 'rtl') {
        direction = 'rtl';
    }

    var sidebarShop = $(".sidebar-shop"),
            shopOverlay = $(".shop-content-overlay"),
            sidebarToggler = $(".shop-sidebar-toggler"),
            priceFilter = $(".price-options"),
            gridViewBtn = $(".grid-view-btn"),
            listViewBtn = $(".list-view-btn"),
            ecommerceProducts = $("#ecommerce-products");



    var cart = $("#cart");
    var wishlist = $("#wishlist");





    // show sidebar
    sidebarToggler.on("click", function () {
        sidebarShop.toggleClass("show");
        shopOverlay.toggleClass("show");
    });

    // remove sidebar
    $(".shop-content-overlay, .sidebar-close-icon").on("click", function () {
        sidebarShop.removeClass("show");
        shopOverlay.removeClass("show");
    })

    //price slider
    var slider = document.getElementById("price-slider");
    if (slider) {
        noUiSlider.create(slider, {
            start: [51, 5000],
            direction: direction,
            connect: true,
            tooltips: [true, true],
            format: wNumb({
                decimals: 0,
            }),
            range: {
                "min": 51,
                "max": 5000
            }
        });
    }
    // for select in ecommerce header
    if (priceFilter.length > 0) {
        priceFilter.select2({
            minimumResultsForSearch: -1,
            dropdownAutoWidth: true,
            width: 'auto'
        });
    }

    /***** CHANGE VIEW *****/
    // Grid View
    gridViewBtn.on("click", function () {
        ecommerceProducts.removeClass("list-view").addClass("grid-view");
        listViewBtn.removeClass("active");
        gridViewBtn.addClass("active");
    });

    // List View
    listViewBtn.on("click", function () {
        ecommerceProducts.removeClass("grid-view").addClass("list-view");
        gridViewBtn.removeClass("active");
        listViewBtn.addClass("active");
    });


    var data = $("#ecommerce-products");
    data.find('div[id="pro_item"]').each(function (index) {
        var Item = $(this);
        var cart = Item.find("#cart");
        var wishlist = Item.find("#wishlist");
        var id = Item.find("#pro_id").text();
        var cartcheckurl = window.Laravel.checkcartItem;
        var wishcheckurl = window.Laravel.checkwishlistItem;
        cartcheckurl = cartcheckurl.replace(':id', id);
        wishcheckurl = wishcheckurl.replace(':id', id);
        var addToCart = cart.find(".add-to-cart");
        var viewInCart = cart.find(".view-in-cart");
        if (addToCart.is(':visible')) {
            $.get('' + cartcheckurl, function (data) {
                if (data == true) {
                    addToCart.addClass("d-none");
                    viewInCart.addClass("d-inline-block");
                }
            });
        } else {
            var href = viewInCart.attr('href');
            window.location.href = href;
        }
        $.get('' + wishcheckurl, function (data) {
            if (data == true) {
                wishlist.find("i").toggleClass("fa-heart-o fa-heart");
                wishlist.toggleClass("added");
            }
        });
    });



    $(".view-in-cart").on('click', function (e) {
        e.preventDefault();
    });



    // Checkout Wizard
    var checkoutWizard = $(".checkout-tab-steps"),
            checkoutValidation = checkoutWizard.show();
    if (checkoutWizard.length > 0) {
        $(checkoutWizard).steps({
            headerTag: "h6",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            enablePagination: false,
            onStepChanging: function (event, currentIndex, newIndex) {
                // allows to go back to previous step if form is
                if (currentIndex > newIndex) {
                    return true;
                }
                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex) {
                    // To remove error styles
                    checkoutValidation.find(".body:eq(" + newIndex + ") label.error").remove();
                    checkoutValidation.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }
                // check for valid details and show notification accordingly
                if (currentIndex === 1 && Number($(".form-control.required").val().length) < 1) {
                    toastr.warning('Error', 'Please Enter Valid Details', {"positionClass": "toast-bottom-right"});
                }
                checkoutValidation.validate().settings.ignore = ":disabled,:hidden";
                return checkoutValidation.valid();
            },
        });
        // to move to next step on place order and save address click
        $(".place-order").on("click", function () {
            $(".checkout-tab-steps").steps("next", {});
        });
        $(".delivery-address").on('click', function () {
             $(".checkout-tab-steps").steps("next", {});
            var url = window.Laravel.saveAddress;
            var fname = $("#checkout-address").find("#checkout-name").val();
            var mnumber = $("#checkout-address").find("#checkout-number").val();
            var apt_number = $("#checkout-address").find("#checkout-apt-number").val();
            var landmark = $("#checkout-address").find("#checkout-landmark").val();
            var city_id = $("#checkout-address").find("#checkout-city").val();
            var Pincode = $("#checkout-address").find("#checkout-pincode").val();
            var country_id = $("#checkout-address").find("#checkout-state").val();
            var Type = $("#checkout-address").find("#add-type").val();
                 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.post('' + url, {
                 fname:fname,
                 mnumber:mnumber,
                 apt_number:apt_number,
                 landmark:landmark,
                 city_id:city_id,
                 Pincode:Pincode,
                 country_id:country_id
            }, function (data) {
                window.console.log('address1:'+data);
            });
        });
        
        // check if user has entered valid cvv
        $(".btn-cvv").on("click", function () {
            if ($(".input-cvv").val().length == 3) {
                toastr.success('Success', 'Payment received Successfully', {"positionClass": "toast-bottom-right"});
            } else {
                toastr.warning('Error', 'Please Enter Valid Details', {"positionClass": "toast-bottom-right"});
            }
        })
    }

    // checkout quantity counter
    var quantityCounter = $(".quantity-counter"),
            CounterMin = 1,
            CounterMax = 10;
    if (quantityCounter.length > 0) {
        quantityCounter.TouchSpin({
            min: CounterMin,
            max: CounterMax
        }).on('touchspin.on.startdownspin', function () {
            var url = window.Laravel.decrementitem;
            var id = $(this).closest("#cart_item").find("#item_id").text();
            url = url.replace(':id', id);
            var subtotal = $("#subtotal");
            var discount = $("#discount");
            var net_total = $("#net_total");
            var tax = $("#tax");
            var shipping_charges = $("#shipping_charges");
            var total = $("#total");
            var payable = $("#payable");
            var cost = $(this).closest("#cart_item").find("#cost_item");

            var $this = $(this);
            if ($this.val() > 1) {
                $.get('' + url, function (data) {
                    subtotal.text(data.subtotal);
                    discount.text(data.discount);
                    shipping_charges.text(data.shipping_charges);
                    net_total.text(data.net_total);
                    tax.text(data.tax);
                    total.text(data.total);
                    payable.text(data.payable);
                    data.CartItems.map(function (Item) {
                        if (id == Item.model_id) {
                            cost.text(Item.price * Item.quantity);
                        }
                    });

                });
            }
            $('.bootstrap-touchspin-up').removeClass("disabled-max-min");
            if ($this.val() == 1) {

                $(this).siblings().find('.bootstrap-touchspin-down').addClass("disabled-max-min");
            }
        }).on('touchspin.on.startupspin', function () {
            var url = window.Laravel.incrementitem;
            window.console.log('url:' + url);
            var id = $(this).closest("#cart_item").find("#item_id").text();
            url = url.replace(':id', id);
            var $this = $(this);
            var subtotal = $("#subtotal");
            var discount = $("#discount");
            var net_total = $("#net_total");
            var tax = $("#tax");
            var shipping_charges = $("#shipping_charges");
            var total = $("#total");
            var payable = $("#payable");
            var cost = $(this).closest("#cart_item").find("#cost_item");
            if ($this.val() < 10) {
                $.get('' + url, function (data) {
                    subtotal.text(data.subtotal);
                    discount.text(data.discount);
                    shipping_charges.text(data.shipping_charges);
                    net_total.text(data.net_total);
                    tax.text(data.tax);
                    total.text(data.total);
                    payable.text(data.payable);
                    data.CartItems.map(function (Item) {
                        if (id == Item.model_id) {
                            cost.text(Item.price * Item.quantity);
                        }
                    });
                });
            }
            $('.bootstrap-touchspin-down').removeClass("disabled-max-min");
            if ($this.val() == 10) {
                $(this).siblings().find('.bootstrap-touchspin-up').addClass("disabled-max-min");
            }
        });
    }

});
$(document).on("click", "#MoveToWishList", function () {
    var url = window.Laravel.moveTowishList;
    var id = $(this).closest("#cart_item").find("#item_id").text();
    url = url.replace(':id', id);
    var subtotal = $("#subtotal");
    var discount = $("#discount");
    var net_total = $("#net_total");
    var tax = $("#tax");
    var shipping_charges = $("#shipping_charges");
    var total = $("#total");
    var payable = $("#payable");
    $.get('' + url, function (data) {
        subtotal.text(data.subtotal);
        discount.text(data.discount);
        shipping_charges.text(data.shipping_charges);
        net_total.text(data.net_total);
        tax.text(data.tax);
        total.text(data.total);
        payable.text(data.payable);
    });
    $(this).closest("#cart_item").remove();
});
// remove items from wishlist page
$(document).on("click", "#RemoveFromCat", function () {
    var url = window.Laravel.removeFromcart;
    var id = $(this).closest("#cart_item").find("#item_id").text();
    url = url.replace(':id', id);
    var subtotal = $("#subtotal");
    var discount = $("#discount");
    var net_total = $("#net_total");
    var tax = $("#tax");
    var shipping_charges = $("#shipping_charges");
    var total = $("#total");
    var payable = $("#payable");
    $.get('' + url, function (data) {
        subtotal.text(data.subtotal);
        discount.text(data.discount);
        shipping_charges.text(data.shipping_charges);
        net_total.text(data.net_total);
        tax.text(data.tax);
        total.text(data.total);
        payable.text(data.payable);
    });
    $(this).closest("#cart_item").remove();
});


$(document).on("click", "#RemoveFromWitchList", function () {
    var id = $(this).closest("#witch_item").find("#Item_w_id").text();
    var url = window.Laravel.removeFromWishList.replace(':id', id);
    $.get('' + url, function (data) {

    });
    $(this).closest("#witch_item").remove();
});

$(document).on("click", "#moveToCart", function () {
    var id = $(this).closest("#witch_item").find("#Item_w_id").text();
    var url = window.Laravel.moveToCart.replace(':id', id);
    $.get('' + url, function (data) {

    });
    $(this).closest("#witch_item").remove();
});
// on window resize hide sidebar
$(window).on("resize", function () {
    if ($(window).width() <= 991) {
        $(".sidebar-shop").removeClass("show");
        $(".shop-content-overlay").removeClass("show");
    } else {
        $(".sidebar-shop").addClass("show");
    }
});


// For Wishlist Icon
$(document).on("click", "#wishlist", function () {
    var id = $(this).closest("#pro_item").find("#pro_id").text();
    var url = window.Laravel.addTowishList;
    url = url.replace(':id', id);
    var $this = $(this);
    $this.find("i").toggleClass("fa-heart-o fa-heart");
    var wishcheckurl = window.Laravel.checkwishlistItem;
    var removeWishList = window.Laravel.removeFromWishList;
    removeWishList = removeWishList.replace(':id', id);
    wishcheckurl = wishcheckurl.replace(':id', id);
    $.get('' + wishcheckurl, function (data) {
        if (data == true) {
            $.get('' + removeWishList, function (data) {
                $this.toggleClass("added");
            });
        } else {
            $.get('' + url, function (data) {
                $this.toggleClass("added");

            });
        }
    });

});


// For View in cart
$(document).on("click", "#cart", function () {
    var id = $(this).closest("#pro_item").find("#pro_id").text();
    var url = window.Laravel.addTocart;
    url = url.replace(':id', id);
    var $this = $(this);
    var addToCart = $this.find(".add-to-cart");
    var viewInCart = $this.find(".view-in-cart");
    if (addToCart.is(':visible')) {
        $.get('' + url, function (data) {
            addToCart.addClass("d-none");
            viewInCart.addClass("d-inline-block");

        });
    } else {
        var href = viewInCart.attr('href');
        window.location.href = href;
    }
});

//price range 
$(document).on('change', "input:checkbox[name=price-range]:checked", function (event) {
    var flags = $(this).closest("#price-range").find("input:checkbox[name=price-range]:checked").map(function () {
        return this.value;
    }).get();
    window.console.log(flags);
});
//category 
$(document).on('change', "input:checkbox[name=cat]:checked", function (event) {
    var flags = $(this).closest("#categories").find("input:checkbox[name=cat]:checked").map(function () {
        return this.value;
    }).get();
    window.console.log(flags);
});



//colors


//sizes


//brands


