@extends('admin.master')

@section('title')
  View Post
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="row">
    <div class="col-sm-12 mx-auto">
      <br>
      <table class="table table-bordered table-hover text-center">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($postData as $values)
            <tr>
              <td>{{ $values->title }}</td>
              <td>{{ $values->description }}</td>
              <td>{{ $values->postDate }}</td>
              <td>{{ $values->image }}</td>
              <td>
                <a class="btn btn-secondary" href="{{ route('updatePost', [$values->id]) }}">Update</a>
                <a class="btn btn-secondary" href="{{ route('deletePost', [$values->id]) }}">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <br />
</div>
@endsection