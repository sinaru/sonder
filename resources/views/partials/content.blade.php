@php
  $isStickyPostWithBackground = is_sticky() && is_home() && has_post_thumbnail();
@endphp

<article @php $isStickyPostWithBackground ? post_class('with-background') : post_class() @endphp>
  <header
  @if($isStickyPostWithBackground)
    {{
    'style="background-image:url('.(wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium')[0]).');"'
    }}
  @endif
  >
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
