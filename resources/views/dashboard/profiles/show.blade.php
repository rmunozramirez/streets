@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $profile->title !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('profiles.index')}}">Back to profiles</a>
            </span></h2>
        	<hr>
			<div id="contenido"  class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
			               <figure>
				            	<img height="300" class="
				            	" src="{{URL::to('/images/' . $profile->image)}}" alt="{{ $profile->name }}" name="{{ $profile->name }}" />
				            </figure>				
		            	</div>
						<div class="col-md-8">
					      	<div class="row">
							    <dl class="dl-horizontal">
							    	<h3><dt>User Name:</dt>
									<dd>{!! $profile->user->name !!}</dd></h3>

							        <dt>Profile Name:</dt>
							        <dd class="pb-3">{{ $profile->title}}</dd>

							        <dt>Role:</dt>
							        <dd class="pb-3">{{ $profile->role->name}}</dd>

							        <dt>Status</dt>
							        <dd class="pb-3">{!! $profile->statuses[0]->status !!}</dd>

							        <dt>Registered at:</dt>
							        <dd class="pb-3">{{ $profile->created_at}}</dd>

							        <dt>Birthday</dt>
							        <dd class="pb-3">{!! $profile->birthday !!}</dd>

							        <dt>Website:</dt>
							        <dd class="pb-3">{{ $profile->web}}</dd>

							        <dt>Facebook</dt>
							        <dd class="pb-3">{!! $profile->facebook !!}</dd>

							        <dt>Twitter:</dt>
							        <dd class="pb-3">{{ $profile->twitter}}</dd>

							        <dt>Linkedin</dt>
							        <dd class="pb-3">{!! $profile->linkedin !!}</dd>

							        <dt>About</dt>
							        <dd class="pb-3">{!! $profile->about !!}</dd>
							    </dl>
					         </div>		            
				        </div>
			        </div>
			    </div>
			    <hr />
			    <div class="card-footer">
			    	<div class="row">
						<div class="col-md-4">
							<div class="row no-gutters">
								<div class="col-md-6">
				               		{!! Form::model($profile, ['method'=>'PATCH', 'action'=> ['DashboardProfileController@update', $profile->slug ],'files'=>true]) !!}

		        					{!!Form::select('status', array('' => 'Choose Status', 'active' => 'Active', 'inactive' => 'Inactive', 'on_hold' => 'On Hold', 'banned' => 'Banned'), null, array('class' => 'form-control'))!!}
		    					</div>
		    					<div class="col-md-6">
		        					{!!Form::submit('New Status', array('class' => 'btn btn-block')) !!}
				                	{!!Form::close() !!} 

						        </div>
					        </div>
						</div>										
						<div class="col-md-4 col-md-offset-1">
								<div class="row no-gutter">
								<div class="col-md-6">
				               		{!! Form::model($profile, ['method'=>'PATCH', 'action'=> ['DashboardProfileController@update', $profile->slug ],'files'=>true]) !!}

		                    		{!!Form::select('role', array('admin' => 'Admin', 'author' => 'Author', 'subscriber' => 'Subscriber'), null, array('class' => 'form-control'))!!}
								</div>
		    					<div class="col-md-6">
		        					{!!Form::submit('Change Role', array('class' => 'btn btn-block')) !!}
					                {!!Form::close() !!} 
						        </div>
					        </div>
						</div>										
						<div class="col-md-2 col-md-offset-1">
							<div class="card-body">
				            	<div class="col-md-6col-">
					            	{!! Form::open(['route' => ['profiles.destroy', $profile->slug], 'method' => 'DELETE']) !!}

									{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

									{!! Form::close() !!}
								</div>
					        </div>
						</div>
					</div>
			    </div>	
			</div>
		</div>
	</div>
</div>
<!-- End Profile panel  -->

<!-- Channel panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
	        	<div class="inside">
					@if( $profile->channel ) 
		                <h2>Channel: {!! $profile->channel->title !!}<span class="pull-right"><a class="small pt-3" href="{{route('channels.show', $profile->channel->slug)}}"><i class="fa fa-info"></i> Details</a></span></h2>
		                <hr>
						<div id="contenido"  class="card">
							<div class="card-body">
							<div class="row">
								<div class="col-md-6">
					               <figure>
						            	<img height="300" class="
						            	" src="{{URL::to('/images/' . $profile->channel->image)}}" alt="{{ $profile->channel->title }}" name="{{ $profile->channel->title }}" />
						            </figure>				
				            	</div>
								<div class="col-md-6">
							      	<div class="row">
									    <dl class="dl-horizontal">
									    	<h3><dt>Channel Name:</dt>
											<dd>{!! $profile->channel->title !!}</dd></h3>

									        <dt>Channel subtitle:</dt>
									        <dd class="pb-3">{{ $profile->channel->subtitle}}</dd>

									        <dt>Subcategory:</dt>
									        <dd class="pb-3">{{ $profile->channel->subcategory->title}}</dd>

									        <dt>Status</dt>
									        <dd class="pb-3">{!! $profile->channel->statuses[0]->status !!}</dd>

									        <dt>Registered at:</dt>
									        <dd class="pb-3">{{ $profile->channel->created_at}}</dd>

									        <dt>Likes</dt>
									        <dd class="pb-3">{{ $profile->channel->likes}}</dd>

									        <dt>Description</dt>
									        <dd class="pb-3">{{ $profile->channel->about}}</dd>
									    </dl>
							         </div>		            
						        </div>
					        </div>	
							</div>
						</div>
					@else <h2>{!! $profile->user_name !!} does not have a channel</h2>
			        @endif
				</div>
			</div>
		</div>
<!-- End Channel panel  -->

<!-- Discussions panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
	        	<div class="inside">
	                <h2>Discussions 
	                	<span class="mt-3 small pull-right">Total Discussions: {{count($profile->discussions)}}</span>
	                </h2>
	                <hr>
					<div id="contenido"  class="card">
						<div class="card-body">
							<div class="row">
								@if(count($profile->discussions) > 0)
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
								         	@foreach ($profile->discussions as $discussion)
								            <tr>
								               <td>
													<a href="{{route('discussions.show', $discussion->slug)}}">
										               	<figure>
											            	<img class="" height="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}"><span class="pl-5"> {{$discussion->title}}</span>
											            </figure>	
										           	</a>
								               </td>
								               <td>{{$discussion->statuses[0]->status}}</td>
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
									<h2>{{ $profile->user_name}} did not initiated any discussions</h2>
								@endif
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- End Discussions panel  -->
	
@endsection


