@extends('layouts.master')

@section('content')
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

  <div class="col-md-7">
    <div class="panel">
      <div class="panel-header">
        Notification
      </div>
      <div class="panel-body">
        @foreach($notifications as $notification)
        <ul>

          <li>
            <p><strong>{{ $notification->notification_post }} by <a href="/profile/{{ $notification->slave_id}}/{{ $notification->firstname}}.{{ $notification->lastname }}">{{ $notification->firstname}} {{ $notification->lastname}}</a></strong></p>
            </li>
      </ul>
      @endforeach
      </div>

</div>

@endsection
