<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $name = request('name');

      $location = request('location');

      return view('welcome' , compact('name','location'));
    }

    public function home()
    {
      return view('homepage');
    }

    public function contact()
    {
      return view('contact');
    }

    public function about()
    {
      return view('about');
    }

    public function add($num1, $num2)
    {
       return "Addition of ".$num1." + ".$num2." = ".($num1 + $num2);
    }

}
