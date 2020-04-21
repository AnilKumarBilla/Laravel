<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h2>Contact us page</h2>
    </center>
    <ol>
      <li>COntact us page</li>
      <li>Homepage</li>
      <li>ABout Us page</li>
    </ol>

    <ul>
      <li> <a href=" {{ route('index') }} ">Index</a> </li>
      <li> <a href=" {{ route('home') }} ">Homepage</a> </li>
      <li> <a href=" {{ route('contact') }} ">Contact</a> </li>
      <li> <a href="{{ route('about') }}">About Us</a> </li>
    </ul>

  </body>
</html>
