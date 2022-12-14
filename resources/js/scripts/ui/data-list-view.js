/*=========================================================================================
 File Name: data-list-view.js
 Description: List View
 ----------------------------------------------------------------------------------------
 Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
 Author: PIXINVENT
 Author URL: http://www.themeforest.net/user/pixinvent
 ==========================================================================================*/

$(document).ready(function () {

    "use strict"
    // init list view datatable
    var dataListView = $('.data-list-view').DataTable({
        responsive: false,
        columnDefs: [
            {
                orderable: true,
                targets: 0,
                checkboxes: {selectRow: true}
            }
        ],
        dom:
                '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
            sLengthMenu: "_MENU_",
            sSearch: ""
        },
        aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
        select: {
            style: "multi"
        },
        order: [[1, "asc"]],
        bInfo: false,
        pageLength: 4,
        buttons: [
            {
                text: "<i class='feather icon-plus'></i> Add New",
                action: function () {
                    $(this).removeClass("btn-secondary");
                    $(".add-new-data").addClass("show");
                    $(".overlay-bg").addClass("show");
                    $("#data-name, #data-price").val("");
                    $("#data-category, #data-status").prop("selectedIndex", 0)
                },
                className: "btn-outline-primary"
            }
        ],
        initComplete: function (settings, json) {
            $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    });
    dataListView.on('draw.dt', function () {
        setTimeout(function () {
            if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
            }
        }, 50);
    });
    // init thumb view datatable
    var dataThumbView = $(".data-thumb-view").DataTable({
        responsive: false,
        columnDefs: [
            {
                orderable: true,
                targets: 0,
                checkboxes: {selectRow: true}
            }
        ],
        dom:
                '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
            sLengthMenu: "_MENU_",
            sSearch: ""
        },
        aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
        select: {
            style: "multi"
        },
        order: [[1, "asc"]],
        bInfo: false,
        pageLength: 4,
        buttons: [
            {
                text: "<i class='feather icon-plus'></i> Add New",
                action: function () {
                    $(this).removeClass("btn-secondary")
                    $(".add-new-data").addClass("show")
                    $(".overlay-bg").addClass("show")
                },
                className: "btn-outline-primary"
            }
        ],
        initComplete: function (settings, json) {
            $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    })

    dataThumbView.on('draw.dt', function () {
        setTimeout(function () {
            if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
            }
        }, 50);
    });
    // To append actions dropdown before add new button
    var actionDropdown = $(".actions-dropodown")
    actionDropdown.insertBefore($(".top .actions .dt-buttons"))


    // Scrollbar
    if ($(".data-items").length > 0) {
        new PerfectScrollbar(".data-items", {wheelPropagation: false})
    }

// Close sidebar
    $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function () {
        $(".add-new-data").removeClass("show")
        $(".overlay-bg").removeClass("show")
        $("#data-name, #data-price").val("")
        $("#data-category, #data-status").prop("selectedIndex", 0)
    })


    // On Edit
    $('#catEdit-id').on("click", function (e) {
        e.stopPropagation();
        $('#data-name').val('Altec Lansing - Bluetooth Speaker');
        $('#data-price').val('$99');
        $(".add-new-data").addClass("show");
        $(".overlay-bg").addClass("show");
    });
        $('#productEdit-id').on("click", function (e) {
        e.stopPropagation();
        $('#data-name').val('Altec Lansing - Bluetooth Speaker');
        $('#data-price').val('$99');
        $(".add-new-data").addClass("show");
        $(".overlay-bg").addClass("show");
    });
    // On Delete
    $('#catdelete-id').on("click", function (e) {
        e.stopPropagation();
        $(this).closest('td').parent('tr').fadeOut();
        var id = $(this).closest('td').parent('tr').find("#cat_id").text();
        deleteCategory(id);
        
    });
        $('#productdelete-id').on("click", function (e) {
        e.stopPropagation();
        $(this).closest('td').parent('tr').fadeOut();
        var id = $(this).closest('td').parent('tr').find("#cat_id").text();
        prouductDestory(id);
        
    });
    
    // dropzone init
    Dropzone.options.dataListUpload = {

        complete: function (files) {
            var _this = this

            // checks files in class dropzone and remove that files
            $(".hide-data-sidebar, .cancel-data-btn, .actions .dt-buttons").on(
                    "click",
                    function () {
                        $(".dropzone")[0].dropzone.files.forEach(function (file) {
                            file.previewElement.remove()
                        })
                        $(".dropzone").removeClass("dz-started")
                    }
            )
        }
    }
    Dropzone.options.dataListUpload.complete();


    // mac chrome checkbox fix
    if (navigator.userAgent.indexOf("Mac OS X") != -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
    }
});

$(document).on('click', '#subcategories #subcategory_item', function (event) {
    var item = $(event.currentTarget).parents("#list_item");
    var name = item.find("#sub_name").text();
    var id = item.find("#sub_id").text();
    $("#exampleModalCenterTitle").text(name);
    $("#model_id").text(id);

    setInterval(getSubsubCategory(id), 1000);

});
$(document).ready(function () {
    var local = window.Laravel.local;
    $('[data-toggle="tooltip"]').tooltip();
    var actions = $("#subsubcat td:last-child").html();
    // Append table with add row form on add new button click
    $(".add-new").click(function () {
        $(this).attr("disabled", "disabled");
        var index = $("#subsubcat tbody tr:last-child").index();
        if (local == "en") {
            var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name_en" id="name" placeholder="English Name"></td>' +
                    '<td><input type="text" class="form-control" name="name_ar" id="name"placeholder="Arabic Name"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
        } else if (local = "ar") {
            var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name_en" id="name_en" placeholder="الاسم بالانجليزية"></td>' +
                    '<td><input type="text" class="form-control" name="name_ar" id="name_ar"placeholder="الاسم بالعربية"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
        }
        $("#subsubcat").append(row);
        $("#subsubcat tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
    // Add row on add button click
    $(document).on("click", ".add", function () {
        var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        window.console.log('input' + input.text());

        input.each(function () {
            if (!$(this).val()) {
                $(this).addClass("error");
                empty = true;
            } else {
                $(this).removeClass("error");
            }
        });
        $(this).parents("tr").find(".error").first().focus();
        if (!empty) {
            var input_ = [];
            input.each(function (index) {
                $(this).parent("td").html($(this).val());
                input_[index] = $(this).attr('name', 'name_en').val();


            });


            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").removeAttr("disabled");

            var id = $("#model_id").text();
            var url = window.Laravel.sub_cat_store.replace(':id', id);
            window.console.log('url:' + url);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post('' + url, {
                name_en: input_[0],
                name_ar: input_[1]
            }, function (data) {
                window.console.log('data:' + data);
            });
        }
    });

    // Edit row on edit button click
    $(document).on("click", ".edit", function () {
        $(this).parents("tr").find("td:not(:last-child)").each(function () {
            $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").attr("disabled", "disabled");
    });
    // Delete row on delete button click
    $(document).on("click", ".delete", function () {
        $(this).parents("tr").remove();
        var id = $(this).parents("tr").find("#subsubcategoryId").text();
        var url = window.Laravel.deleteSubsubCategory.replace(':id', id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.post('' + url, {
            id: id,
            method: 'delete'
        }, function (data) {
            window.console.log(data);
        });
        $(".add-new").removeAttr("disabled");
    });
    $(document).on('click', "#deletesubcategory", function () {
        var id = $("#model_id").text();
        var url = window.Laravel.deleteSubCategory.replace(':id', id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.post('' + url, {
            id: id,
            method: 'delete'
        }, function (data) {
            window.console.log(data);
        });
    });
    $("#exampleModalLong").attr('aria-hidden', 'true');
    setInterval(getCategires(), 2000);
    $(document).on('change', "#data-category", function () {
        var id = $(this).val();
        setInterval(getsubcategories(id), 2000);
    });
    $(document).on('change', "#data-subcategory", function () {
        var id = $(this).val();
        setInterval(subsubcategories(id), 2000);

    });

});
function getCategires() {
    var url = window.Laravel.getcategories;
    $.get('' + url, function (data) {
        var html = data.map(function (dataItem) {
            return '<option value="' + dataItem.id + '">' + dataItem.name + '</option>'
        });

        $("#data-category").append(html);
    });
}
function getsubcategories(id) {
    if (id) {
        var url = window.Laravel.getsubcategories.replace(':id', id);
        $.get('' + url, function (data) {
            var html = data.map(function (dataItem) {
                return '<option value="' + dataItem.id + '">' + dataItem.name + '</option>'
            });
            $("#data-subcategory").html('<option selected=> Select...</option>');
            $("#data-subcategory").append(html);
        });
    } else {
        $("#data-subcategory").empty();
    }

}
function subsubcategories(id) {
    if (id) {
        var url = window.Laravel.getsubsubcategories.replace(':id', id);
        $.get('' + url, function (data) {
            var html = data.map(function (dataItem) {
                return '<option value="' + dataItem.id + '">' + dataItem.name + '</option>'
            });
            $("#data-subsubcategory").html('<option selected=> Select...</option>');
            $("#data-subsubcategory").append(html);
        });
    } else {
        $("#data-subsubcategory").empty();
    }
}

function getSubsubCategory(id) {
    var url = window.Laravel.getSubsubCategory.replace(':id', id);
    $.get('' + url, function (data) {
        var html = data.map(function (dataItem) {
            return createsubcategoryItem(dataItem.name, dataItem.id);
        });
        $("#subsubcategory").html(html);

    });
}
function createsubcategoryItem(name, id) {
    var html = `
                                  <tr>
                                        <td id="subsubcategoryId" style="display:none;">` + id + `</td>
                                        <td id="subsubcategoryName">` + name + `</td>
                                        <td>
                                            <a class="add" title="ADD" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="feather icon-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="feather icon-trash"></i></a>
                                        </td>
                                  </tr>`;
    return html;
}
function deleteCategory(id) {
    var url = window.Laravel.deleteCategory.replace(':id', id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post('' + url, {
        id: id,
        method: 'detete'
    }, function (data) {
        window.console.log(data);
    });
}

function prouductDestory(id) {
   var url = window.Laravel.destoryProduct.replace(':id', id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post('' + url, {
        id: id,
        method: 'detete'
    }, function (data) {
        window.console.log(data);
    });
}