@extends('backend.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset("/$blog->image") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{{$blog->description}}</p>
                                <a href="{{ route('blog.details', ['id' => $blog->id]) }}" class="btn btn-primary">More Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
