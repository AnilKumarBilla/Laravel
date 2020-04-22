@extends('layouts.app')

@section('component')

  <div class="container">
      <div class="row justify-content-center p-4">
        <h1 class="display-4">Welcome to Instacks</h1>
      </div>
  </div>

  <div class="container">
      <div class="row">
        <!-- Display all the records here -->

        @foreach($blogs as $blog)
          <ul>
            <li>{{ $blog->title }}</li>
            <li>{{ $blog->content }}</li>
          </ul>
        @endforeach

      </div>
  </div>

  <div class="container">
    @include('list')
  </div>

@endsection
