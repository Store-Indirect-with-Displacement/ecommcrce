/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).on('click', "#list_product #addTocart", function (event) {
    var item = $(event.currentTarget).parents('#product_item');
    var id = item.find("#product_id").text();
    var url = window.Laravel.addTocart;
    url = url.replace(':id', id);
    //Real Time
    $.get('' + url, function (data) {
        $("#cartcount").text(data.CartItems.length);
        $("#numberitems").text(data.CartItems.length);
        $("#item_total").text(data.subtotal);
        var productList = $("#cart_list");
        var list = data.CartItems.map(function (Item) {
            return ProductItem(Item);
        });
        productList.append(list);
    });

});

function ProductItem(Item) {
    var url = window.Laravel.product_detials;
    url = url.replace(':id', Item.model_id);
    var html = `<div  id = "cart_item_h" class="ps-cart__content">
                            <div class="ps-cart-item">
                                        <span id="car_id_h" style="display:none;">` + Item.model_id + `</span>
                                        <a id="item_delete"class="ps-cart-item__close" href="javascript::void(0)"></a>
                                        <div class="ps-cart-item__thumbnail"><a href="` + url + `"></a><img src="` + Item.image + `" alt=""></div>
                                        <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="` + url + `">` + Item.name + `</a>
                                            <p><span>Quantity:<i>` + Item.quantity + `</i></span><span>Total:<i>` + Item.quantity * Item.price + `</i></span></p>
                                        </div>
                                    </div>
                                </div>`;
    return html;

}
function ProductItemW(Item) {
    var url = window.Laravel.product_detials;
    url = url.replace(':id', Item.model_id);
    var html = `<div class="ps-cart__content">
                            <div id = "witch_item_h"class="ps-cart-item">
                                        <span id="w_id_h" style="display:none;">` + Item.model_id + `</span>
                                        <a id="itemw_delete"class="ps-cart-item__close" href="javascript::void(0)"></a>
                                        <div class="ps-cart-item__thumbnail"><a href="` + url + `"></a><img src="` + Item.image + `" alt=""></div>
                                        <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="` + url + `">` + Item.name + `</a>
                                            <p><span>Total:<i>` + Item.price + `</i></span></p>
                                        </div>
                                    </div>
                                </div>`;
    return html;
}


$(document).ready(function () {
    var url = window.Laravel.getCartData;
    $.get('' + url, function (data) {
        $("#cartcount").text(data.CartItems.length);
        $("#numberitems").text(data.CartItems.length);
        $("#item_total").text(data.subtotal);
        var productList = $("#cart_list");
        var list = data.CartItems.map(function (Item) {
            return ProductItem(Item);
        });
        productList.append(list);
    });
    var url2 = window.Laravel.getWishListData;
    $.get('' + url2, function (data) {
        $("#witchcount").text(data.WitchListItems.length);
        $("#numberitemswitch").text(data.WitchListItems.length);
        var productwList = $("#witch_list");
        var listw = data.WitchListItems.map(function (Item) {
            return ProductItemW(Item);
        });
        productwList.append(listw);
    })

});

$(document).on('click', '#item_delete', function (event) {
    var url = window.Laravel.removeFromcart;
    var item = $(event.currentTarget).parents('#cart_item_h');
    var id = item.find("#car_id_h").text();
    url = url.replace(':id', id);
    $.get('' + url, function (data) {
        $("#cartcount").text(data.CartItems.length);
        $("#numberitems").text(data.CartItems.length);
        $("#item_total").text(data.subtotal);
        item.remove();
    });
});

$(document).on('click', "#list_product #addToWishList", function () {
    var item = $(this).closest('#product_item');
    var id = item.find("#product_id").text();
    var url = window.Laravel.addTowishList;
    url = url.replace(':id', id);
    $.get('' + url, function (data) {
        $("#witchcount").text(data.WitchListItems.length);
        $("#numberitemswitch").text(data.WitchListItems.length);
        var productList = $("#witch_list");
        var list = data.WitchListItems.map(function (Item) {
            return ProductItemW(Item);
        });
        productList.append(list);
    });
});

$(document).on('click', "#itemw_delete", function (data) {
    var url = window.Laravel.removeFromWishList;
    var item = $(event.currentTarget).parents('#witch_item_h');
    var id = item.find("#w_id_h").text();
    url = url.replace(':id', id);
    $.get('' + url, function (data) {
        $("#witchcount").text(data.WitchListItems.length);
        $("#numberitemswitch").text(data.WitchListItems.length);
        item.remove();
    });
});


