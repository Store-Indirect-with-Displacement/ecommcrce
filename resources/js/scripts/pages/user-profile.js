/*=========================================================================================
 File Name: user-profile.js
 Description: User Profile jQuery Plugin Intialization
 --------------------------------------------------------------------------------------
 Item name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
 Author: PIXINVENT
 Author URL: http://www.themeforest.net/user/pixinvent
 ==========================================================================================*/

var comments = [];
var i = 0;
$(document).ready(function () {

    /************************************
     *     Block Examples      *
     ************************************/
    $('.block-element').on('click', function () {
        var block_ele = $(this);
        $(block_ele).block({
            message: '<div class="spinner-border text-primary"></div>',
            timeout: 2000, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });
    });

    // profile-header-nav toggle
    $('.navbar-toggler').on('click', function () {
        $('.navbar-collapse').toggleClass('show');
        $('.navbar-toggler-icon i').toggleClass('icon-x icon-align-justify');
    });

});


$(document).on('submit', "#addComment", function (event) {
    var name = event.target.name.value;
    var email = event.target.email.value;
    var comment = event.target.comment.value;
    var blog_id = event.target.blog_id.value;
    var url = window.Laravel.addComment;
    var submit = $("#addComment").find("#submit");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.post('' + url, {
        name: name,
        email: email,
        comment: comment,
        blog_id: blog_id,
    }, function (data) {
        window.console.log(data);
        $("#inlineForm").modal('hide');
        addComment(data);
    });

});

function   addComment(comment) {
    comments[i] = comment;
    window.console.log(comments);
    showComments(comments);
    i++;
}

function showComments(comments) {
    var commentHtml = comments.map(function (comment) {
        return  CommentHtml(comment);

    });
    $("#preappen").prepend(commentHtml);

}
function CommentHtml(comment) {
    var Html = '';
    if (window.Laravel.userId || comment.user_id != null) {
        Html = `          <div class="d-flex justify-content-start align-items-center mb-1">
                        <div class="avatar mr-50">
                            <img src="{{URL::asset('storage/` + comment.user.image + `')" alt="Avatar" height="30" width="30">
                        </div>
                        <div class="user-page-info">
                            <h6 class="mb-0">` + comment.user.name + `</h6>
                            <span class="font-small-2">` + comment.comment + `</span>
                        </div>
                        <div class="ml-auto cursor-pointer">
                            <i class="feather icon-heart mr-50"></i>
                            <i class="feather icon-message-square"></i>
                        </div>`;
    } else {
        Html = `          <div class="d-flex justify-content-start align-items-center mb-1">
                        <div class="avatar mr-50">
                            <img src="storage/` + comment.image + `" alt="Avatar" height="30" width="30">
                        </div>
                        <div class="user-page-info">
                            <h6 class="mb-0">` + comment.name + `</h6>
                            <span class="font-small-2">` + comment.comment + `</span>
                        </div>
                        <div class="ml-auto cursor-pointer">
                            <i class="feather icon-heart mr-50"></i>
                            <i class="feather icon-message-square"></i>
                        </div>`;

    }
    return Html;
}
