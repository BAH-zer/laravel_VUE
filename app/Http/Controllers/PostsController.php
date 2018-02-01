<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Test_counter;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
// app/Http/Controllers/PostsController.php
// remember to use the Post model

	/** * Display a paginated list of posts. * * @return Response */
	public function index()
	{
		$posts = Post::paginate(5);
		$test_counters = Test_counter::all()->first();
		return view('posts.index', ['posts' =>$posts, 'test_counters'=>$test_counters]);
	}

	/** * Favorite a particular post * * @param Post $post * @return Response */
	public function favoritePost(Post $post)
	{
		Auth::user()->favorites()->attach($post->id);
		return back();
	}

	/** * Unfavorite a particular post * * @param Post $post * @return Response */
	public function unFavoritePost(Post $post)
	{
		Auth::user()->favorites()->detach($post->id);
		return back();
	}
}
