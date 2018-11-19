<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Profile;
use App\Event;
use Auth;

class SearchController extends Controller
{
    public function search(Request $request){
      $query=$request->search;


      $users=User::where('firstname','LIKE','%'.$query.'%')
      ->orWhere('lastname','LIKE','%'.$query.'%')
      ->orWhere('email','LIKE','%'.$query.'%')
      ->orWhere('firstname','LIKE','%'.$query.'%')

      ->get();



      $posts=Post::where('title','LIKE','%'.$query.'%')
      ->orWhere('post_content','LIKE','%'.$query.'%')
      ->get();

      $profiles=Profile::where('hometown','LIKE','%'.$query.'%')
      ->orWhere('country','LIKE','%'.$query.'%')
      ->orWhere('education','LIKE','%'.$query.'%')
      ->orWhere('worked_at','LIKE','%'.$query.'%')
      ->get();



      return view('search',compact('users','posts','profiles','query'));

    }

    public function event(){
      $allevents=Event::all();

      return view('event.events',compact('allevents'));
    }

    public function create_event(){
      return view('event.create-events');
    }

    public function creating_event(Request $request){

        $events=new Event();
              $events->user_id=Auth::user()->id;
              $file=$request->file('event_photo');

              $filename=$file->getClientOriginalName();
              $file->move(public_path('event_pictures'),$filename);



        $events->event_photo=$filename;
        $events->event_name= $request->event_name;
        $events->event_city=$request->event_city;
        $events->event_state=$request->event_state;

        $events->event_place=$request->event_place;
        $events->starting_date=$request->starting_date;
        $events->ending_date=$request->ending_date;
        $events->event_description=$request->event_description;
        $events->event_keywords=$request->event_keywords;

        $events->save();

        return back()->with('msg','Your event has been posted successfully');

    }





}
