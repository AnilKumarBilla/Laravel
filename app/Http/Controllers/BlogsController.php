<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogsController extends Controller
{

    public function blogs()
    {
       return view('blogs');
    }

    public function createBlog(Request $request)
    {

        $validateData = $request->validate([
          'title' => 'required|min:5|max:100',
          'content' => 'required|min:10|max:255'
        ]);

        Blog::create($validateData);


        // $blog = new Blog();
        //
        // $blog->title = $request->title;
        //
        // $blog->content = $request->content;
        //
        // $blog->save();

        #return redirect('/blogs');

        return redirect(route('blogs'))->with('blog','Blog Created Successfully');

    }

    public function viewBlogs()
    {
      // Getting all blogs
        // return Blog::all();

        //return Blog::get();

      // Getting first blog

      // return Blog::first();

      // Getting last record

      // return Blog::latest()->first();

      // Getting the data in alphabetical order

      // return Blog::orderBy('title', 'asc')->get();
      // return Blog::orderBy('title', 'desc')->get();

      // Take only few records

      // return Blog::get()->take(3);

      // Sending data to the views.

      $blogs = Blog::get();

      return view('viewBlogs', compact('blogs'));





    }
}
