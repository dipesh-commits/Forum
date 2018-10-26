<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TopicController extends Controller
{
    public function education(){
      $edu_posts=Post::wheretitle('Education')->get();
      return view('topics.education',compact('edu_posts'));
    }

    public function health(){
      $edu_posts=Post::wheretitle('Health')->get();
      return view('topics.health',compact('edu_posts'));
    }

    public function politics(){
      $edu_posts=Post::wheretitle('Politics')->get();
      return view('topics.politics',compact('edu_posts'));
    }

    public function musicandentertainment(){
      $edu_posts=Post::wheretitle('musicandentertainment')->get();
      return view('topics.music',compact('edu_posts'));
    }

    public function technology(){
      $edu_posts=Post::wheretitle('technology')->get();
      return view('topics.technology',compact('edu_posts'));
    }

    public function socio_economic(){
      $edu_posts=Post::wheretitle('socio-economic')->get();
      return view('topics.socio_economic',compact('edu_posts'));
    }

    public function country(){
      $edu_posts=Post::wheretitle('Country')->get();
      return view('topics.country',compact('edu_posts'));
    }
}
