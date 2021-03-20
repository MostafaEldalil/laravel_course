@extends('layouts.app')

@section('title')Show Page @endsection

@section('content')
<div class="card">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <h5 class="card-title">Title:</h5>
      <p class="card-text">{{ $post['title'] }}</p>
      <h5 class="card-title">Description:</h5>
      <p class="card-text">{{ $post['description'] }}</p>
    </div>
</div>
<br/>
<div class="card">
    <div class="card-header">
      Post Creator Info
    </div>
    <div class="card-body">
      <h5 class="card-title" style="display: inline-block;">Name:</h5>
      <p class="card-text" style="display: inline-block;">{{ $post['posted_by'] }}</p>
      <br/>
      <h5 class="card-title" style="display: inline-block;">Email: </h5>
      <p class="card-text" style="display: inline-block;">{{ $post['email'] }}</p>
      <br/>
      <h5 class="card-title" style="display: inline-block;">Created At: </h5>
      <p class="card-text" style="display: inline-block;">{{ $post['created_at'] }}</p>
    </div>
</div>
@endsection