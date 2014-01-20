@extends('template')

@section('title')
Login to LCOMIC
@stop

@section('head')
<style>
  label { display: block; }
</style>
@stop

@section('body')

@if( Session::has('msg') )
<div class="alert alert-info">{{ Session::get('msg') }}</div>
@endif


@if( $show == 'form' )
<form method="post" action="/auth/login">
  <fieldset>
    <legend>Login to the comic system</legend>
  <label>Username
    <input type="text" name="username" required>
  </label>
  <label>Password
    <input type="password" name="password" required>
  </label>
  <button>Login</button>
</fieldset>
</form>

@elseif( $show == 'success' )
<strong>you are now logged in</strong>

@elseif( $show == 'fail' )
<strong>Login Failed</strong>
@endif

<footer>
<a href="/auth">Login Home</a>
@if( Auth::check() )
<a href="/auth/logout">Log Out</a>
@endif
</footer>

@stop

