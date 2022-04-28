@extends('layouts.login')

@section('title', 'ユーザー検索')

@section('content')

<form method="POST" action="{{route('search')}}">
  @csrf
  <input type="text" name="keyword" placeholder="ユーザー名">
  <input type="submit" value="検索">
</form>


<div class="container">
  <table class="users_search">
    @foreach ($users as $user)
    <tr>
      <td><img src="{{asset('/images/'.$user->images)}}" alt=""></td>
      <td>{{$user->username}}</td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
