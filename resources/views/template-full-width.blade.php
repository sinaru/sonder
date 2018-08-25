{{--
  Template Name: Full Width
--}}

@while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('partials.homepage')
@endwhile