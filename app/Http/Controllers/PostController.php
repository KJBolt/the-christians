<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::latest()->paginate(4);
        return view('teachings',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image'=>'required|image',
            'body' => 'required',
        ]);

        $title = $request->input('title');
        if(Post::latest()->first() !== null){
            $postId = Post::latest()->first()->id + 1;
        } else {
            $postId = 1;
        }
        $slug = Str::slug($title, '-') .'-'.$postId;
        $image ='storage/' . $request->file('image')->store('postImages','public');
        $body = $request->input('body');
        $user_id = auth()->user()->id;

        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->imagePath = $image;
        $post->body = $body;
        $post->user_id = $user_id;

        $post->save();
        return redirect()->back()->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $filterPost = Post::where('slug', $post->slug)->first();
        return view('single-post', compact('filterPost'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(auth()->user()->id !== $post->user->id){
            return redirect()->back()->with("error", "You must log in to edit post");
            // abort(403);
        }
        return view('dashboard/update-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'image'=>'required|image',
            'body' => 'required',
        ]);

        $title = $request->input('title');
        if(Post::latest()->first() !== null){
            $postId = Post::latest()->first()->id + 1;
        } else {
            $postId = 1;
        }
        $slug = Str::slug($title, '-') .'-'.$postId;
        $image ='storage/' . $request->file('image')->store('postImages','public');
        $body = $request->input('body');
        $user_id = auth()->user()->id;

        $post->title = $title;
        $post->slug = $slug;
        $post->imagePath = $image;
        $post->body = $body;
        $post->user_id = $user_id;
        $post->save();
        return redirect('teachings')->with('message', "Post updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('teachings')->with('message', "Post deleted successfully");
    }

    public function search (Request $request){
        $query = $request->input('search');

        $posts = Post::where('title','like', '%'.$query.'%')
                            ->orWhere('body','like', '%'.$query.'%')->paginate(4);
        return view('search',compact('posts'));
    }
}
