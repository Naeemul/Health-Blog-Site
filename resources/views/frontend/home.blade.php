@extends('frontend.master')

@section('title')
    Blog-Site
@endsection

@section('content')
    <!-- Search form -->
    <div class="row tm-row">
        <div class="col-12">
            <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                <button class="tm-search-button" type="submit">
                    <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="row tm-row">
        @foreach($blogs as $blog)
        <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            <a href="#" class="effect-lily tm-post-link tm-pt-20">
                <div class="tm-post-link-inner">
                    <img src="{{ asset("/$blog->image") }}" alt="Image" class="img-fluid">
                </div>
                <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$blog->title}}</h2>
            </a>
            <p class="tm-pt-30">{{$blog->description}}</p>
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary">Visual . Artworks</span>
                <span class="tm-color-primary">{{$blog->created_at}}</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span>96 comments</span>
                <span>by Admin Sam</span>
            </div>
        </article>
        @endforeach
    </div>
    <div class="row tm-row tm-mt-100 tm-mb-75">
        <div class="tm-prev-next-wrapper">
            <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
            <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
        </div>
        <div class="tm-paging-wrapper">
            <span class="d-inline-block mr-3">Page</span>
            <nav class="tm-paging-nav d-inline-block">
                <ul>
                    <li class="tm-paging-item active">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                    </li>
                    <li class="tm-paging-item">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                    </li>
                    <li class="tm-paging-item">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                    </li>
                    <li class="tm-paging-item">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
