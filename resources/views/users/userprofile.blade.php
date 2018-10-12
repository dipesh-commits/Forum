@extends('layouts.master')

@section('content')

<!--PROFILE DESCRIPTION-->

  <div class="row col-md-12">
  <div class="col-md-4">
      <div class="panel panel-success"></div>
      <div class="panel-body">
        <img src="/img/{{ Auth::user()->profile_img }}" style="max-height:250px; max-width:250px; border:5px solid #fff;border-radius:100%; box-shadow: 0 2px 2px rgba(0 0 0 0.3);"/><br>
        <i class="fa fa-edit"><a href="javascript:void()" onclick="disp_edit()"><strong>Edit your profile</strong></a></i>
        <i class="fa fa-camera pull-right"><a href="javascript:void()" onclick="disp_qa()"><strong>Change Profile Picture</strong></a></i>


        <form action="/uploadPhoto" method="post" id="form_d" class="profile_form" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="file" name="pic" class="form-control">
          <button class="btn btn-success btn-md form-control">Change photo</button>
        </form>

        <form action="/edit" method="post" id="edit_profile" class="edit_prof">
          {{ csrf_field() }}
          <label for="hometown">Hometown:</label>
          <input type="text" name="hometown" class="form-control" id="education">

          <label for="country">Country:</label>
          <input type="text" name="country" class="form-control" id="education">

          <label for="education">Education:</label>
          <input type="text" name="education" id="education" class="form-control">

          <label for="work">Worked at:</label>
          <input type="text" name="work" class="form-control" id="education">

          <button class="btn btn-success form-control" type="submit">Submit</button>




        </form>

        @if(session()->has('msg'))
        <div class="alert alert-danger">
          {{ session()->get('msg') }}
        </div>
        @endif



        <h2 class="alert alert-success">{{ $user->firstname}}&nbsp{{$user->lastname }}</h2>
        <h3>&nbsp&nbsp&nbspLives in {{ $user->profile->hometown}},{{$user->profile->country}}</h3>
        <h3>&nbsp&nbsp&nbspStudies at {{ $user->profile->education }}</h3>
        <h3>&nbsp&nbsp&nbspWorks at {{ $user->profile->worked_at }}</h3>
        <h3>&nbsp&nbspJoin on: {{ $user->created_at->diffForHumans() }}</h3>
      </div>
      <div class="panel-footer" style="margin-left:30%; margin-right:50%; position:relative;">
        <button class="btn btn-primary btn-lg text-center" type="submit">Follow</button>
      </div>
    </div>

    <div class="col-md-8">
      <h2>This is the profile contents</h2>
  </div>
</div>

<hr>




<!--CONTENTS-->

<div class="container">
  <div class="col">
  <!--  <div class="col-md-3">
    <div class="card">

      <div class="card-header">Photos</div>
      <div class="card-body">
      </div>
    </div>
  </div>-->

@foreach($user->post as $post)

<div class="row col-md-5 col-md-offset-3">

  <div class="card bg-danger">
    <div class="card-header">
      <span><strong>{{ $user->firstname}}&nbsp{{ $user->lastname}}</strong></span>

    <span class="pull-right">
      {{ $post->created_at->diffForHumans()}}
    </span><br>

                <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#exampleModalCenter" >
            Edit post
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

    </div>
    <br>
    <hr>
    <div class="card-body">
      <div class="card-items">{{ $post->title }}:</div><br>
      <div class="card-items">{{ $post->post_content }}</div>

    </div>
    <div class="card-footer clearfix" style="background-color:white">
      <i class="fa fa-angellist"></i>

      <a href="#" class="pull-right">Comment</a>
    </div>

  </div>
  <br><br>
  </div>


    @endforeach




  <div class="card">
    <div class="col-md-2">
      <div class="card-body">AD here</div>
    </div>
  </div>


</div>
</div>





@endsection
