@extends('layouts.app')

@section('content')
@if ( has_post_thumbnail() ) 
<div class="featured-image">
  @php the_post_thumbnail(); @endphp
  </div>
@endif
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
