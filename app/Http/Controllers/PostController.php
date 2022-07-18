<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //~ view post (problem)
    public function show($slug)
    {
        $post = Post::findOrFail($slug);
        return response()->json(
            [ "response_code" => 200,
            "message" => "Success",
            "post" => $post],
        );
    }
 
    //~ Store data in post table
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->save();
        return response()->json(
            ["result" => "ok"], 201
        );
    }

    //~ Update data
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->save();
 
        return response()->json(["result" => "ok"], 201);       
    }

    //~ delete data
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json(["result" => "ok"], 200);
    }

}
