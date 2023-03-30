@extends('backend.master')

@section('title')
    Update Blog
@endsection

@section('content')
    <section class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <form action="{{ route('update.blog.complete', ['id' => $blog->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label text-primary-emphasis fs-4">Title*</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ $blog->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control" type="text" name="description" id="description" value="{{ $blog->description }}" required>
                            {{--                            <textarea class="form-control " type="text" name="description" id="description" rows="8" value="{{ $blog->description }}" required></textarea>--}}
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label> <br>
                            <img src="{{ asset("/$blog->image") }}"  width="300px" height="200px">
                            <input class="form-control" type="file" name="image" id="image" >
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
