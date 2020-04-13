
@extends('Dashborad/layouts/contentLayoutMaster')

@section('title', 'Create Blog')

<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    @section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
    @endsection
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    @section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
    @endsection
<?php endif; ?>
@section('content')

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form" class="simple-validation">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Blog</h4>
                </div>
                <div id="app">
                    @include('layouts.session')
                </div>

                <div class="card-content">
                    <div class="card-body">
                        <form class="form" novalidate method="post" action="<?= route('store_blog') ?>" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-body">
                                <div class="row">
                                    <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                                        <?php if ($local == "en"): ?>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-label-group controls">
                                                        <input type="text" id="first-name-column" required="" class="form-control" placeholder="{{__('main.CatNameEn')}}" data-validation-required-message="This field is required" name="title_en">
                                                        <label for="first-name-column">{{__('main.CatNameEn')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif (($local == "ar")): ?>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-label-group controls">
                                                        <input type="text" id="last-name-column" class="form-control"data-validation-required-message="This field is required" required=""placeholder="{{__('main.CatNameAr')}}" name="title_ar">
                                                        <label for="last-name-column">{{__('main.CatNameAr')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                                        <?php if ($local == "en"): ?>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-label-group controls">
                                                        <textarea type="text" id="city-column" class="form-control"required=""data-validation-required-message="This field is required" placeholder="English Body" name="body_en"></textarea>
                                                        <label for="city-column">English Body</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif (($local == "ar")): ?>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-label-group controls">
                                                        <textarea type="text" id="country-floating" class="form-control"required data-validation-required-message="This field is required" name="body_ar" placeholder="Body"></textarea>
                                                        <label for="country-floating">Arabic Body</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                                        <?php if ($local == "en"): ?>
                                            <div class="col-md-6 col-12">
                                                <div class=" form-group">
                                                    <div class="form-label-group controls">
                                                        <textarea type="text" id="company-column" class="form-control"  name="content_en" required data-validation-required-message="This field is required" placeholder="English Content"></textarea>
                                                        <label for="company-column">English Content</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif (($local == "ar")): ?>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-label-group controls">
                                                        <textarea  id="email-id-column" class="form-control" name="content_ar" required data-validation-required-message="This field is required" placeholder="Arabic Content"></textarea>
                                                        <label for="email-id-column">Arabic Content</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <!-- Multiple Select2 start -->
                                    <div class="col-sm-6 col-12">
                                        <div class="text-bold-600 font-medium-2">
                                            Multiple Select Category Position
                                        </div>
                                        <p>Use <code>category</code>to determine of position blog </p>
                                        <div class="form-group">
                                            <select class="select2 form-control" name="positions_categories[]" multiple="multiple">
                                                <?php foreach ($categires as $cat): ?>
                                                    <optgroup>
                                                        <option value="<?= $cat->id ?>"><?= $cat->name ?></option>
                                                    </optgroup>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="text-bold-600 font-medium-2">
                                            Multiple sub Category Select Position
                                        </div>
                                        <p>Use <code>sub category</code>to determine of position blog </p>
                                        <div class="form-group">
                                            <select class="select2 form-control" name="positions_subcategories[]" multiple="multiple">
                                                <?php foreach ($categires as $cat): ?>
                                                    <optgroup label="<?= $cat->name ?>">
                                                        <?php foreach ($cat->subCategories as $subcat): ?>
                                                            <option value="<?= $subcat->id ?>"><?= $subcat->name ?></option>
                                                        <?php endforeach; ?>    
                                                    </optgroup>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="text-bold-600 font-medium-2">
                                            Multiple Sub Sub Category Select Position
                                        </div>
                                        <p>Use <code>sub sub category</code>to determine of position blog </p>
                                        <div class="form-group">
                                            <select class="select2 form-control" name="positions_subsubcategories[]" multiple="multiple">
                                                <?php foreach ($categires as $cat): ?>
                                                    <?php foreach ($cat->subCategories as $subcat): ?>
                                                        <optgroup label="<?= $subcat->name ?>">
                                                            <?php foreach ($subcat->subsubCategories as $subsubcat): ?>
                                                                <option value="<?= $subsubcat->id ?>"><?= $subsubcat->name ?></option>
                                                            <?php endforeach; ?>
                                                        </optgroup>
                                                    <?php endforeach; ?>   
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Multiple Select2 end -->
                                    <div class="col-sm-12 form-group data-field-col">
                                        <fieldset class="form-group">
                                            <div class="custom-file">
                                                <input type="file"  accept="image/*,video/*" name ="Image" class="custom-file-input" id="inputGroupFile01" >
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
@endsection

