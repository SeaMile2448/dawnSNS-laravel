@extends('layouts.login')

@section('title', '記事一覧')

@section('content')
<form  method="POST" action="{{route('articles.store')}}">
    @csrf
    <input type="text" name="post" required placeholder="何をつぶやこうかな・・・">
    <input type="image" src="{{asset('/images/post.png')}}">
</form>

<div class="container">
    @foreach ($articles as $article)
    <div class="user_image">
        <img src="{{asset('/images/'.$article->images)}}" alt="">
    </div>
    <div class="username">
        {{$article->user->username}}
    </div>
    <div class="time">
        {{ $article->created_at->format('Y/m/d H:i')}}
    </div>
    <div class="post">
        {{$article->post}}
    </div>

    <!-- 記事更新機能 -->
    <div class="update_logo">
            <input id="openModal" data-target="modalUpdate{{$article->id}}" type="image" src="{{asset('images/edit.png')}}">
    </div>

    <!-- 記事更新モーダル -->
    <section id="modalArea" class="modalArea">
        <div id="modalUpdate{{$article->id}}" class="modalUpdate">
        <form method="POST" action="{{route('articles.update',['article' => $article->id])}}">
            @csrf
            @method('PATCH')
            <input type="text" name="post" value={{$article->post}}>
            <input type="image" src="{{asset('images/edit.png')}}">
        </form>
        </div>
    </section>

    <!-- 記事削除機能 -->
    <div class="delete-logo">
        <form method="POST" action="{{route('articles.destroy',['article' => $article->id])}}">
            @csrf
            @method('DELETE')
            <input type="image" src="{{asset('images/trash_h.png')}}" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">
        </form>
    </div>

    @endforeach

</div>


@endsection
