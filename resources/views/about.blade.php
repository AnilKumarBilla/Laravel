@extends('layouts.app')

@section('component')

  <div class="container">
      <div class="row justify-content-center p-4">
        <h1 class="display-4">About Us Page</h1>
      </div>
  </div>

  <div class="container">
      <div class="row">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
  </div>

  <div class="container">
    @include('list')
  </div>

@endsection
