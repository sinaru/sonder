@php
  //get parent pages if this is called on single page
  $ancestors = !is_page() ? [ ] : get_post_ancestors(get_the_ID());
  $parents = array_map(function($ancestor) {
      get_post($ancestor);
  }, array_reverse($ancestors))
@endphp

<div class="page-header">
  @unless (empty($parents))
  <div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
      @foreach ($parents as $parentPage)
        <li>
          <a href="{{ get_permalink($parentPage) }}">
            {{ get_the_title($parentPage) }}</a>
        </li>
      @endforeach
      <li class="active">{{ get_the_title() }}</li>
    </ol>

  </div>
  @endunless

  <h1>{!! App::title() !!}</h1>
</div>
