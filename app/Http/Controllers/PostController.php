<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function index(){
      $all_contents=Post::all();

      return view('home',compact('all_contents'));
    }

    public function create(){

    }

    public function store(Request $request){

      //1st method
      $posts=new Post();

      $posts->user_id=Auth::user()->id;
      $posts->title=$request->title;
      $posts->post_content=$request->contents;

      $posts->save();

      session()->flash('msg','Thanks for your post');
      return redirect('/home');
      //2nd method
    //  Post::create($request->all());
  }

  public function show($title){
    $show_datas=Post::wheretitle($title);

   return view('topics.education',compact('show_datas'));

}


}
