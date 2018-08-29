@if (is_active_sidebar('sidebar-footer') && is_active_sidebar('footer-left') && is_active_sidebar('footer-right'))
  <footer id="theme-footer" class="bottom-footer content-info">
    <div class="container">
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>

    <div class="top row">
      @if (is_active_sidebar('footer-left'))
      <div class="left-block col-xs-12 col-sm-6"> @php dynamic_sidebar('footer-left') @endphp </div>
      @endif
      @if (is_active_sidebar('footer-right'))
      <div class="right-block col-xs-12 col-sm-6"> @php dynamic_sidebar('footer-right') @endphp </div>
      @endif
    </div>
  </footer>
@endif
