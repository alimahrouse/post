@extends('layout.master')
@section('title')
  post
@endsection
@section('content')
<h1>show all posts</h1>
<hr>
<div class="row">

<div class="col-md-9">
   <h2> posts</h2>
    <div class="row">
    @foreach ($data as $item)
    
        <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                {{$item['title']}}
            </div>
            <div class="card-body">
            <img src="{{asset('storage/coverimages/'.$item->image)}}" alt="" height="200">
              <h5 class="card-title">{{$item['title']}}</h5>
              <p class="card-text"> {{$item['body']}}</p>
              <a href={{'/posts/'.$item->id}} class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      
       
           
        </div>
   
   
@endforeach
</div>
</div>
<div class="col-md-3">
   <h2> counts</h2>
    
     <h3>   {{$count}}</h3>
   


</div>

</div>
<div class="row">
<div class="col-md-12 d-flex justify-content-center">
  {{$data->links()}}
</div>
</div>
   
@endsection