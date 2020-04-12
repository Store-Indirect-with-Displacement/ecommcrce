@extends('Dashborad/layouts/contentLayoutMaster')

@section('title', 'Blog Review')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-ecommerce.css')) }}">
@endsection
@section('content')

<section id="card-caps">

    <div class="row my-3">
        <?php foreach ($blogs as $blog): ?>
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="<?= asset('storage/' . $blog->image) ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><?= $blog->title ?></h4>
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
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>
<!-- Admin and Video Section Starts -->

<!-- Timeline Starts -->

<!-- Timeline Ends -->
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/app-chat.js')) }}"></script>
@endsection
