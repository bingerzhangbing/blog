@extends('layouts.default')
<!-- ???? -->
@section('main')
<div class="am-g am-g-fixed">
  <div class="am-u-sm-12">
      <h1>Edit Tag</h1>
      <hr/>
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

    <!-- ?? -->
  <form action="{{ URL::route('tag.update', $tag->id) }}" method="post" accept-charset="utf-8" class="am-form">
      <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
      <div class="am-form-group">
        <label for="name">TagName:</label>
        <input type="text" name="name" value="{{$tag->name}}" placeholder="">
      </div>
      <p><button type="submit" class="am-btn am-btn-success">
        <span class="am-icon-pencil"></span> Modify</button>
      </p>
  </form>
  </div>
</div>
@endsection