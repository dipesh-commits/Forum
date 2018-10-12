<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Profile;

class ProfileController extends Controller
{
    public function profile($id){
      $user=User::whereid($id)->first();
      $posts=Post::whereuser_id($user->id);
      $profile=Profile::whereuser_id($user->id);


      return view('users.userprofile',compact('user','posts','profile'));
    }

    public function uploadphoto(Request $request){
      $file=$request->file('pic');
      $filename=$file->getClientOriginalName();

      $user_id=Auth::user()->id;
      $file->move(public_path('/img'),$filename);
      User::whereid($user_id)->update([
        'profile_img'=>$filename,
      ]);
      return back();
    }

    public function edit(Request $request){
      $user_id=Auth::user()->id;
      $datas=Profile::whereuser_id($user_id)->first();





     if($datas===null){
        $user_id=Auth::user()->id;
        Profile::whereuser_id($user_id)->create([
        'user_id'=>Auth::user()->id,
        'hometown'=> $request->hometown,
        'country'=>$request->country,
        'education'=>$request->education,
        'worked_at'=>$request->work,
      ]);

      return redirect()->back()->with('msg','Your profile has been updated');

    }
      else{
        $user_id=Auth::user()->id;
        Profile::whereuser_id($user_id)->update([
          'user_id'=>Auth::user()->id,
          'hometown'=> $request->hometown,
          'country'=>$request->country,
          'education'=>$request->education,
          'worked_at'=>$request->work,
        ]);

          return redirect()->back()->with('msg','Your profile has been updated');
      }




    }

}
