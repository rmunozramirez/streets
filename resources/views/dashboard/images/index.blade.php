@extends('dashboard.index')
@section ('title', "| Channels")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
        	<div class="row">
    		      @foreach ($all_ as $image)
		     		<div class="the_thumbnail">
			           <img class="image img-responsive" src="{{URL::to('/images/' . $image->slug ) }}" alt="{{$image->title}}" name="$image->title" >
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
</div>

@endsection

