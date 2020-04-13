@extends('Dashborad/layouts/contentLayoutMaster')

@section('title', 'Blog Review')

@section('page-style')
{{-- Page Css files --}}
<?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
    <link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-ecommerce.css')) }}">
<?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
    <link rel="stylesheet" href="{{ asset('css-rtl/pages/dashboard-ecommerce.css') }}">
<?php endif; ?>
<script>
    window.Laravel = <?= json_encode(['csrfToken' => csrf_token()]); ?>

</script>
<?php if (!auth()->guest()): ?>
    <script>
        window.Laravel.removeblog = '<?= route('destroyblog', ':id') ?>';
    </script>
<?php endif; ?>


@endsection
@section('content')
<section id="card-caps">
    <div class="row my-3" id="blogs">
        <?php if (!empty($blogs) && $blogs->count()): ?>
            <?php foreach ($blogs as $blog): ?>
                <div class="col-xl-6 col-md-6 col-sm-12" id="blogItem">
                    <div class="card">
                        <div class="card-content">
                            <span id="blogId" style="display: none"><?= $blog->id ?></span>
                            <a href="<?= route('showblog', $blog->id) ?>">
                                <img class="card-img-top img-fluid" src="<?= asset('storage/' . $blog->image) ?>" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <div class="card-btns d-flex justify-content-between">
                                    <div class="d-flex justify-content-start mt-2">
                                        <a href="<?= route('showblog', $blog->id) ?>"><h4 class="card-title"><?= $blog->title ?></h4></a>
                                    </div>
                                    <div class="d-flex justify-content-start mt-2">
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle waves-effect " data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -140px, 0px);">
                                                    <a class="dropdown-item" href="<?= route('editblog', $blog->id) ?>">{{__('main.Edit')}}</a>
                                                    <a class="dropdown-item" id="blogdelete" href="javascript:void(0)">{{__('main.Delete')}}</a>
                                                    <a class="dropdown-item" href="<?= route('showblog', $blog->id) ?>">{{__('main.Show')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text"><?= $blog->body ?></p>
                                <div class="card-btns d-flex justify-content-between">
                                    <div class="d-flex justify-content-start mt-2">
                                        <div class="icon-like mr-2">
                                            <i class="feather icon-thumbs-up text-success font-medium-5 align-middle"></i>
                                            <span>368</span>
                                        </div>
                                        <div class="icon-comment mr-2">
                                            <i class="feather icon-message-square font-medium-5 align-middle text-primary"></i>
                                            <span>341</span>
                                        </div>
                                        <div class="icon-dislike">
                                            <i class="feather icon-thumbs-down font-medium-5 align-middle text-danger"></i>
                                            <span>53</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mt-2">
                                        <p class="card-text"><small class="text-muted"><?= $blog->date ?></small></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-success justify-content-center mt-2">
            <li class="page-item prev">
                <a class="page-link" href="#" aria-label="Previous"></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item active"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item next">
                <a class="page-link" href="#" aria-label="Next"></a>
            </li>
        </ul>
    </nav>

</section>
<!-- Admin and Video Section Starts -->

<!-- Timeline Starts -->

<!-- Timeline Ends -->
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/app-chat.js')) }}"></script>
@endsection
