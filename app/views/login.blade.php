@extends('template')

@section('title')
Login to LCOMIC
@stop

@section('body')
<form method="post" action="/auth/login">
  <label>Username
    <input type="text" name="username" required>
  </label>
  <label>Password
    <input type="text" name="password" required>
  </label>
  <button>Login</button>
</form>
@stop

