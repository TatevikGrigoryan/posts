<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class PostController extends Controller
{

    public function index(): View
    {
        $posts = Post::getAll();
        $data = [];
        foreach ($posts as $post) {
            $data[] = [
                'id' => $post->id,
                'title' => $post->title,
                'description' => $post->description,
                'user' => $post->user,
                'created_at' => Carbon::parse($post->created_at)->format('Y-m-d'),
            ];
        }

        return view('welcome', compact('data'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    function store(Request $request)
    {
        Post::createPost($request);

        return redirect()->route('posts');
    }

    function show($post_id):View
    {
        $data = Post::getPostById($post_id)->toArray();

        return view('posts.post', compact('data'));
    }
}
