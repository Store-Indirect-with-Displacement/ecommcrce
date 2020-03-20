
@extends('Dashborad.layouts.contentLayoutMaster')
@section('title', 'Product View')

@section('vendor-style')
{{-- vendor files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
<script>
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>

</script>
<?php if (!auth()->guest()): ?>
    <script type="text/javascript">
        window.Laravel.local = "<?= App::getLocale(); ?>";
        window.Laravel.getcategories = '<?= route('getcategories') ?>';
        window.Laravel.getsubcategories = '<?= route('getsubcategories', ':id') ?>';
        window.Laravel.getsubsubcategories = '<?= route('getsubsubcategories', ':id') ?>';
        window.Laravel.storeproduct = '<?= route('storeproduct') ?>';
    </script>
<?php endif; ?>



@endsection
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    @section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
    @endsection
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    @section('page-style')
    <link rel="stylesheet" href="{{ asset('css-rtl/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/data-list-view.css') }}">
    @endsection
<?php endif; ?>

@section('content')
{{-- Data list view starts --}}
<section id="data-thumb-view" class="data-thumb-view-header">
    <div class="action-btns d-none">
        <div class="btn-dropdown mr-1 mb-1">
            <div class="btn-group dropdown actions-dropodown">
                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>{{__('main.Delete')}}</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>{{__('main.Edit')}}</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>{{__('main.Show')}}</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>{{__('main.Hiden')}}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- dataTable starts --}}
    <div class="table-responsive">
        <table class="table data-thumb-view">
            <thead>
                <tr>
                    <th></th>
                    <th>Image</th>
                    <th>NAME</th>
                    <th>CATEGORY</th>
                    <th>POPULARITY</th>
                    <th>ORDER STATUS</th>
                    <th>PRICE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <?= $color=""?>
                    <?php if ($product->order_status === 'delivered'): ?>
                        <?= $color = "success" ?>
                    <?php elseif ($product->order_status === 'pending'): ?>
                        <?= $color = "primary" ?>
                    <?php elseif ($product->order_status === 'on hold'): ?>
                        <?= $color = "warning" ?>
                    <?php elseif ($product->order_status === 'canceled'): ?>
                        <?= $color = "danger" ?>
                    <?php endif; ?>

                    <?php
                    $arr = array('success', 'primary', 'info', 'warning', 'danger');
                    ?>
                    <tr>
                        <td></td>
                        <td class="product-img"><img src="<?= $product->image ?>" alt="Img placeholder">
                        </td>
                        <td class="product-name"><?= $product->name ?></td>
                        <td class="product-category"><?= $product->category->name ?></td>
                        <td>
                            <div class="progress progress-bar-{{ $arr[array_rand($arr)] }}">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"
                                     style="width:<?= $product->popularity ?>%"></div>
                            </div>
                        </td>
                        <td>
                            <div class="chip chip- <?= $color ?>">
                                <div class="chip-body">
                                    <div class="chip-text"><?= $product->order_status?></div>
                                </div>
                            </div>
                        </td>
                        <td class="product-price"><?=$product->price ?></td>
                        <td class="product-action">
                            <span class="action-edit"><i class="feather icon-edit"></i></span>
                            <span class="action-delete"><i class="feather icon-trash"></i></span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    {{-- dataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
        <div class="overlay-bg"></div>
        <div class="add-new-data">

            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">Product View Data</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>

            <div class="data-items pb-3">
                <form action="javascript:;"  method="post" id="saveproduct">
                    <div class="data-fields px-2 mt-1">
                        <div class="row">
                            <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                                <div class="col-sm-12 data-field-col form-group">
                                    <?php if ($local == "ar"): ?>
                                        <label for="data-name">{{__('main.CatNameAr')}}</label>
                                    <?php elseif ($local == "en"): ?>
                                        <label for="data-name">{{__('main.CatNameEn')}}</label>
                                    <?php endif; ?>
                                    <input type="text" name="name_<?= $local ?>" required="" class="form-control" id="data-name_<?= $local ?>" value="">
                                </div>
                            <?php endforeach; ?>
                            <div  class="col-sm-12 data-field-col form-group">
                                <label for="data-category"> Category </label>
                                <select class="form-control"  id="data-category" name="category_id">
                                    <option selected value="">select Category</option>

                                </select>
                            </div>
                            <div class="col-sm-12 data-field-col form-group">
                                <label for="data-subcategory"> SubCategory </label>
                                <select class="form-control" id="data-subcategory" name="subcategory_id">
                                    <option selected value="">select subCategory</option>

                                </select>
                            </div>
                            <div class="col-sm-12 data-field-col form-group">
                                <label for="data-subsubcategory"> SubSubCategory </label>
                                <select class="form-control" id="data-subsubcategory" name="subsubcategory_id">
                                    <option selected value="">select subsubCategory</option>

                                </select>
                            </div>
                            <div class="col-sm-12 data-field-col form-group">
                                <label for="data-status">Order Status</label>
                                <select class="form-control" id="data-status" name="status">
                                    <option value="Pending">Pending</option>
                                    <option value="Canceled">Canceled</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="On Hold">On Hold</option>
                                </select>
                            </div>
                            <div class="col-sm-12 form-group data-field-col">
                                <label for="data-price">Price</label>
                                <input type="text" name="price" class="form-control" id="data-price">
                            </div>




                        </div>
                    </div>
                </form>  

                <div class="col-sm-12 data-field-col data-list-upload">
                    <form action="<?= route('uploadImage') ?>" class="dropzone dropzone-area"  method="post" id="dataListUpload">
                        @csrf
                        <div class="dz-message">Upload Image</div>

                    </form>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn form-group">
                    <button type="submit" id="btnsaveproduct" form="saveproduct"  class="btn btn-primary">{{__('main.Save')}}</button>
                </div>
                <div class="cancel-data-btn">
                    <button type="button"class="btn btn-outline-danger">Cancel</button>
                </div>
            </div>

        </div>
    </div>
    {{-- add new sidebar ends --}}
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
@endsection
