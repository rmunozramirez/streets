@extends('user.index')
@section ('title', "| Channels")
@section('content')

    <div  id="contenido"  class="container left-right-shadow">
		<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
        	<div class="row">
        		@foreach ($element->images as $image)
			      <div class="the_thumbnail">
			           <img class="image" src="{{URL::to('/images/' . $image->slug ) }}" alt="{{$image->title}}" name="$image->title" >
			            <div class="overlay text-center">
			              <a href="{{route('images.show', $image->slug)}}">
			                  <div class="text small">{{$image->name}}</div>
			              </a>
			            </div>
			        </div>
				@endforeach 
			</div>
		</div>
	</div>

@endsection


