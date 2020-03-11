
@extends('Dashborad.layouts.contentLayoutMaster')
@section('title', 'Categories List View')

@section('vendor-style')
{{-- vendor files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
@endsection
@section('page-style')
{{-- Page css files --}}
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
   
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/data-list-view.css') }}">
<?php endif; ?>
@endsection

@section('content')
{{-- Data list view starts --}}
<section id="data-list-view" class="data-list-view-header">
    <div class="action-btns d-none">
        <div class="btn-dropdown mr-1 mb-1">
            <div class="btn-group dropdown actions-dropodown">
                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__('main.Actions')}}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>{{__('main.Delete')}}</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>{{__('main.Edit')}}</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>{{__('main.Show')}}</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>{{__('main.Hiden')}}</a>
                </div>
            </div>
        </div>
    </div>

    {{-- DataTable starts --}}
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th></th>
                    <th>{{__('main.Name')}}</th>
                    
                    <th>{{__('main.subCategoty_')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>


                    <tr>
                        <td><?= $cat->id ?></td>
                        <td class="product-name"><?= $cat->name ?></td>
                        <td class="product-category">
                            <?php foreach ($cat->subCategories as $subcat): ?>
                                <div class="btn-group dropdown" style="margin-left: 50px; ">
                                    <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $subcat->name ?>
                                    </button>
                                    <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -7px, 0px);">
                                        <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>{{__('main.Create SubCategory')}}</a>
                                        <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>{{__('main.Edit')}}</a>
                                        <a class="dropdown-item" href="#"><i class="feather icon-file"></i>{{__('main.Show')}}</a>
                                        <a class="dropdown-item" href="#"><i class="feather icon-save"></i>{{__('main.Delete')}}</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    {{-- DataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar scrollable-container">
        <div class="overlay-bg"></div>
        <div class="add-new-data">
            <div id="app">
                @include('layouts.session')
            </div>
            <form class="edit-profile m-b30"  action="<?= route('cat_store') ?>" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-12 m-t20">
                        <div class="ml-auto">
                            <h3 class="m-form__section">{{__('main.CreatenewCategory')}}</h3>
                        </div>
                    </div>
                    <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                        <div class="form-group col-6">
                            <?php if ($local == "ar"): ?>
                                <label class="col-form-label">{{__('main.CatNameAr')}}</label>
                            <?php elseif ($local == "en"): ?>
                                <label class="col-form-label">{{__('main.CatNameEn')}}</label>
                            <?php endif; ?>
                            <div>
                                <input class="form-control"  name="name_<?= $local ?>" required=""  type="text" value="">
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="col-12 m-t20">
                        <div class="ml-auto">
                            <h3 class="m-form__section">{{__('main.SubCategory')}}</h3>
                        </div>
                    </div>
                    <div class=" form-group col-12">
                        <input id="count" type="hidden" style="display: none" vlaue ="<?= $i = 0 ?>"> 
                        <table id="item-add" style="width:100%;">
                            <tr class="list-item">
                                <td>
                                    <div class="row">

                                        <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                                            <div class="col-6">
                                                <?php if ($local == "ar"): ?>
                                                    <label class="col-form-label">{{__('main.CatNameAr')}}</label>
                                                <?php elseif ($local == "en"): ?>
                                                    <label class="col-form-label"> {{__('main.CatNameEn')}}</label>
                                                <?php endif; ?>
                                                <div>

                                                    <input  class="form-control" required="" name="branchs[0][<?= $local ?>]" type="text" value="" multiple="">
                                                </div>
                                            </div>

                                        <?php endforeach; ?>

                                        <div class="col-md-12">
                                            <label class="col-form-label">{{__('main.Close')}}</label>
                                            <div class="form-group">
                                                <a class="delete" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group col-12 ">
                        <button type="button" class="btn btn-danger waves-effect waves-light add-item"><i class="fa fa-fw fa-plus-circle"></i>{{__('main.Add Item')}}</button>
                        <button type="submit" class="btn">{{__('main.Save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
{{-- Data list view end --}}
@endsection
@section('vendor-script')
{{-- vendor js files --}}
<script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.select.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/ui/data-list-view.js')) }}"></script>
<script>
// Pricing add
var i = 0;
function newMenuItem(i) {
    var newElem = $('tr.list-item').first().clone();
    newElem.find('input').val('');
    newElem.appendTo('table#item-add');
    newElem.find('input').attr('name', function (index, name) {
        var newname = name.replace('branchs[0]', 'branchs[' + i + ']');
        $(this).attr('name', newname);
        console.log('name' + index + ':' + newname);
    });
}
if ($("table#item-add").is('*')) {
    $('.add-item').on('click', function (e) {
        e.preventDefault();
        i++;
        newMenuItem(i);
    });
    $(document).on("click", "#item-add .delete", function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().parent().remove();
        i--;
    });
}
</script>
@endsection
