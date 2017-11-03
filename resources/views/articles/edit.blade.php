@extends('layouts.default')
<!-- ?????? -->
@section('main')
<div class="am-g am-g-fixed">
  <div class="am-u-sm-12">
      <h1>Edit Article</h1>
      <hr/>
    @if ($errors->has())
    <div class="am-alert am-alert-danger" data-am-alert>
      <p>{{ $errors->first() }}</p>
    </div>
    @endif
<!-- ?????? -->
  <form action="{{ URL::route('article.update',$article->id)}}" method="post" accept-charset="utf-8" class="am-form">
      <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
      <div class="am-form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $article->title}}" placeholder="">
      </div>
      <div class="am-form-group">
        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="20" >{{ $article->content }}</textarea>
        <p class="am-form-help">
          <button id="preview" type="button" class="am-btn am-btn-xs am-btn-primary">
          <span class="am-icon-eye"></span> Preview
          </button>
        </p>
      </div>
      <div class="am-form-group">
        <label for="tags">Tags:
            <input type="text" name="tags" value="{{ $article->tags }}" placeholder="">
        </label>
        <p class="am-form-help">Separate multiple tags with a comma ","</p>
      </div>
      <p><button type="submit" class="am-btn am-btn-success">
        <span class="am-icon-pencil"></span> Modify</button>
      </p>
  </form>
  </div>
</div>

<div class="am-popup" id="preview-popup">
  <div class="am-popup-inner">
    <div class="am-popup-hd">
      <h4 class="am-popup-title"></h4>
      <span data-am-modal-close
            class="am-close">&times;</span>
    </div>
    <div class="am-popup-bd">
    </div>
  </div>
</div>
<script>
  $(function() {
      $('#preview').on('click', function() {
          $('.am-popup-title').text($('#title').val());
          $.post('preview', {'content': $('#content').val(),'_token':$('#token').val()}, function(data, status) {
            $('.am-popup-bd').html(data);
          });
          $('#preview-popup').modal();
      });
  });
</script>
@endsection