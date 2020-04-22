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

        $blog = new Blog();

        $blog->title = $request->title;

        $blog->content = $request->content;

        $blog->save();

        #return redirect('/blogs');

        return redirect(route('blogs'));

    }
}
