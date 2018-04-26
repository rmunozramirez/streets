@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">

<!-- post panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
					@if( $post ) 
		                <h2>{!! $post->title !!}
		                <span class="small pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('posts.index')}}">Back to posts</a>
    	                 	<i class="fa fa-pencil"></i> <a href="{{route('posts.edit', $post->slug)}}">Edit</a>
	                    </span></h2>
	                <hr>
						<div id="contenido"  class="card">
							<div class="card-body">
							<div class="row">
								<div class="col-md-4">
					               <figure>
						            	<img height="300" class="img-responsive" src="{{URL::to('/images/' . $post->image)}}" alt="{{ $post->title }}" name="{{ $post->title }}" />
						            </figure>				
				            	</div>
								<div class="col-md-8">
							      	<div class="row">
									    <dl class="dl-horizontal">
									    	<h3><dt>Post Name:</dt>
											<dd>{!! $post->title !!}</dd></h3>

									        <dt>Post subtitle:</dt>
									        <dd class="pb-3">{{ $post->subtitle}}</dd>

									        <dt>Subcategory:</dt>
									        <dd class="pb-3">
									        	<a href="{{route('postcategories.show', $post->postcategory->slug)}}">
									        	{{ $post->postcategory->title}}
										        </a>
										    </dd>

									        <dt>Author</dt>
									        <dd class="pb-3">
									        	<a href="{{route('profiles.show', $post->profile->slug)}}">
									        		{!! $post->profile->title !!}
									        	</a>
									        </dd>

									        <dt>Status</dt>
									        <dd class="pb-3">{!! $post->statuses[0]->status !!}</dd>

									        <dt>Registered at:</dt>
									        <dd class="pb-3">{{ $post->created_at}}</dd>

									        <dt>Likes</dt>
									        <dd class="pb-3">{{ $post->likes}}</dd>

									        <dt>Body</dt>
									        <dd class="pb-3">{!! $post->body !!}</dd>
									    </dl>
							         </div>		            
						        </div>
					        </div>	
							</div>
						</div>
					@else <h2>{!! $user_name !!} does not have a post</h2>
			        @endif
				</div>
				
			</div>
		</div>
<!-- End post panel  -->
</section>

	
@endsection


