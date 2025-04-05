<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    
    public function store(Request $request){
     
        $validated =  $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:400',
            'deadline' => 'nullable|date',
            
        ]);
        
        $validated['user_id']=auth()->id();

        $post = Post::create($validated);
        $request->session()->flash('message','保存しました');
        return back();
    }
    public function index(){
        $posts=Post::all();
        
        return view('index',compact('posts'));
    }

    public function show(Post $post){
        return view('show',compact('post'));
    }
    

    public function edit(Post $post){
        return view('edit',compact('post'));
    }


    public function update(Request $request, Post $post){
        $validated =  $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:400',
            'deadline' => 'nullable|date',
        ]);

        $validated['user_id']=auth()->id();



        $post->update($validated);

        $request->session()->flash('message','更新しました');
        return back();
    }

    public function destroy(Request $request,Post $post){

        

        $post->delete();
        //sessionは一時保存
        $request->session()->flash('message','削除しました');
        return redirect()->route('index');
    }
}
