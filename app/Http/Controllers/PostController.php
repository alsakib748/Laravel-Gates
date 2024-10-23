<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $posts = Post::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();

        return view('post.all_post',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // dd($id);

        $post = Post::findOrFail($id);

        // dd($post);

        $targetId = $post->user_id;

        Gate::authorize('post-update', $targetId);

        $post = Post::findOrFail($id);

        return response()->json($post);

        // return view('post.post_edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $user_id = Post::findOrFail($id)->user_id;

        Gate::authorize('post-delete',$user_id);

        $post = Post::findOrFail($id);

        return response()->json($post);
    }
}
