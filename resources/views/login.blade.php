<!-- ???? -->
@extends('layouts.default')
@section('main')
  <div class="am-g am-g-fixed">
    <div class="am-u-lg-6 am-u-md-8">
      <br/>

      <!-- ?????? -->
      @if (Session::has('message'))
        <div class="am-alert am-alert-{{ Session::get('message')['type'] }}" data-am-alert>
          <p>{{ Session::get('message')['content'] }}</p>
        </div>
      @endif
      @if ($errors->has())
        <div class="am-alert am-alert-danger" data-am-alert>
          <p>{{ $errors->first() }}</p>
        </div>
      @endif

      <!-- ???? -->
      <form action="login" method="post" accept-charset="utf-8" class="am-form">
        <!-- ?? token ? -->
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label  for="email">E-mail:
            <input type="email" name="email" value="{{Input::old('email')}}" placeholder="">
        </label>
        <br>
        <label for="password">Password:
            <input type="password" name="password" value="" placeholder="">
        </label>
        <br>
        <label for="remember_me">
          <input id="remember_me" name="remember_me" type="checkbox" value="1">
          Remember Me
        </label>
        <br>
        <div class="am-cf">
        <input type="submit" name="submit" value="Login" class="am-btn am-btn-primary am-btn-sm am-fl">
        </div>
      </form>

      <br/>
    </div>
  </div>
@endsection