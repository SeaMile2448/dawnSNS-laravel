@extends('layouts.logout')

@section('title', 'ユーザー登録')

@section('content')

@include('error_card_list')

<form method="POST" action="{{route('register')}}">
@csrf
<div class="name-form">
  <label for="name">UserName</label>
  <input type="text" id="username" name="username" required value={{old('username')}}>
</div>
<div class="mail-form">
  <label for="name">MailAdress</label>
  <input type="text" id="mail" name="mail" required value={{old('mail')}}>
</div>
<div class="password-form">
  <label for="name">Password</label>
  <input type="password" id="password" name="password" required>
</div>
<div class="password-confirm-form">
  <label for="name">PasswordConfirm</label>
  <input type="password" id="password_confirmation" name="password_confirmation" required>
</div>
<button type="submit">REGISTER</button>
</form>
<p><a href="{{route('login')}}">ログイン画面へ戻る</a></p>

<!-- {!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input']) }}

{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}

{{ Form::label('パスワード確認') }}
{{ Form::text('password-confirm',null,['class' => 'input']) }}

{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!} -->


@endsection
