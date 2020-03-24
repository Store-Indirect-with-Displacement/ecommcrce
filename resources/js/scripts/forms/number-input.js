/*=========================================================================================
 File Name: input-groups.js
 Description: Input Groups js
 ----------------------------------------------------------------------------------------
 Item name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
 Author: PIXINVENT
 https://designmodo.com/demo/product-page/
 Author URL: http://www.themeforest.net/user/pixinvent
 ==========================================================================================*/

(function (window, document, $) {
    'use strict';
    var $html = $('html');

    // Default Spin
    $(".touchspin").TouchSpin({
        buttondown_class: "btn btn-success",
        buttonup_class: "btn btn-danger",
    });

    // Icon Change
    $(".touchspin-icon").TouchSpin({
        buttondown_txt: '<i class="feather icon-chevron-down"></i>',
        buttonup_txt: '<i class="feather icon-chevron-up"></i>'
    });

    // Min - Max

    $(document).on('click', "#addSize", function (e) {
        e.preventDefault();

        var html = `<div class="input-group bootstrap-touchspin" id="size_item">
                                  <input type="text" name ="size[]" class="touchspin" value="50" data-bts-step="0.5" data-bts-decimals="2" multiple >
                                    <button style="height: 90%" id="removeSize" type="button" class="btn btn-danger waves-effect waves-light" aria-haspopup="true" aria-expanded="false">
                                        Remove
                                    </button>
                                </div>`;


        $("#size").append(html);
        $('.touchspin').TouchSpin({
            buttondown_class: "btn btn-success",
            buttonup_class: "btn btn-danger",

        });
    });

    $(document).on('click', "#removeSize", function (e) {
        e.preventDefault();
        $(this).parent().remove();
    });
    $(document).on('change', "#customSwitch3", function () {
        if ($(this).is(':checked')) {
            $(this).val('Blue');
        } else {
            $(this).val('false');
        }
        window.console.log($(this).val());
    });
    $(document).on('change', "#customSwitch4", function () {
        if ($(this).is(':checked'))  {
            $(this).val('Green');
        } else {
            $(this).val('false');
        }
        window.console.log($(this).val());
    });
    $(document).on('change', "#customSwitch5", function () {
        if ($(this).is(':checked')) {
            $(this).val('Red');
        } else {
            $(this).val('false');
        }
        window.console.log($(this).val());
    });
    $(document).on('change', "#customSwitch6", function () {
       if ($(this).is(':checked')){
            $(this).val("Light Blue");
        } else {
            $(this).val('false');
        }
        window.console.log($(this).val());
    });
    $(document).on('change', "#customSwitch7", function () {
        if ($(this).is(':checked')) {
            $(this).val('Orange');
        } else {
            $(this).val('false');
        }
        window.console.log($(this).val());
    });
    $(document).on('change', "#customSwitch8", function () {
        if ($(this).is(':checked')){
            $(this).val('Black');
        } else {
            $(this).val('false');
        }
        window.console.log($(this).val());
    });
    $(document).on('click', "#addColor", function (e) {
        e.preventDefault();
        $("#message").css('display', 'block');
    });
    var touchspinValue = $(".touchspin-min-max"),
            counterMin = 15,
            counterMax = 21;
    if (touchspinValue.length > 0) {
        touchspinValue.TouchSpin({
            min: counterMin,
            max: counterMax
        }).on('touchspin.on.startdownspin', function () {
            var $this = $(this);
            $('.bootstrap-touchspin-up').removeClass("disabled-max-min");
            if ($this.val() == counterMin) {
                $(this).siblings().find('.bootstrap-touchspin-down').addClass("disabled-max-min");
            }
        }).on('touchspin.on.startupspin', function () {
            var $this = $(this);
            $('.bootstrap-touchspin-down').removeClass("disabled-max-min");
            if ($this.val() == counterMax) {
                $(this).siblings().find('.bootstrap-touchspin-up').addClass("disabled-max-min");
            }
        });
    }


    // Step
    $(".touchspin-step").TouchSpin({
        step: 5
    });

    // Color Options
    $(".touchspin-color").each(function (index) {
        var down = "btn btn-primary",
                up = "btn btn-primary",
                $this = $(this);
        if ($this.data('bts-button-down-class')) {
            down = $this.data('bts-button-down-class');
        }
        if ($this.data('bts-button-up-class')) {
            up = $this.data('bts-button-up-class');
        }
        $this.TouchSpin({
            mousewheel: false,
            buttondown_class: down,
            buttonup_class: up,
            buttondown_txt: '<i class="feather icon-minus"></i>',
            buttonup_txt: '<i class="feather icon-plus"></i>'
        });
    });


})(window, document, jQuery);
