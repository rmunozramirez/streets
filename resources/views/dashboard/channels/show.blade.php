@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')
<section id="content">

<!-- Channel panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
					@if( $element ) 
		                <h2>{!! $element->title !!}
		                <span class="small pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('channels.index')}}">Back to Channels</a>
    	                 	<i class="fa fa-pencil"></i> <a href="{{route('channels.edit', $element->slug)}}">Edit</a>
	                    </span></h2>
	                <hr>
						<div id="contenido"  class="card">
							<div class="card-body">
							<div class="row">
								<div class="col-md-6">
					               <figure>
						            	<img height="300" class="
						            	" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}" />
						            </figure>				
				            	</div>
								<div class="col-md-6">
							      	<div class="row">
									    <dl class="dl-horizontal">
									    	<h3><dt>Channel Name:</dt>
											<dd>{!! $element->title !!}</dd></h3>

									        <dt>Channel subtitle:</dt>
									        <dd class="pb-3">{{ $element->subtitle}}</dd>

									        <dt>Subcategory:</dt>
									        <dd class="pb-3">
									        	<a href="{{route('subcategories.show', $element->subcategory->slug)}}">
									        	{{ $element->subcategory->title}}
										        </a>
										    </dd>

									        <dt>Author</dt>
									        <dd class="pb-3">
									        	<a href="{{route('profiles.show', $element->profile->slug)}}">
									        		{!! $element->profile->title !!}
									        	</a>
									        </dd>

									        <dt>Status</dt>
									        <dd class="pb-3">{!! $element->statuses[0]->status !!}</dd>

									        <dt>Registered at:</dt>
									        <dd class="pb-3">{{ $element->created_at}}</dd>

									        <dt>Likes</dt>
									        <dd class="pb-3">{{ $element->likes}}</dd>

									        <dt>Description</dt>
									        <dd class="pb-3">{{ $element->about}}</dd>

									        <dt>Tags</dt>
									        <dd class="pb-3">
									        	@foreach($element->tags as $tag)
									        		<a class="btn btn-info" href="{{route('tags.show', $tag->slug)}}">
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
					@else <h2>{!! $user_name !!} does not have a channel</h2>
			        @endif
				</div>
				
			</div>
		</div>
<!-- End Channel panel  -->
</section>

	
@endsection


