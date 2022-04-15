@extends('layouts.logout')

@section('title', 'ログイン')

@section('content')

<p>DAWNSNSへようこそ</p>

@include('error_card_list')

<form method="POST" action="{{route('login')}}">
  @csrf
  <div class="mail-form">
    <label for="mail">MailAdress</label>
    <input type="text" id="mail" name="mail" required value="{{old('mail')}}" >
  </div>

  <div class="password-form">
    <label for="password">Password</label>
    <input type="text" id="password" name="password" required>
  </div>

  <input type="hidden" name="remember" id="remember" value="on">

  <button type="submit">LOGIN</button>
</form>

<p><a href="{{route('register')}}">新規ユーザーの方はこちら</a></p>

<!-- {!! Form::open() !!}

<p>DAWNSNSへようこそ</p>

{{ Form::label('e-mail') }}
{{ Form::text('mail',null,['class' => 'input']) }}
{{ Form::label('password') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::submit('ログイン') }}

<p><a href="/register">新規ユーザーの方はこちら</a></p>

{!! Form::close() !!} -->

@endsection
