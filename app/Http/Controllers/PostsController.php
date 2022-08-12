<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Evry route here is procted by the auth
    //This directs you to the loging page if one haven't logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view("posts/create");
    }

    public function store(){
        $data = request()->validate([
            'title' => ['required', 'string', 'max:255'],
            "imageUrl" => ['required', "image"],
        ]);

        // dd(request('imageUrl')->store('uploads', 'public'));
        $extractedImage = request('imageUrl')->store('uploads', 'public');
        // Saving data destructured way
        auth()->user()->posts()->create([
            'title'=>$data['title'],
            'imageUrl'=>$extractedImage,
        ]);

        // \App\Models\Post::create($data);, saves data if no property is to modified

        // dd(request()->all());

        // After saving redirect it to profile
         
        return redirect("/profile/" . auth()->user()->id);
    }

//show a single post
//takes in a post
    public function show(\App\Models\Post $post){
        // dd($post);
        //Route model binding, better way of fetching
        //the passed parameter variable must be the same with the the oneon the routing.
        //\App\Models\Post $post, fetches the post automatically, also takes the place of findOrFail
        return view("posts/show_post", compact('post'));
    }
}
