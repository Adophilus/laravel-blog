<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
  public function home()
  {
    return view('pages.home')->with('posts', Post::all());
  }
}
