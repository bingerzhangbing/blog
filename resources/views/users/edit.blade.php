@extends('layouts.default')

@section('main')
  <div class="am-g am-g-fixed">
    <div class="am-u-lg-6 am-u-md-8">
      <br/>
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

<!-- ?????? -->
      <form action="{{URL::to('user/'.$user->id)}}" method="post" accept-charset="utf-8" class="am-form">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label for="email">Email?
          <br>
          <input type="email" name="email" value="" placeholder="" class="">
        </label>
        <br>
        <label for="nickname">NickName:
          <br>
          <input type="text" name="nickname" value="" placeholder="">
        </label>
        <br>
        <label for="old_password">OldPassword:
          <br>
          <input type="password" name="old_password" value="" placeholder="">
        </label>
        <br>
        <label for="password">NewPassword:
          <br>
          <input type="password" name="password" value="" placeholder="">
        </label>
        <br>
        <label for="confirm_password">ConfirmPassword:
          <br>
          <input type="password" name="password_confirmation" value="" placeholder="">
        </label>
        <br>
        <div class="am-cf">
          <input type="submit" name="submit" value="Modify" class="am-btn am-btn-primary am-btn-sm am-fl">
        </div>
      </form>

      <br/>
    </div>
  </div>
@endsection