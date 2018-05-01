@extends('userarea.index')
@section ('title', "| $page_name")
@section('content')


<section id="inner-page" class="header">		
<!-- Navigation Section -->
    @include('layouts.navigation')

</section>

<section id="content">

	@include ('userarea.partials.user_menu')
	
    <div  id="contenido"  class="container left-right-shadow">
		<div class="inside">
			<h3 class="page-title">{{$page_name}}</h3>
			 <hr>
			 <div id="contenido">
				<div class="row">
					<div class="col-md-4">
		               <figure>
			            	<img height="300" class="img-responsive" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
			            </figure>				
	            	</div>
					<div class="col-md-8">
				      	<div class="row">
						    <dl class="dl-horizontal">
						    	<h3><dt>User Name:</dt>
								<dd>{!! $element->user->name !!}</dd></h3>

						        <dt>Profile Name:</dt>
						        <dd class="pb-3">{{ $element->title}}</dd>

						        <dt>Role:</dt>
						        <dd class="pb-3">{{ $element->role->title}}</dd>

						        <dt>Status</dt>
						        <dd class="pb-3">{!! $element->statuses[0]->status !!}</dd>

						        <dt>Registered at:</dt>
						        <dd class="pb-3">{{ $element->created_at}}</dd>

						        <dt>Birthday</dt>
						        <dd class="pb-3">{!! $element->birthday !!}</dd>

						        <dt>Website:</dt>
						        <dd class="pb-3">{{ $element->web}}</dd>

						        <dt>Facebook</dt>
						        <dd class="pb-3">{!! $element->facebook !!}</dd>

						        <dt>Twitter:</dt>
						        <dd class="pb-3">{{ $element->twitter}}</dd>

						        <dt>Linkedin</dt>
						        <dd class="pb-3">{!! $element->linkedin !!}</dd>

						        <dt>About</dt>
						        <dd class="pb-3">{!! $element->about !!}</dd>

						        <dt>Tags</dt>
						        <dd class="pb-3">
						        	@foreach($element->tags as $tag)
						        		<a class="btn btn-default btn-sm" href="{{route('tags.show', $tag->slug)}}">
									    	{!! $tag->title !!}
									    </a>
									@endforeach
						        </dd>
						    </dl>
				         </div>		            
			        </div>
		        </div>
			</div>
		</div>			
	</div>
</section>

	
@endsection

