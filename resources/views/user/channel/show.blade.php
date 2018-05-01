@extends('user.index')
@section ('title', "| $element->title")
@section('content')

<div  id="contenido"  class="container left-right-shadow">
	<div class="inside">
		<h3 class="page-title">{!! $element->title !!}
			<span class="small pull-right">
             	<i class="far fa-edit"></i> <a href="{{route('channel.edit', $element->slug)}}">Edit</a>
            </span></h3>
		 <hr>
		<div class="row">
			<div class="col-md-4">
               <figure>
	            	<img height="300" class="img-responsive" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}" />
	            </figure>				
        	</div>
			<div class="col-md-8">
		      	<div class="row">
				    <dl class="dl-horizontal">
				    	<h4><dt>Channel Name:</dt>
						<dd>{!! $element->title !!}</dd></h4>

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
				        	<a href="{{route('profile', $element->profile->slug)}}">
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


@endsection
