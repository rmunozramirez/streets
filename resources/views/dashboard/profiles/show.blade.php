@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $element->title !!}
            	<span class="ml-5">
            		@if($element->is_banned($element->id))
			    		<a href="{{route('profiles.allow', $element->id)}}" class="btn btn-success btn-sm">
			    			<i class="fa fa-thumbs-up"></i> Remove BANN!
			    		</a>
			    	@else
			    		<a href="{{route('profiles.ban', $element->id)}}" class="btn btn-danger btn-sm">
			    			<i class="fa fa-ban"></i> BANN the user!
			    		</a>
			    	@endif
            	</span>
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('profiles.index')}}"> Back to profiles</a>
	            	<i class="fa fa-pencil"></i><a type="button" href="{{route('profiles.edit', $element->slug)}}"> Edit</a>
	            </span>
	        </h2>
        	<hr>
			<div id="contenido"  class="card">
			<!-- tabs -->
			<div class="sky-tabs sky-tabs-amount-4 sky-tabs-pos-top-justify sky-tabs-anim-fade sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-user"></i>Profile</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="fa fa-desktop"></i>Channel</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
				<label for="sky-tab3"><span><span><i class="fa fa-comments"></i>Discussions</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
				<label for="sky-tab4"><span><span><i class="fa fa-image"></i>Images</span></span></label>

				<ul>
					<li class="sky-tab-content-1">					
						<div class="inside">
							<div class="row">
								<div class="col-md-3">
									@foreach($element->images as $image)
		                    			@if($image->imageable_type === 'profiles')
							               <figure>
								            	<img  class="img-circle img-responsive" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
								            </figure>
								        @endif
							        @endforeach				
				            	</div>
								<div class="col-md-9">
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

									    </dl>
							         </div>		            
						        </div>
					        </div>
					    </div>
					</li>
					
					<li class="sky-tab-content-2">
		            	<div class="inside">
			            	@if( $element->channel ) 
			                <h2>
			                	<span>
				            		@if($element->statuses[0]->status === 'banned')
							    		<span class="danger">
							    			<i class="fa fa-ban"></i> 
							    		</span>
							    	@else
							    		<span class="success">
							    			<i class="fa fa-thumbs-up"></i>
							    		</span>
							    	@endif
				            	</span>
				            	Channel: {!! $element->channel->title !!}
			                	<span class="pull-right"><a class="small pt-3" href="{{route('channels.show', $element->channel->slug)}}"><i class="fa fa-info"></i> Details</a></span></h2>
			                <hr>
							<div class="card">
								<div class="card-body">
								<div class="row">
									<div class="col-md-4">
						               <figure>
							            	<img height="300" class="img-responsive" src="{{URL::to('/images/' . $element->channel->image)}}" alt="{{ $element->channel->title }}" name="{{ $element->channel->title }}" />
							            </figure>				
					            	</div>
									<div class="col-md-8">
								      	<div class="row">
										    <dl class="dl-horizontal">
										    	<h3><dt>Channel Name:</dt>
												<dd>{!! $element->channel->title !!}</dd></h3>

										        <dt>Channel subtitle:</dt>
										        <dd class="pb-3">{{ $element->channel->subtitle}}</dd>

										        <dt>Subcategory:</dt>
										        <dd class="pb-3">{{ $element->channel->subcategory->title}}</dd>

										        <dt>Status</dt>
										        <dd class="pb-3">{!! $element->channel->statuses[0]->status !!}</dd>

										        <dt>Registered at:</dt>
										        <dd class="pb-3">{{ $element->channel->created_at}}</dd>

										        <dt>Likes</dt>
										        <dd class="pb-3">{{ $element->channel->likes}}</dd>

										        <dt>Description</dt>
										        <dd class="pb-3">{{ $element->channel->about}}</dd>

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
							@else <h2>{!! $element->user_name !!} does not have a channel</h2>
				        	@endif
				            </div>
					</li>
					
					<li class="sky-tab-content-3">
		            	<div class="inside">
			            	<h2>
			                	<span>
				            		@if($element->statuses[0]->status === 'banned')
							    		<span class="danger">
							    			<i class="fa fa-ban"></i> 
							    		</span>
							    	@else
							    		<span class="success">
							    			<i class="fa fa-thumbs-up"></i>
							    		</span>
							    	@endif
				            	</span>
			                	Discussions 
			                	<span class="mt-3 small pull-right">Total Discussions: {{count($element->discussions)}}</span>
			                </h2>
			                <hr>
							<div class="card">
								<div class="row">
									@if(count($element->discussions) > 0)
										<table class="table table-striped table-hover">
									         <thead>
									            <tr>
									                <th>Discussions</th>
									                <th>Status</th>
									                <th>Answers</th>
									                <th>Total Likes</th>
									                <th>Date</th>
									            </tr>
									         </thead>
									         <tbody>
									         	@foreach ($element->discussions as $discussion)
									            <tr>
									               <td>
														<a href="{{route('discussions.show', $discussion->slug)}}">
											               	<figure>
												            	<img class="" height="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}"><span class="pl-5"> {{$discussion->title}}</span>
												            </figure>	
											           	</a>
									               </td>
									               <td>
									               		<span>
										            		@if($discussion->statuses[0]->status === 'banned')
													    		<span class="danger">
													    			<i class="fa fa-ban"></i> 
													    		</span>
													    	@elseif ($discussion->statuses[0]->status === 'inactive')
													    		<span class="info">
													    			<i class="fa fa-coffee"></i> 
													    		</span>  	
													    	@else
													    		<span class="success">
													    			<i class="fa fa-thumbs-up"></i>
													    		</span>
													    	@endif
										            	</span>

									               	{{$discussion->statuses[0]->status}}

									               </td>
									               <td>{{$discussion->replies->count()}}</td>
									               <td>{{$discussion->likes->count()}}</td>
									               <td>{{$discussion->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $discussion->slug], 'method' => 'DELETE']) !!}

															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

															{!! Form::close() !!}
														</div>
									               </td>
									            </tr>
									            @endforeach

									         </tbody>
									    </table>
									@else
										<h2>{{ $element->user_name}} did not initiated any discussions</h2>
									@endif
								</div>	
							</div>
						</div>
					</li>
					
					<li class="sky-tab-content-4">

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
					</li>					
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Profile panel  -->

@endsection


