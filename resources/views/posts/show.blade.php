@extends('layout.master')
@section('title')
  post
@endsection
@section('content')
    
<div class="row mt-2">
    <div class="col-md-9 offset-md-2">
        <div class="card">
            <div class="card-header">
                {{$p['title']}}
            </div>
            <div class="card-body">
                <img src="{{asset('storage/coverimages/'.$p->image)}}" alt="" height="300" >
              <h5 class="card-title">{{$p['title']}}</h5>
              <p class="card-text"> {{$p['body']}}</p>
              <hr>
               <p>{{$p->created_at}}</p>
               @auth
               @if (auth()->user()->id==$p->user_id)
               <a href="{{'/posts/'.$p->id.'/edite'}}" class="btn btn-primary float-left mr-2">edite</a>
           
               <form action="{{route('posts.destroy',['id'=>$p->id])}}" method="post">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger float-left">delete</button>
               </form>
               @endif
               @endauth
               
           
           
            </div>

    </div>
</div>

    @endsection