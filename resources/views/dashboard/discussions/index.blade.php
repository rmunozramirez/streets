@extends('dashboard.index')
@section ('title', "| Discussions")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active"><a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active discussions</a></li>
			            <li class=""><a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-coffee"></i>Inactive discussions</a></li>
			            <li class=""><a data-toggle="tab" href="#tab-3-banned"><i class="fa fa-ban"></i>From banned users</a></li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<h3>Active discussions</h3>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Image</th>
								                <th>Title</th>
								                <th>Iniatiator</th>
								                <th>Answer</th>
								                <th>Likes</th>
								                <th>Created</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($all_ as $discussion)
							         			@if($discussion->statuses[0]->status === 'active')
							                	<tr>
							                		<td>
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
											            </figure>	
							                		</td>
							                		<td>
							                			<a href="{{route('discussions.show', $discussion->slug)}}">
															{{$discussion->title}}
														</a>
							                		</td>	
							                		<td>
							                			<a href="{{route('profiles.show', $discussion->profile->slug)}}">
							                				{{$discussion->profile->title}}
							                			</a>
							                		</td>	
							                		<td>
							                			{{$discussion->replies->count()}}
							                		</td>
							                		
							                		<td>{{$discussion->likes->count()}}</td>
						
									              	<td>{{$discussion->created_at->format('m/d/Y')}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('discussions.edit', $discussion->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['discussions.destroy', $discussion->slug], 'method' => 'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
															{!! Form::close() !!}
														</div>
									               </td>
							                	</tr>
							                	@endif
							            	@endforeach
							         	</tbody>
							      	</table>
								</div>
							</div>
						</div>
			            <div id="tab-2-inactive" class="tab-pane">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<h3>Active discussions</h3>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Image</th>
								                <th>Title</th>
								                <th>Iniatiator</th>
								                <th>Answer</th>
								                <th>Likes</th>
								                <th>Created</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($all_ as $discussion)
							         			@if($discussion->statuses[0]->status === 'inactive')
							                	<tr>
							                		<td>
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
											            </figure>	
							                		</td>
							                		<td>
							                			<a href="{{route('discussions.show', $discussion->slug)}}">
															{{$discussion->title}}
														</a>
							                		</td>	
							                		<td>
							                			<a href="{{route('profiles.show', $discussion->profile->slug)}}">
							                				{{$discussion->profile->title}}
							                			</a>
							                		</td>	
							                		<td>
							                			{{$discussion->replies->count()}}
							                		</td>
							                		
							                		<td>{{$discussion->likes->count()}}</td>
						
									              	<td>{{$discussion->created_at->format('m/d/Y')}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('discussions.edit', $discussion->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['discussions.destroy', $discussion->slug], 'method' => 'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
															{!! Form::close() !!}
														</div>
									               </td>
							                	</tr>
							                	@endif
							            	@endforeach
							         	</tbody>
							      	</table>
								</div>
							</div>
						</div>
			            <div id="tab-3-banned" class="tab-pane">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<h3>Active discussions</h3>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Image</th>
								                <th>Title</th>
								                <th>Iniatiator</th>
								                <th>Answer</th>
								                <th>Likes</th>
								                <th>Created</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($all_ as $discussion)
							         			@if($discussion->statuses[0]->status === 'banned')
							                	<tr>
							                		<td>
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
											            </figure>	
							                		</td>
							                		<td>
							                			<a href="{{route('discussions.show', $discussion->slug)}}">
															{{$discussion->title}}
														</a>
							                		</td>	
							                		<td>
							                			<a href="{{route('profiles.show', $discussion->profile->slug)}}">
							                				{{$discussion->profile->title}}
							                			</a>
							                		</td>	
							                		<td>
							                			{{$discussion->replies->count()}}
							                		</td>
							                		
							                		<td>{{$discussion->likes->count()}}</td>
						
									              	<td>{{$discussion->created_at->format('m/d/Y')}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('discussions.edit', $discussion->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['discussions.destroy', $discussion->slug], 'method' => 'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
															{!! Form::close() !!}
														</div>
									               </td>
							                	</tr>
							                	@endif
							            	@endforeach
							         	</tbody>
							      	</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	
@endsection


