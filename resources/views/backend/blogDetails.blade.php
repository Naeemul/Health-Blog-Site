@extends('backend.master')

@section('title')
    Blog Details
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <h1>{{ $blog->title }}</h1>
                    <img src="{{ asset("/$blog->image") }}">
                    <p>Description: {{ $blog->description }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
