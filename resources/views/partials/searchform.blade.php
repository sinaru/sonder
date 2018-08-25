<form role="search" method="get" class="search-form form-inline" action="{{ $sf_action }}">
  <label>
    <span class="screen-reader-text">{{ $sf_screen_reader_text }}</span>
    <input type="search" class="search-field form-control" placeholder="{!! $sf_placeholder !!}" value="{{ $sf_current_query }}" name="s">
  </label>
  <span class="input-group-btn">
    <input type="submit" class="search-submit btn btn-default" value="{{ $sf_submit_text }}">
  </span>
</form>
