@extends('frontend.master')

@section('title')
    Blog-Details
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <h1 class="tm-color-primary">{{ $blog->title }}</h1>
                    <img src="{{ asset("/$blog->image") }}">
                    <p> <u>Description</u>: {{ $blog->description }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
