@extends('layout.master')
@section('title')
  post
@endsection
@section('content')
<div class="row">
    <div class="col-md-9 offset-md-2">
        <h3>edite new post</h3>
        <hr>
    <form action="{{'/posts/'.$post->id}}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
            <textarea name="body" id="" cols="30" rows="4" class="form-control">{{$post->body}}</textarea>
            </div>
            <div class="form-group">
                 
            <input type="file" class="form-control-file" id="cowerimage" name="coverimage" >
              </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
    </div>
</div>
@endsection