@extends('layouts.login')

@section('title', 'プロフィール編集')

@section('content')

<div class="profile-container">
  <div class="username-content">
    <p>userName</p>
    <input type="text" value={{$user->username}}>
  </div>

  <div class="mail-content">
    <p>MailAdress</p>
    <input type="text" value={{$user->mail}}>
  </div>

  <div class="password-content">
    <p>Password</p>
    <input type="password" value={{$user->password}}>
  </div>

  <div class="newPassword-content">
    <p>new Password</p>
    <input type="password">
  </div>

  <div class="bio-content">
    <p>Bio</p>
    <textarea name="" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="icon-content">
    <p>Icon Image</p>
    <input type="file">
  </div>
</div>

@endsection
