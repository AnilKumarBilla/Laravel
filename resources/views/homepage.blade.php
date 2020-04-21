<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome to Homepage</h1>

    <ol>
      <li>Homepage</li>
      <li>About us page</li>
      <li>Contact us page</li>
    </ol>


    <ul>
      <li> <a href=" {{ route('index') }} ">Index</a> </li>
      <li> <a href=" {{ route('home') }} ">Homepage</a> </li>
      <li> <a href=" {{ route('contact') }} ">Contact</a> </li>
      <li> <a href="{{ route('about') }}">About Us</a> </li>
    </ul>

  </body>
</html>
