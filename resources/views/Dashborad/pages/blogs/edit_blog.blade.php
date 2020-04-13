
@extends('Dashborad/layouts/contentLayoutMaster')

@section('title', 'Edit Blog')

@section('content')
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
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form" class="simple-validation">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Blog 
                        <?php if ($blog): ?>
                            <?= $blog->name ?>
                        <?php endif; ?>
                    </h4>
                </div>
                <div id = "app">
                    @include('layouts.session')
                </div>

                <div class = "card-content">
                    <div class = "card-body">
                        <form class = "form" novalidate method = "post" action = "<?= route('updateblog', $blog->id) ?>" enctype = "multipart/form-data">
                            <?= csrf_field() ?>

                            <div class="form-body">
                                <?php if ($blog): ?>
                                    <div class="row">
                                        <?php ?>
                                        <input type="hidden" name="blog_id" value="<?= $blog->id ?>">
                                        <?php foreach (LaravelLocalization::getSupportedLocales() as $local => $prop): ?>
                                            <?php if ($local == "en"): ?>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-label-group controls">
                                                            <input type="text" id="first-name-column" required="" class="form-control" placeholder="{{__('main.CatNameEn')}}" data-validation-required-message="This field is required" name="title_en" value="<?= $blog->translate('en')->title; ?>"">
                                                            <label for="first-name-column">{{__('main.CatNameEn')}}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php elseif (($local == "ar")): ?>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-label-group controls">
                                                            <input type="text" id="last-name-column" class="form-control"data-validation-required-message="This field is required" required=""placeholder="{{__('main.CatNameAr')}}" value="<?= $blog->translate('ar')->title; ?>" name="title_ar">
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
                                                            <textarea type="text" id="city-column" class="form-control"required=""data-validation-required-message="This field is required" placeholder="English Body"  name="body_en" >
                                                                <?= $blog->translate('en')->body; ?>
                                                            </textarea>
                                                            <label for="city-column">English Body</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php elseif (($local == "ar")): ?>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-label-group controls">
                                                            <textarea type="text" id="country-floating" class="form-control"required data-validation-required-message="This field is required" name="body_ar" placeholder="Body">
                                                                <?= $blog->translate('ar')->body; ?>
                                                            </textarea>
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
                                                            <textarea type="text" id="company-column" class="form-control"  name="content_en" required data-validation-required-message="This field is required" placeholder="English Content">
                                                                <?= $blog->translate('en')->content; ?>
                                                            </textarea>
                                                            <label for="company-column">English Content</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php elseif (($local == "ar")): ?>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-label-group controls">
                                                            <textarea  id="email-id-column" class="form-control" name="content_ar" required data-validation-required-message="This field is required" placeholder="Arabic Content">
                                                                <?= $blog->translate('ar')->content; ?>
                                                            </textarea>
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
                                                    <optgroup>
                                                        <?php foreach ($categires as $cat): ?>
                                                            <option 
                                                            <?php foreach ($blogPos as $pos): ?>
                                                                <?php if ($cat->id == $pos->category_id): ?>
                                                                        selected=""
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                                value="<?= $cat->id ?>"><?= $cat->name ?></option>
                                                            <?php endforeach; ?>
                                                    </optgroup>
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
                                                                <option
                                                                <?php foreach ($blogPos as $pos): ?>
                                                                    <?php if ($subcat->id == $pos->sub_category_id): ?>
                                                                            selected=""
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>

                                                                    value="<?= $subcat->id ?>"><?= $subcat->name ?></option>
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
                                                                    <option
                                                                    <?php foreach ($blogPos as $pos): ?>
                                                                        <?php if ($subsubcat->id == $pos->sub_subcategory_id): ?>
                                                                                selected=""
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>

                                                                        value="<?= $subsubcat->id ?>"><?= $subsubcat->name ?></option>
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
                                <?php endif; ?>
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

