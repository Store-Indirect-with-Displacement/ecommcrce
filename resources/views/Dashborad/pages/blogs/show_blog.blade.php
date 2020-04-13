@extends('Dashborad/layouts/contentLayoutMaster')

@section('title', 'blog')

@section('page-style')
{{-- Page Css files --}}
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" href="{{ asset(mix('css/pages/users.css')) }}">
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/users.css') }}">
<?php endif; ?>
@endsection
@section('content')

<section id="profile-info">
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Blog Information</h4>
                    <i class="feather icon-more-horizontal cursor-pointer"></i>
                </div>
                <div class="card-body">
                    <div class="mt-1">
                        <h6 class="mb-0">Posted by:</h6>
                        <p><?= $blog->user->name ?></p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Posted At:</h6>
                        <p><?= $blog->date ?></p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Post in:</h6>
                        <?php foreach ($blogPos as $key => $pos): ?>
                            <?php if ($pos->category_id != null): ?>
                                <p>

                                    - <?= App\Category::where('id', $pos->category_id)->first()->name ?> 
                                    <?php if ($pos->sub_category_id != null) : ?>
                                        ,<?= \App\SubCategory::where('id', $pos->sub_category_id)->first()->name ?>
                                    <?php endif; ?>

                                    <?php if ($pos->sub_subcategory_id != null) : ?>
                                        ,<?= App\SubSubCategory::where('id', $pos->sub_subcategory_id)->first()->name ?>
                                    <?php endif; ?>
                                </p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <?php if ($blog->is_archive == 0): ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Archive(<?= $blogarchiveCount ?>)</h4>
                    </div>
                    <div class="card-body suggested-block">
                        <?php foreach ($blogarchive as $arc): ?>
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <div class=" mr-50">
                                    <a href="<?= route('showblog', $arc->id) ?>">
                                        <img src="<?= asset('storage/' . $arc->image) ?>" alt="avtar img holder" height="60" width="60">
                                    </a> 
                                </div>
                                <div class="user-page-info">
                                    <h6 class="mb-0"><a href="<?= route('showblog', $arc->id) ?>"><?= $arc->title ?></a></h6>

                                    <span class="font-small-2"><?= $arc->date ?></span>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                    </div>
                </div>
            <?php else: ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blogs(<?= $blogunarchiveCount ?>)</h4>
                    </div>
                    <div class="card-body suggested-block">
                        <?php foreach ($blogunarchive as $unarc): ?>
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <div class=" mr-50">
                                    <a href="<?= route('showblog', $unarc->id) ?>">
                                        <img src="<?= asset('storage/' . $unarc->image) ?>" alt="avtar img holder" height="60" width="60">
                                    </a> 
                                </div>
                                <div class="user-page-info">
                                    <h6 class="mb-0"><a href="<?= route('showblog', $unarc->id) ?>"><?= $unarc->title ?></a></h6>
                                    <span class="font-small-2"><?= $unarc->date ?></span>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                    </div>
                </div>
            <?php endif; ?>

        </div>
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center mb-1">
                        <div class="avatar mr-1">
                            <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" alt="avtar img holder" height="45" width="45">
                        </div>
                        <div class="user-page-info">
                            <p class="mb-0"><?= $blog->title ?></p>
                            <span class="font-small-2"><?= $blog->date ?></span>
                        </div>
                        <?php if ($blog->is_archive == 0): ?>
                            <div class="ml-auto user-like text-danger"><a href="<?= route('addtoArchive', $blog->id) ?>" class="btn btn-sm btn-primary">Add To Archive</a></div>
                        <?php else: ?>
                            <div class="ml-auto user-like text-danger"><a href="<?= route('removetoArchive', $blog->id) ?>" class="btn btn-sm btn-danger">Remove From Archive</a></div>
                        <?php endif; ?>
                    </div>
                    <p><?= $blog->body ?><code id="headingCollapse1" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">

                            Read More

                        </code>
                    <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse" style="">
                        <?= $blog->content ?>
                    </div>

                    </p>

                    <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('storage/'.$blog->image) }}" alt="avtar img holder">
                    <div class="d-flex justify-content-start align-items-center mb-1">
                        <div class="d-flex align-items-center">
                            <i class="feather icon-heart font-medium-2 mr-50"></i>
                            <span>145</span>
                        </div>
                        <div class="ml-2">
                            <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Trina Lynes" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Lilian Nenez" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Alberto Glotzbach" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="George Nordic" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Vinnie Mostowy" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li class="d-inline-block pl-50">
                                    <span>+140 more</span>
                                </li>
                            </ul>
                        </div>
                        <p class="ml-auto d-flex align-items-center">
                            <i class="feather icon-message-square font-medium-2 mr-50"></i>77
                        </p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-1">
                        <div class="avatar mr-50">
                            <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
                        </div>
                        <div class="user-page-info">
                            <h6 class="mb-0">Kitty Allanson</h6>
                            <span class="font-small-2">orthoplumbate morningtide naphthaline exarteritis</span>
                        </div>
                        <div class="ml-auto cursor-pointer">
                            <i class="feather icon-heart mr-50"></i>
                            <i class="feather icon-message-square"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-2">
                        <div class="avatar mr-50">
                            <img src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
                        </div>
                        <div class="user-page-info">
                            <h6 class="mb-0">Jeanie Bulgrin</h6>
                            <span class="font-small-2">blockiness pandemy metaxylene speckle coppy</span>
                        </div>
                        <div class="ml-auto cursor-pointer">
                            <i class="feather icon-heart mr-50"></i>
                            <i class="feather icon-message-square"></i>
                        </div>
                    </div>
                    <fieldset class="form-label-group mb-50">
                        <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
                        <label for="label-textarea">Add Comment</label>
                    </fieldset>
                    <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>ADS BANNER</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-02.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-03.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-04.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-05.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-06.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-07.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-08.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                        <div class="col-md-4 col-6 user-latest-img">
                            <img src="{{ asset('images/profile/user-uploads/user-09.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>RECENT POSTS</h4>
                    <i class="feather icon-more-horizontal cursor-pointer"></i>
                </div>
                <div class="card-body">
                    <div class="card-body suggested-block">
                        <div class="d-flex justify-content-start align-items-center mb-1">
                            <div class=" mr-50">
                                <a href="#">
                                    <img src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="avtar img holder" height="60" width="60">
                                </a> 
                            </div>
                            <div class="user-page-info">
                                <h6 class="mb-0"><?= $blog->title ?></h6>
                                <span class="font-small-2"><?= $blog->date ?></span>
                            </div>

                        </div>

                        <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>
</div>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/user-profile.js')) }}"></script>
@endsection
