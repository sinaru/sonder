@if (is_single())
  @if (has_tag())
    <div class="tag-block">
      <span>{{ __('Tags', 'sage') }} : </span>
      @php the_tags( '<ul class="post-tag-list"><li>', '</li><li>', '</li></ul>' ) @endphp
    </div>
  @endif
@endif

<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
