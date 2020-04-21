<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>This is a About Us Page</h1>
    </center>
    <ul>
      <li>About us Page</li>
      <li>THis is an unordered list</li>
    </ul>

    <ul>
      <li> <a href=" {{ route('index') }} ">Index</a> </li>
      <li> <a href=" {{ route('home') }} ">Homepage</a> </li>
      <li> <a href=" {{ route('contact') }} ">Contact</a> </li>
      <li> <a href="{{ route('about') }}">About Us</a> </li>
    </ul>

  </body>
</html>
