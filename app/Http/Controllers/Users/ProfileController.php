<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;

class ProfileController extends Controller
{
    public function profile($id){
      $user=User::whereid($id)->first();
      $posts=Post::whereuser_id($user->id);


      return view('users.userprofile',compact('user','posts'));
    }
}
