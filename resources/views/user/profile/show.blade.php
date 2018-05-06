@extends('user.index')
@section ('title', "| $element->title | Profile")
@section('content')

    <div  id="contenido"  class="container left-right-shadow">
		<div class="inside">
			<h3 class="page-title">{!! $element->title !!}
				<span class="small pull-right">
                 	<i class="far fa-edit"></i> <a href="{{route('profile.edit', Auth::user()->profile->slug )}}">Edit</a>
                </span></h3>
			 <hr>
			<div class="row">
				<div class="col-md-3">
					@foreach($element->images as $image)
            			@if($image->imageable_type === 'profiles')
			               <figure>
				            	<img  class="img-circle img-responsive" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
				            </figure>
				        @else
				        <div class="text-center">
				        	<i class="fa fa-image fa-5x pb-4"></i><br>
				        	<a class="btn btn-default btn-sm" href="{{route('profiles.edit', $element->slug)}}"> Add a nice picture</a>
			            </div>
			        	@endif
			        @endforeach				
            	</div>
				<div class="col-md-9">
			      	<div class="row">
					    <dl class="dl-horizontal">
					    	<h4>
						        <dt>Profile Name:</dt>
						        <dd class="pb-3">{{ $element->title}}</dd>
						    </h4>

							<dt>User Name:</dt>
							<dd>{!! $element->user->name !!}</dd>

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
	
@endsection

