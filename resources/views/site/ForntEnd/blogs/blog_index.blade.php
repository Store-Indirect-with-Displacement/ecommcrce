@extends('site/layouts/contentLayoutMaster')
@section('title', 'Blogs')
@section('page-style')
{{-- Page Css files --}}

<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" href="{{ asset(mix('css/pages/users.css')) }}">

<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/users.css') }}">

<?php endif; ?>
@endsection
@section('content')
<div id="user-profile">

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
                            <h6 class="mb-0">Blogs Count:  <?= $blogs->count() ?></h6>

                        </div>
                        <div class="mt-1">
                            <h6 class="mb-0">Archived Blogs: <?= $blogarchiveCount ?></h6>

                        </div>
                        <div class="mt-1">
                            <h6 class="mb-0">Resent Post: 50</h6>

                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Archive(<?= $blogarchiveCount ?>)</h4>
                    </div>
                    <div class="card-body suggested-block">
                        <?php foreach ($blogarchive as $arc): ?>
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <div class=" mr-50">
                                    <a href="<?= route('siteblogshow', $arc->id) ?>">
                                        <img src="<?= asset('storage/' . $arc->image) ?>" alt="avtar img holder" height="60" width="60">
                                    </a> 
                                </div>
                                <div class="user-page-info">
                                    <h6 class="mb-0"><a href="<?= route('siteblogshow', $arc->id) ?>"><?= $arc->title ?></a></h6>

                                    <span class="font-small-2"><?= $arc->date ?></span>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blogs(<?= $blogunarchiveCount ?>)</h4>
                    </div>
                    <div class="card-body suggested-block">
                        <?php foreach ($blogunarchive as $unarc): ?>
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <div class=" mr-50">
                                    <a href="<?= route('siteblogshow', $unarc->id) ?>">
                                        <img src="<?= asset('storage/' . $unarc->image) ?>" alt="avtar img holder" height="60" width="60">
                                    </a> 
                                </div>
                                <div class="user-page-info">
                                    <h6 class="mb-0"><a href="<?= route('siteblogshow', $unarc->id) ?>"><?= $unarc->title ?></a></h6>
                                    <span class="font-small-2"><?= $unarc->date ?></span>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <?php foreach ($blogs as $blog): ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <div class="avatar mr-1">
                                    <a href="<?= route('siteblogshow', $blog->id) ?>">
                                        <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" alt="avtar img holder" height="45" width="45">
                                    </a>
                                </div>
                                <div class="user-page-info">
                                    <a href="<?= route('siteblogshow', $blog->id) ?>">
                                        <p class="mb-0"><?= $blog->title ?></p>
                                    </a>
                                    <span class="font-small-2"><?= $blog->date ?></span>
                                </div>

                                <?php if ($blog->is_archive == 0): ?>
                                    <div class="ml-auto user-like text-danger"><a href="<?= route('addtoArchive', $blog->id) ?>" class="btn btn-sm btn-primary">Add To Archive</a></div>
                                <?php else: ?>
                                    <div class="ml-auto user-like text-danger"><a href="<?= route('removetoArchive', $blog->id) ?>" class="btn btn-sm btn-danger">Remove From Archive</a></div>
                                <?php endif; ?>

                            </div>
                            <div class="user-page-info ">

                                <span class="font-small-2">Post by: <?= $blog->user->name ?></span>
                            </div>
                            <p><?= $blog->body ?><code id="headingCollapse1" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">

                                    Read More

                                </code>
                            <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse" style="">
                                <?= $blog->content ?>
                            </div>

                            </p>

                            <a href="<?= route('siteblogshow', $blog->id) ?>">
                                <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('storage/'.$blog->image) }}" alt="avtar img holder">
                            </a>
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
                            <fieldset class="form-group">
                                <input type="text" id="roundText" class="form-control round" placeholder="ADD Comment">
                            </fieldset>
                            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                                    <h6 class="mb-0">Hello</h6>
                                    <span class="font-small-2">word</span>
                                </div>

                            </div>

                            <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Polls</h4>
                    </div>
                    <div class="card-body">
                        <h6>Who is the best actor in Marvel Cinematic Universe?</h6>
                        <div class="polls-info mt-1">
                            <div class="d-flex justify-content-between">
                                <div class="vs-radio-con vs-radio-primary">
                                    <input type="radio" name="vueradio" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">RDJ</span>
                                </div>
                                <div class="text-right">58%</div>
                            </div>
                            <div class="progress progress-bar-primary my-50">
                                <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="58" aria-valuemax="100"
                                     style="width:58%"></div>
                            </div>
                            <ul class="list-unstyled users-list d-flex">
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Tonia Seabold" class="avatar pull-up ml-0">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Carissa Dolle" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Kelle Herrick" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Len Bregantini" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="John Doe" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Tonia Seabold" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Dirk Fornili" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                            </ul>
                        </div>
                        <div class="polls-info mt-1">
                            <div class="d-flex justify-content-between">
                                <div class="vs-radio-con vs-radio-primary">
                                    <input type="radio" name="vueradio" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">Chris Hemswort</span>
                                </div>
                                <div class="text-right">16%</div>
                            </div>
                            <div class="progress progress-bar-primary my-50">
                                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100"
                                     style="width:16%"></div>
                            </div>
                            <ul class="list-unstyled users-list d-flex">
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Liliana Pecor" class="avatar pull-up ml-0">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Kasandra NaleVanko" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                            </ul>
                        </div>
                        <div class="polls-info mt-1">
                            <div class="d-flex justify-content-between">
                                <div class="vs-radio-con vs-radio-primary">
                                    <input type="radio" name="vueradio" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">Mark Ruffalo</span>
                                </div>
                                <div class="text-right">8%</div>
                            </div>
                            <div class="progress progress-bar-primary my-50">
                                <div class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="8" aria-valuemax="100"
                                     style="width:8%"></div>
                            </div>
                            <ul class="list-unstyled users-list d-flex">
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Lorelei Lacsamana" class="avatar pull-up ml-0">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                            </ul>
                        </div>
                        <div class="polls-info mt-1">
                            <div class="d-flex justify-content-between">
                                <div class="vs-radio-con vs-radio-primary">
                                    <input type="radio" name="vueradio" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">Chris Evans</span>
                                </div>
                                <div class="text-right">16%</div>
                            </div>
                            <div class="progress progress-bar-primary my-50">
                                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100"
                                     style="width:16%"></div>
                            </div>
                            <ul class="list-unstyled users-list d-flex">
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="JeanieBulgrin" class="avatar pull-up ml-0">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                                    data-original-title="Graig Muckey" class="avatar pull-up">
                                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Avatar" height="30" width="30">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button type="button" class="btn btn-primary block-element mb-1">Load More</button>
            </div>
        </div>
    </section>
</div>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/user-profile.js')) }}"></script>
@endsection
