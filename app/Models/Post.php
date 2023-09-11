<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public static function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        $posts = Post::with('user')->get();

        return $posts;
    }

    public static function createPost($request)
    {
        return Post::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);
    }

    public static function getPostById(string $id)
    {
        $post = Post::with('user')->find($id);

        return $post;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
