@extends('layouts.app')

@section('component')

  <div class="container">
      <div class="row justify-content-center p-4">
        <h1 class="display-4">Blogs</h1>
      </div>
  </div>

  <div class="container my-4">
    <form action="/createblog" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Title of the Blog</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Content of the Blog</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="content">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="container">
    @include('list')
  </div>

@endsection
