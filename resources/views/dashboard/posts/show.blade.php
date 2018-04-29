@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')
<section id="content">

<!-- post panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
	<div class="row wrapper border-bottom white-bg">
		<div class="inside">
			@if( $element ) 
				<h2>{!! $element->title !!}
					<span class="small pull-right">
						<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('posts.index')}}">Back to posts</a>
						<i class="fa fa-pencil"></i> <a href="{{route('posts.edit', $element->slug)}}">Edit</a>
					</span>
				</h2> 

				<h3>{!! $element->subtitle !!}</h3>
				<div class="breadcrumb">
					<li>Subcategory: <a href="{{route('postcategories.show', $element->postcategory->slug)}}">
						{{ $element->postcategory->title}}</a>
					</li>
					<li>Author: <a href="{{route('profiles.show', $element->profile->slug)}}">
						{!! $element->profile->title !!}</a>
					</li>
					<li>Status: {!! $element->statuses[0]->status !!}</li>
					<li>Created at: {{ $element->created_at}}</li>
					<li>Likes: <a href="{{route('profiles.show', $element->profile->slug)}}">{{ $element->likes}}</a></li>
					<li>Tags:
						@foreach($element->tags as $tag)
							<a class="btn btn-default btn-xs" href="{{route('tags.show', $tag->slug)}}">
								{!! $tag->title !!} 
							</a>
						@endforeach
					</li>
				</div>
				<hr>
				<div id="contenido"  class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							   <figure>
									<img height="300" class="img-responsive" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}" />
								</figure>	
							</div>
							<div class="col-md-9">
								{!! $element->body !!}
							</div>
						</div>          
						<hr />
						<div class="row my-5">
							<div class="col-md-3">
								<h3>Your Comment</h3>
							</div>
							
							<div class="col-md-9">
								{!! Form::open(['route' => ['comments.tocomment', $element->slug], 'method' => 'POST']) !!}
								{!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control'))!!} 
								{!!Form::submit('Your Answer', array('class' => 'btn btn-success pull-right mt-5', 'onclick' => 'clearform()')) !!}
								{!!Form::close() !!} 
							</div>
						</div>
						@if(count($element->comments) > 0)
							@foreach ($element->comments->reverse() as $comment)
					         	<hr />
							  	<div class="row mt-5">
								  	<div class="col-md-3">
								  		<div class="pull-right"> 
									  	@if($comment->profile->image)
						               		<img height="50" class="img-circle mr-3" src="{{URL::to('/images/' . $comment->profile->image)}}" alt="{{ $comment->profile->title }}" name="{{ $comment->profile->title }}">
						               	@else	
						               		<i class="far fa-user fa-3x"></i>
							            @endif 
							            <br />
							            <a href="{{route('profiles.show', $comment->profile->slug )}}">{!! $comment->profile->title !!}</a>
							            <hr />
								    	{!! $comment->created_at->diffForHumans() !!}
								  		</div>
								  	</div>
								  	<div class="col-md-9">
								    	<div class="mb-5">{!! $comment->body !!}</div>
							    		<div class="row mb-5">		            
								    		<div class="col-md-12">		            
									    		<div class="pull-left small">		            
											    	{!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
													{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-default']) !!}
													{!! Form::close() !!}
											  	</div>
											  	<div class="pull-right small">
											  		@if($comment->is_like_by_auth_user())
											    		<a href="{{route('comments.unlike', $comment->id)}}" class="btn btn-xs btn-default">
															<i class="fa fa-thumbs-down"></i>
															<span class="badge">{{ $comment->likes->count() }}</span>
											    		</a>
											    	@else
											    		<a href="{{route('comments.like', $comment->id)}}" class="btn btn-xs btn-default">
															<i class="fa fa-thumbs-up"></i>
															<span class="badge">{{ $comment->likes->count() }}</span>
											    		</a>
											    	@endif
											  	</div>
										  	</div>
									  	</div>

									  	<!-- Reply to comment-->
										<div class="panel-group" id="accordion">
										  <div class="panel panel-default">
											<div class="panel-heading">
											  <h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#reply_to_comment{{$comment->id}}">
												  Reply to {!! $comment->profile->title !!} 
												</a>
											  </h4>
											</div>
											<div id="reply_to_comment{{$comment->id}}" class="panel-collapse collapse">
											  <div class="panel-body">
											   {!! Form::open(['route' => ['comments.replies.tocomment', $comment->id], 'method' => 'POST']) !!}
												{!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control'))!!} 
												 {!!Form::submit('Your Reply', array('class' => 'btn btn-success pull-right mt-5', 'onclick' => 'clearform()')) !!}
												 {!!Form::close() !!} 
											  </div>
											</div>
										  </div>
										</div>
									  	@if(count($comment->commentreplies) > 0)
								         	@foreach ($comment->commentreplies->reverse() as $reply)
								         	<hr />
										  	<div class="row mt-5">
											  	<div class="col-md-3">
											  		<div class="pull-right"> 
														@if($reply->profile->image)
															<img height="50" class="img-circle mr-3" src="{{URL::to('/images/' . $reply->profile->image)}}" alt="{{ $reply->profile->title }}" name="{{ $reply->profile->title }}">
														@else	
															<i class="far fa-user fa-3x"></i>
														@endif 
														<br />
														<a href="{{route('profiles.show', $reply->profile->slug )}}">{!! $comment->profile->title !!}</a>
														<hr />
														{!! $reply->created_at->diffForHumans() !!}
											  		</div>
											  	</div>
											  	<div class="col-md-9">
											    	<div class=" mb-5">{!! $reply->body !!}</div>
										    		<div class="row mb-5">		            
											    		<div class="col-md-12">		            
												    		<div class="pull-left small">		            
														    	{!! Form::open(['route' => ['replies.destroy', $reply->id], 'method' => 'DELETE']) !!}
																{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-default']) !!}
																{!! Form::close() !!}
														  	</div>
														  	<div class="pull-right small">
														  		@if($reply->is_like_by_auth_user())
														    		<a href="{{route('comments.replies.unlike', $reply->id)}}" class="btn btn-xs btn-default">
														    		<i class="fa fa-thumbs-down"></i>
														    		<span class="badge">{{ $reply->likes->count() }}</span>
														    		</a>
														    	@else
														    		<a href="{{route('comments.replies.like', $reply->id)}}" class="btn btn-xs btn-default">
														    		<i class="fa fa-thumbs-up"></i>
														    		<span class="badge">{{ $reply->likes->count() }}</span>
														    		</a>
														    	@endif
														  	</div>
													  	</div>
												  	</div>
											  	</div>
										  	</div>
								            @endforeach
										@endif
									  	<!-- Reply to comment-->

								  	</div>
							  	</div>

							@endforeach 
						@else
							<div class="col-md-9 col-md-offset-3 pt-5"><h3>No replies to: {!! $element->title !!}</h3></div>
						@endif
					</div>
				</div>

			@else
				<h2>{!! $user_name !!} does not have a post</h2>
			@endif
		</div>	
	</div>
</div>
<!-- End post panel  -->
</section>

	
@endsection


