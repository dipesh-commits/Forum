@extends('layouts.master')

@section('content')




<!--left side-->

  <div class="row col-md-12">
      <div class="col-md-2">
        <div class="card">
          <h1>Topics</h1>
        <div class="card-body">
          <ul>
            <a href="/posts/education" class="card-items">Education</a><br>
            <a href="#" class="card-items">Health</a><br>
            <a href="#" class="card-items">Politics</a><br>
            <a href="#" class="card-items">Music and Entertainment</a>

              <ul>
        </div>
      </div>
    </div>

<!--middle side-->
        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading">Let's create a topic</div>

                  <div class="panel-body">

                     <form action="/posts" method="post">

                       {{ csrf_field() }}

                       <div class="form-group">
                       <input class="form-control" type="text" name="title" placeholder="Title" id="title" style="width:100%;height:40px;" required="required"/>
                     </div>

                     <div class="form-group">
                         <textarea class="form-control" name="contents" placeholder="What's going on,{{ Auth::user()->firstname }}?" style="height:100px; width:100%;" required="required"></textarea>
                       </div>
                         <button type="submit" class="btn btn-primary btn-lg pull-right">Let's Discuss</button>
                       </form>
                        </div>
                      </div>

                      @if(session()->has('msg'))
                        <div class="alert alert-warning">
                          {{ session()->get('msg') }}
                        </div>
                      @endif

                    </div>
                <br><br><hr>


<!--right side-->

        <div class="col-md-2">
          <div class="card">
            <div class="card-body">THis is for AD</div>
          </div>
        </div>
      </div>

      <section>

<!--All the contents-->
    @foreach($all_contents as $all_content)
    <div class="row col-md-5 col-md-offset-3">

      <div class="card bg-danger">
        <div class="card-header">
          <span><strong>{{ $all_content->user->firstname }} {{ $all_content->user->lastname }}</strong></span>

        <span class="pull-right">
          {{ $all_content->created_at->diffForHumans()}}
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
                      <h5 class="modal-title" id="exampleModalLongTitle"><strong>Edit post</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form action="" method="post">
                      <div class="form-group">
                    <div class="modal-body">
                      <label for="title">Title:</label>
                        <input class="form-control" name="title" type="text" placeholder="{{ $all_content->title }} " id="title">
                        <br>
                        <label for="contents">Post:</label>
                        <textarea class="form-control" name="contents" id="contents" placeholder="{{ $all_content->post_content }}" style="width:100%;"></textarea>
                    </div>
                  </div>
                  </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <br>
        <hr>
        <div class="card-body">
          <div class="card-items">{{ $all_content->title }}:</div><br>
          <div class="card-items">{{ $all_content->post_content }}</div>

        </div>
        <div class="card-footer clearfix" style="background-color:white">
          <i class="fa fa-angellist"></i>

          <a href="#" class="pull-right">Comment</a>
        </div>

      </div>
      <br><br>
      </div>


      @endforeach
      <section>



@endsection
