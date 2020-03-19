
@extends('Dashborad.layouts.contentLayoutMaster')
@section('title', 'Categories List View')

@section('vendor-style')
{{-- vendor files --}}

<link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
<style>
    .scrollbar
    {
        margin-left: 0px;
        float: left;
        height: 100%;
        width:  28.57rem;;
        background: white;
        overflow-y: scroll;
        margin-bottom: 25px;
    }
    .force-overflow
    {
        min-height: 100%;
    }

    #style-8::-webkit-scrollbar-track
    {
        border: .5px solid #FFF;
        background-color: #FFF;
    }

    #style-8::-webkit-scrollbar
    {
        width: 1px;
        background-color: #FFF;
    }

    #style-8::-webkit-scrollbar-thumb
    {
        background-color: #000000;	
    }

</style>
<script>
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>

</script>
<?php if (!auth()->guest()): ?>
    <script type="text/javascript">
        window.Laravel.local = "<?= App::getLocale(); ?>";
        window.Laravel.sub_cat_store = '<?= route('sub_cat_store', ':id') ?>';
        window.Laravel.getSubsubCategory = '<?= route('getsubcat', ':id') ?>';
        window.Laravel.deleteSubsubCategory = '<?= route('deletesubsubCategory', ':id') ?>';
        window.Laravel.deleteSubCategory = '<?= route('deletesubCategory', ':id') ?>';
        window.Laravel.deleteCategory = '<?= route('deletecategory', ':id') ?>';
    </script>
<?php endif; ?>


@endsection
@section('page-style')
{{-- Page css files --}}
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/data-list-view.css')}}">
    <link rel="stylesheet" href="{{ asset('css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/table.css')}}">



<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/data-list-view.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/table.css')}}">

<?php endif; ?>
@endsection

@section('content')
{{-- Data list view starts --}}
<!-- Data list view starts -->
<section id="data-list-view" class="data-list-view-header">
    <div class="action-btns d-none">
        <div class="btn-dropdown mr-1 mb-1">
            <div class="btn-group dropdown actions-dropodown">
                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
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

    <!-- DataTable starts -->
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th></th>
                    <th style="display: none;">id</th>
                    <th>{{__('main.Name')}}</th>
                    <th>{{__('main.subCategoty_')}}</th>
                    <th>POPULARITY</th>
                    <th>ORDER STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>
                    <tr>
                        <td></td>
                        <td id="cat_id" style="display: none;"><?= $cat->id ?></td>
                        <td class="product-name"><?= $cat->name ?></td>
                        <td class="product-category">
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-flat-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        {{__('main.cat')}} {{$cat->name}}
                                    </button>
                                    <ul class="dropdown-menu" id="subcategories"aria-labelledby="dropdownMenuButton100" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(14px, -140px, 0px);">

                                        <?php foreach ($cat->subCategories as $subcat): ?>
                                            <li id="list_item">
                                                <a class="dropdown-item" id="subcategory_item"data-toggle="modal" data-target ="#exampleModalLong" href="#">
                                                    <span id="sub_name"><?= $subcat->name ?></span>
                                                    <span id="sub_id" style="display: none;"><?= $subcat->id ?></span>
                                                </a>
                                            </li> 
                                        <?php endforeach; ?>

                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="progress progress-bar-success">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                            </div>
                        </td>
                        <td>
                            <div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">on hold</div>
                                </div>
                            </div>
                        </td>

                        <td class="product-action">
                            <span class="action-edit"><i class="feather icon-edit"></i></span>
                            <span class="action-delete"><i class="feather icon-trash"></i></span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- DataTable ends -->


    {{-- add new sidebar starts --}}

    <div class="add-new-data-sidebar  ">

        <div class="overlay-bg"></div>


        <div class="add-new-data " >
            <div class="scrollbar" id="style-8">
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

                            <button type="button"  class="btn btn-primary mr-1 mb-1 waves-effect waves-light add-item"><i class="fa fa-fw fa-plus-circle"></i>{{__('main.Add Item')}}</button>
                            <button type="submit" class="btn btn-success mr-1 mb-1 waves-effect waves-light">{{__('main.Save')}}</button>
                        </div>
                        <div style="display: none" action="#" class="dropzone dropzone-area dz-clickable" id="dataListUpload">
                            <div class="dz-message">Upload Image</div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                    <h5 class="modal-title" style="display: none"id="model_id"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab-justified" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="false">{{__('main.Categories')}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-just" role="tab" aria-controls="messages-just" aria-selected="false">{{__('main.Edit')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="settings-tab-justified" data-toggle="tab" href="#settings-just" role="tab" aria-controls="settings-just" aria-selected="true">{{__('main.Delete')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-1">
                        <div class="tab-pane" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">


                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <?php if (App::getLocale() == "en"): ?>
                                            <h2>{{__('main.Categories')}} <b>{{__('main.Details')}}</b></h2>
                                        <?php elseif (App::getLocale() == "ar"): ?>
                                            <h2> {{__('main.Details')}}  <b>{{__('main.Categories')}}</b></h2>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>{{__('main.Add Item')}}</button>
                                    </div>
                                </div>
                            </div>
                            <table id="subsubcat"class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{__('main.Name')}}</th>
                                        <th>{{__('main.Actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="subsubcategory">
                                    <tr>
                                        <td id="subsubcategoryName"></td>
                                        <td>
                                            <a class="add" title="ADD" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="feather icon-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="feather icon-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
                            <table id="subsubcatedit"class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{__('main.CatNameAr')}}</th>
                                        <th>{{__('main.CatNameEn')}}</th>
                                        <th>{{__('main.Save')}}</th>

                                    </tr>
                                </thead>
                                <tbody id="subsubcategoryEdit">
                                    <tr>
                                        <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>

                                            <td>
                                                <?php if ($local == "en"): ?>
                                                    <input type="text" class="form-control" name="name_en" id="name" placeholder="{{__('main.CatNameAr')}}">
                                                <?php elseif ($local == "ar"): ?>
                                                    <input type="text" class="form-control" name="name_ar" id="name" placeholder="{{__('main.CatNameEn')}}">
                                                <?php endif; ?>
                                            </td>

                                        <?php endforeach; ?>
                                        <td>
                                            <button id="Editsubcategory" type="button" class="btn btn-success mr-1 mb-1 waves-effect waves-light">{{__('main.Save')}}</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane active" id="settings-just" role="tabpanel" aria-labelledby="settings-tab-justified">  
                            <button id="deletesubcategory" type="button" class="btn btn-success mr-1 mb-1 waves-effect waves-light">{{__('main.Delete')}}</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Data list view end --}}
@endsection
@section('vendor-script')
{{-- vendor js files --}}
<script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset('js/scripts/ui/data-list-view.js') }}"></script>
<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
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
