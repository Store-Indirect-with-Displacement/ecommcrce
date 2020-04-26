/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function ProductItem(Item) {
    var url = window.Laravel.product_detials;
    var setImage = window.Laravel.setImage;
    window.console.log(setImage);
    setImage = setImage.replace('setimage', 'storage/' + Item.image);

    url = url.replace(':id', Item.model_id);
    var html = `
                                    <a id ="cart_item_h"class = "d-flex justify-content-between " href = "` + url + `">
                                        <div class = "media d-flex align-items-start">
                                            <span id="car_id_h" style="display:none;">` + Item.model_id + `</span>
                                            <div class = "media-left  w-16 item-img  flex bg-white items-center justify-center ">
                                                <img src="` + setImage + `" alt="item" style="width: 50px; height: 50px;" >
                                            </div>
                                            <div class = "media-body">
                                                <h6 class = "primary media-heading">` + Item.name + `</h6>
                                                <small class = "notification-text"> 
                                                    <div class="media-body">
                                                        <span class="primary">Quantity: <span class="danger font-weight-bold">` + Item.quantity + `</span></span>
                                                        <span class="primary" style="margin-left: 7px">Total Price: <span class="danger font-weight-bold">` + Item.quantity * Item.price + `$</span></span>
                                                    </div>
                                                </small>
                                            </div>
                                            <small>
                                                 <div id= "cart_delete">
                                                   <i class="feather icon-x align-middle"></i>
                                                 </div>
                                            </small>
                                        </div>
                                    </a>
                                `;
    return html;

}
function ProductItemW(Item) {
    var url = window.Laravel.product_detials;
    var setImage = window.Laravel.setImage;
    window.console.log(setImage);
    setImage = setImage.replace('setimage', 'storage/' + Item.image);
    url = url.replace(':id', Item.model_id);
    var html = `
                                    <a id="witch_item_h" class = "d-flex justify-content-between " href = "` + url + `">
                                        <div class = "media d-flex align-items-start">
                                            <span id="w_id_h" style="display:none;">` + Item.model_id + `</span>
                                            <div class = "media-left  w-16 item-img  flex bg-white items-center justify-center ">
                                                <img src="` + setImage + `" alt="item" style="width: 50px; height: 50px;" >
                                            </div>
                                            <div class = "media-body">
                                                <h6 class = "primary media-heading">` + Item.name + `</h6>
                                                <small class = "notification-text"> 
                                                    <div class="media-body">
                              
                                                        <span class="primary" style="margin-left: 7px">Total Price: <span class="danger font-weight-bold">` + Item.price + `$</span></span>
                                                    </div>
                                                </small>
                                            </div>
                                            <small>
                                                <div id= "wishList_delete">
                                                   <i class="feather icon-x align-middle"></i>
                                                 </div>
                                            </small>
                                        </div>
                                    </a>
                                `;
    return html;

}
$(document).ready(function () {
    var url = window.Laravel.getCartData;
    $.get('' + url, function (data) {
        $("#cart_count").text(data.CartItems.length);
        $("#numberitems").text(data.CartItems.length + ' Items');
//        $("#item_total").text(data.subtotal);
        var cart_list = $("#cart_list");
        var list = data.CartItems.map(function (Item) {
            return ProductItem(Item);
        });
        cart_list.find("#cart_item").append(list);
    });

    var url2 = window.Laravel.getWishListData;
    $.get('' + url2, function (data) {
        $("#wishlist_count").text(data.WitchListItems.length);
        $("#wishlist_numberItems").text(data.WitchListItems.length + ' Items');

        var listw = data.WitchListItems.map(function (Item) {
            return ProductItemW(Item);
        });
        $("#wishlist_list").find("#wishlist_item").append(listw);
    });

});



$(document).on('click', "#addToCart", function (event) {
    var item = $(event.currentTarget).parents('#Product_item');
    var id = item.find("#product_id").text();
    var url = window.Laravel.addTocart;
    url = url.replace(':id', id);
    //Real Time
    $.get('' + url, function (data) {
        $("#cart_count").text(data.CartItems.length);
        $("#numberitems").text(data.CartItems.length + ' Items');
//        $("#item_total").text(data.subtotal);
        var cart_list = $("#cart_list");
        var list = data.CartItems.map(function (Item) {
            return ProductItem(Item);
        });

        cart_list.find("#cart_item").html(list);
    });
});

$(document).on('click', "#addToWishList", function (event) {
    var item = $(this).closest('#Product_item');
    var id = item.find("#product_id").text();
    var url = window.Laravel.addTowishList;
    url = url.replace(':id', id);
    $.get('' + url, function (data) {
        $("#wishlist_count").text(data.WitchListItems.length);
        $("#wishlist_numberItems").text(data.WitchListItems.length + ' Items');
        var listw = data.WitchListItems.map(function (Item) {
            return ProductItemW(Item);
        });
        $("#wishlist_list").find("#wishlist_item").html(listw);

    });
});

$(document).on('click', "#cart_delete", function (event) {
    var url = window.Laravel.removeFromcart;
    var item = $(event.currentTarget).parents('#cart_item_h');
    var id = item.find("#car_id_h").text();
    url = url.replace(':id', id);
    $.get('' + url, function (data) {
        $("#cart_count").text(data.CartItems.length);
        $("#numberitems").text(data.CartItems.length + ' Items');
        item.remove();
    });
});

$(document).on('click', "#wishList_delete", function (event) {
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

