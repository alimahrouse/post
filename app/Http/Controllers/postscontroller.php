<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class postscontroller extends Controller
{
    public function index()
    {
        $data=post::orderBy('id','desc') ->paginate(5);
        $count=post::count();
        return view('posts.index',compact('data','count'));
    }
    public function show($id)
    {
        $p=post::find($id);
        return view('posts.show',compact('p'));
    }
    public function create()
    {
        return view('posts.create');

 
    }
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required|max:100',
            'body'=>'required|max:500',
            'coverimage'=>'image|mimes:jpeg,jpg,png,bmp|max:1999'
        ]

        );
        if ($request->hasFile('coverimage')) {
            $file=$request->file('coverimage');
            $ext=$file->getClientOriginalExtension();
            $filename="coverimage_" . time() .".". $ext;
            $path=$file->storeAs('public/coverimages',$filename);
            
        }
        
        $post=new post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->image=$filename;
        $post->user_id=auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('status','post saved succesfuly');
    }
    public function edite($id)
    {
       $post= post::find($id);
       if (auth()->user()->id!==$post->user_id) {
           # code...
           return redirect('/posts')->with('status','you have not privilage to update');
       } else {
        return view('posts.edite',compact('post'));
       }
       
      
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required|max:100',
            'body'=>'required|max:500',
            'coverimage'=>'image|mimes:jpeg,jpg,png,bmp|max:1999'
        ]

        );
        if ($request->hasFile('coverimage')) {
            $file=$request->file('coverimage');
            $ext=$file->getClientOriginalExtension();
            $filename="coverimage_" . time() .".". $ext;
            $path=$file->storeAs('public/coverimages',$filename);
            
        }
        $post=post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->image=$filename;

        $post->save();
        return redirect('/posts')->with('status','post updated succesfuly');

    }
    public function destroy($id)
    {

        $post=post::find($id);
        $post->delete();
        return redirect('/posts')->with('status','post deleted succesfuly');
    }
}
