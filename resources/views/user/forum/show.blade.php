@extends('user.index')
@section ('title', "| $element->title")
@section('content')

<div class="container left-right-shadow">
	<div class="inside">
		<h2>{!! $element->title !!} 
			@if($element->hasBestAnswer())
				<span class="danger"><i class="fa fa-ban"></i> CLOSED</span>
			@endif
        <span class="breadcrumb small pull-right">
        	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('forum.index')}}">Back to discussions</a>
         	 <i class="far fa-edit"></i> <a href="{{route('forum.edit', $element->slug)}}">Edit</a>  	
        </span></h2>
    	<hr>
        <div class="row pt-5">   
            <div class="col-md-4"> 
               <figure>
	            	<img class="img-responsive" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}">
	            </figure> 
            </div>
        	<div class="col-md-8"> 
        		<div class="panel">
            	 	<div class="panel-header"> 
						<h3>{!! $element->title!!}
							@if($element->is_being_watched_by_auth_user())
								<span class="pull-right">
									<a class="btn btn-xs  btn-light" href="{{route('discussions.unwatch', $element->id)}}">
										<i class="fa fa-eye-slash"></i> Unwatch
									</a>
								</span>
							@else
								<span class="pull-right">
									<a class="btn btn-xs btn-light" href="{{route('discussions.watch', $element->id)}}">
										<i class="fa fa-eye"></i> Watch
									</a>
								</span>
							@endif
						</h3>
						<div class="breadcrumb"> 
						 <span class="pr-3">Author:</span><a href="{{route('profile', $element->profile->slug)}}"> {!! $element->profile->title !!}</a>
				        <span class="pr-3">Replies:</span> <a href=""> {!! count($element->replies) !!} </a>
				        <span class="pr-3">Tags:</span> 
				        	@foreach($element->tags as $tag)
				        	<a class="btn btn-xs btn-default pr-3" href="{{route('tags.show', $tag->slug)}}"> {!! $tag->title !!}</a>
							@endforeach						
						</div>
					</div>
            	 	<div class="panel-body"> 
						<div class="pt-5">
							{!! $element->body!!} 
							@if($best_answer)
							<div class="py-5 px-5">
								<h3>Best Answer</h3>
								<div class="panel panel-success">
					  				<div class="panel-header">
								  	@if($best_answer->profile->image)
					               		<img height="50" class="img-circle mr-3" src="{{URL::to('/images/' . $best_answer->profile->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}">
					               	@else	
					               		<i class="far fa-user fa-3x"></i>
						            @endif 
						            <a href="{{route('profiles.show', $best_answer->profile->slug )}}">{!! $best_answer->profile->title !!}</a>
							    	</div>
							    	<div class="panel-body">
							    		{!! $best_answer->body !!}
							    	</div>
								</div>
								@endif
							</div>
						</div>
					</div>	
				  	<div class="panel-footer">
				    	@if($element->is_like_by_auth_user())
				    		<a href="{{route('discussions.unlike', $element->id)}}" class="btn btn-xs btn-danger">
				    		<i class="fa fa-thumbs-down"></i>
				    		<span class="badge">{{ $element->likes->count() }}</span>
				    		</a>
				    	@else
				    		<a href="{{route('discussions.like', $element->id)}}" class="btn btn-xs btn-success">
				    		<i class="fa fa-thumbs-up"></i>
				    		<span class="badge">{{ $element->likes->count() }}</span>
				    		</a>
				    	@endif
				  	</div>
	            </div>		
				
        	</div>         
        </div>
    	<div class="row">
        	<div id="reply" class="card-body ">
	            <div class="col-lg-8 col-md-offset-4"><hr />
	            	@if($element->hasBestAnswer())
	            		<h3 class="danger"><i class="fa fa-ban"></i></span> Comments for this discussion are closed</h3> 
	            	@else
						<h3>Your reply</h3>            	     		
		            	{!! Form::open(['route' => ['forum.reply', $element->slug], 'method' => 'POST']) !!}
				        {!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control'))!!} 
				         {!!Form::submit('Your Answer', array('class' => 'mt-5 btn btn-success btn-block', 'onclick' => 'clearform()')) !!}
			             {!!Form::close() !!} 

	            	@endif
					@if(count($element->replies) > 0)
			         	@foreach ($element->replies->reverse() as $reply)
			         		<div class="panel mt-5">
							  	<div class="panel-header">
									  	@if($reply->profile->image)
						               		<img height="50" class="img-circle mr-3" src="{{URL::to('/images/' . $reply->profile->image)}}" alt="{{ $reply->profile->title }}" name="{{ $reply->profile->title }}">
						               	@else	
						               		<i class="far fa-user fa-3x"></i>
							            @endif 
							            <a href="{{route('profiles.show', $reply->profile->slug )}}">{!! $reply->profile->title !!}</a>
								    	{!! $reply->created_at->diffForHumans() !!}
							  		<span class="pull-right pt-3">
							  			@if(!$best_answer)
								  			@if(Auth::id() === $element->profile->user->id)
								  				<a class="btn btn-xs btn-light" href="{{route('best.reply', $reply->id)}}">
												<i class="fa fa-arrow-up"></i> Mark it as best</a> 
									    	@endif
								    	@endif
								  	</span>
							  	</div>
							  	<div class="panel-body">
							    	{!! $reply->body !!}
							  	</div>
							  	<div class="panel-footer text-muted">
							    	@if($reply->is_like_by_auth_user())
							    		<a href="{{route('replies.unlike', $reply->id)}}" class="btn btn-xs btn-danger">
							    		<i class="fa fa-thumbs-down"></i>
							    		<span class="badge">{{ $reply->likes->count() }}</span>
							    		</a>
							    	@else
							    		<a href="{{route('replies.like', $reply->id)}}" class="btn btn-xs btn-success">
							    		<i class="fa fa-thumbs-up"></i>
							    		<span class="badge">{{ $reply->likes->count() }}</span>
							    		</a>
							    	@endif
							    	<span class="pull-right">
								    	{!! Form::open(['route' => ['discussions.r_destroy', $reply->id], 'method' => 'DELETE']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
										{!! Form::close() !!}
									</span>
							  	</div>
							</div>

			            @endforeach 
					@else
					<div class="col-md-12 pt-5"><h3>No replies to: {!! $page_name !!}</h3></div>
					@endif
	            </div>         
            </div>
        </div>
	</div>	
</div>
	
@endsection
