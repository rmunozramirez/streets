@extends('dashboard.index')
@section ('title', "| Discussions")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
			<h2>{!! $discussion->title !!} 
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('discussions.index')}}">Back to discussions</a>
                 	<i class="fa fa-pencil"></i> <a href="{{route('discussions.edit', $discussion->slug)}}">Edit</a>  	
                </span></h2>
            	<hr>
		    
		        <div class="row">        
		            <div class="col-md-4"> 
		            	<div class=" pt-5">
			               <figure>
				            	<img class="img-responsive" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
				            </figure>
		            	</div> 
		            </div>
	            	<div class="col-md-8"> 
	            	 	<div class="panel-body"> 
							<div class="pt-5">{!! $discussion->body!!} </div>         	
						</div>
					  	<div class="panel-footer text-muted">
					    	@if($discussion->is_like_by_auth_user())
					    		<a href="{{route('discussions.unlike', $discussion->id)}}" class="btn btn-xs btn-danger">
					    		<i class="fa fa-thumbs-down"></i>
					    		<span class="badge">{{ $discussion->likes->count() }}</span>
					    		</a>
					    	@else
					    		<a href="{{route('discussions.like', $discussion->id)}}" class="btn btn-xs btn-success">
					    		<i class="fa fa-thumbs-up"></i>
					    		<span class="badge">{{ $discussion->likes->count() }}</span>
					    		</a>
					    	@endif
					  	</div>
					</div>	
	            </div>         
            </div>
        	<div class="row">
	        	<div id="reply" class="card-body ">
			            <div class="col-md-4"> 
			            	<div class=" pt-5">
				                <dl class="dl-horizontal">
							    	<h3><dt>Discussion name:</dt>
									<dd>{!! $discussion->title !!}</dd></h3>

							        <dt>Profile Name:</dt>
							        <dd class="pb-3"><a href="{{route('profiles.show', $discussion->profile->slug)}}">{!! $discussion->profile->title !!}</a></dd>

							        <dt>Replies:</dt>
							        <dd class="pb-3">{!! count($discussion->replies) !!}</dd>
							   	</dl>
			            	</div>  
			            </div>
		            <div class="col-lg-8"><hr />
						<h3>Your reply</h3>            	     		
		            	{!! Form::open(['route' => ['discussions.reply', $discussion->slug], 'method' => 'POST']) !!}
				        {!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control'))!!} 
				         {!!Form::submit('Your Answer', array('class' => 'mt-5 btn btn-success btn-block', 'onclick' => 'clearform()')) !!}
			             {!!Form::close() !!} 

								@if(count($discussion->replies) > 0)
						         	@foreach ($discussion->replies->reverse() as $reply)
						         		<div class="panel mt-5">
										  	<div class="panel-header">
												  	@if($reply->profile->image)
									               		<img height="50" class="img-circle mr-3" src="{{URL::to('/images/' . $reply->profile->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
									               	@else	
									               		<i class="far fa-user fa-3x"></i>
										            @endif 
										            <a href="{{route('profiles.show', $reply->profile->slug )}}">{!! $reply->profile->title !!}</a>
											    	{!! $reply->created_at->diffForHumans() !!}
										  		<div class="small pull-right">		            
											    	{!! Form::open(['route' => ['discussions.r_destroy', $reply->id], 'method' => 'DELETE']) !!}

													{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

													{!! Form::close() !!}
											  	</div>
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
</section>

	
@endsection

