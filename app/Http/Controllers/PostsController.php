<?php

namespace App\Http\Controllers;

use App\Post;

use App\User;

use Auth;

use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //記事一覧表示機能
    public function index()
    {
        $user =Auth::user();

        $articles = Post::all()->sortByDesc('created_at');

        return view('posts.index')->with(['user'=>$user, 'articles'=>$articles]);
    }

    //記事投稿機能
    public function store(PostRequest $request,Post $post)
    {
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->save();
        return redirect()->route('top');
    }

    //記事更新機能
    public function update(PostRequest $request,Post $post, $article)
    {
        $post->find($article)->fill($request->all())->save();
        return redirect()->route('top');
    }

    //記事削除機能
    public function destroy(Post $post, $article)
    {
        $post->find($article)->delete();
        return redirect()->route('top');
    }

}
