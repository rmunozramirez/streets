@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">

	    <div class="wrapper wrapper-content animated fadeInUp">
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
	                <h2>User profile</h2>
	                <ol class="breadcrumb">
	                    <li>
	                        <a href="{{route('index')}}"> Dashboard</a>
	                    </li>
	                    <li class="active">
	                        <i class="fas fa-pencil-alt"></i> {!! $page_name !!}
	                    </li>
	                    <span class="pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a href="{{route('profiles.index')}}">Back to profiles</a>
	                    </span>
	                </ol>
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
									        <dd class="pb-3">{{ $profile->user_name}}</dd>

									        <dt>Role:</dt>
									        <dd class="pb-3">{{ $profile->role->name}}</dd>

									        <dt>Status</dt>
									        <dd class="pb-3">{!! $profile->status->name !!}</dd>

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

	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">		
				
				<div class="inside">
					@if( $profile->title ) 
	                <h2>Channel: {{$profile->title}}</h2>

	                <hr>
					<div id="contenido"  class="card">
						<div class="card-body">
							<div class="row">
								@if(count($profile->discussions) > 0)
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Discussions</th>
								                <th>Answers</th>
								                <th>Date</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($profile->discussions as $discussion)
								            <tr>
								               <td><a href="">{{$discussion->title}}</a></td>
								               <td>{{count($discussion->replies)}}</td>
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
									<h2>{!! $profile->user->name !!} did not initiated any discussions</h2>
								@endif
							</div>	
						</div>
					</div>
					@else <h2>{!! $profile->user->name !!} does not have a channel</h2>
			        @endif
				</div>
				
			</div>
		</div>
  
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
								                <th>Answers</th>
								                <th>Likes</th>
								                <th>Date</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($profile->discussions as $discussion)
								            <tr>
								               <td><a href="">{{$discussion->title}}</a></td>
								               <td>{{count($discussion->replies)}}</td>
								               <td>{{$discussion->likes}}</td>
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
									<h2>{{ $name}} did not initiated any discussions</h2>
								@endif
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>

</section>

	
@endsection


