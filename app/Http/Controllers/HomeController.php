<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $all_contents=DB::table('users')
      ->rightJoin('posts','users.id','posts.user_id')
      ->inRandomOrder()->get();

      $comments=Comment::get();

      $news=News::OrderBy('id','desc')->paginate(2);

        return view('home',compact('all_contents','comments','news'));
    }
}
