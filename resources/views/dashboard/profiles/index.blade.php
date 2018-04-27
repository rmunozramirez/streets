@extends('dashboard.index')
@section ('title', "| Profiles")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active"><a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-thumbs-up"></i>Active Users</a></li>
			            <li class=""><a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-coffee"></i>Inactive profiles</a></li>
			            <li class=""><a data-toggle="tab" href="#tab-3-banned"><i class="fa fa-ban"></i>Banned profiles</a></li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<h3>Active Users</h3>
									<table class="table table-striped table-hover">
							         	<thead>
								            <tr>
								                <th>Profile</th>
								                <th>User</th>
								                <th>Role</th>
								                <th>Date</th>
								            </tr>
								         </thead>
							         	<tbody>
							         	@foreach ($all_ as $pr)
						                	@if($pr->statuses[0]->status === 'active')
						                	<tr>
						                		<td>
													<a href="{{route('profiles.show', $pr->slug)}}">
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $pr->image)}}" alt="{{ $pr->title }}" name="{{ $pr->title }}">
											            	<span class="pl-5"> {{$pr->title}}</span>
											            </figure>
						                			</a>
						                		</td>					                		
						                		<td>{{$pr->user->name}}</td>
						                		<td><a href="{{route('roles.show', $pr->role->slug)}}">
						                			{{$pr->role->name}}</a>
						                		</td>
								              	<td>{{$pr->user->created_at}}</td>
							              		<td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('profiles.edit', $pr->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['profiles.destroy', $pr->slug], 'method' => 'DELETE']) !!}
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
			                		<h3>Inactive Users</h3>
									<table class="table table-striped table-hover">
							         	<thead>
								            <tr>
								                <th>Profile</th>
								                <th>User</th>
								                <th>Role</th>
								                <th>Date</th>
								            </tr>
								         </thead>
							         	<tbody>
							         	@foreach ($all_ as $pr)
						                	@if($pr->statuses[0]->status === 'inactive')
						                	<tr>
						                		<td>
													<a href="{{route('profiles.show', $pr->slug)}}">
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $pr->image)}}" alt="{{ $pr->title }}" name="{{ $pr->title }}">
											            	<span class="pl-5"> {{$pr->title}}</span>
											            </figure>
						                			</a>
						                		</td>					                		
						                		<td>{{$pr->user->name}}</td>
						                		<td><a href="{{route('roles.show', $pr->role->slug)}}">
						                			{{$pr->role->name}}</a>
						                		</td>
								              	<td>{{$pr->user->created_at}}</td>
							              		<td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('profiles.edit', $pr->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['profiles.destroy', $pr->slug], 'method' => 'DELETE']) !!}
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
			                		<h3>Banned Users</h3>
									<table class="table table-striped table-hover">
							         	<thead>
								            <tr>
								                <th>Profile</th>
								                <th>User</th>
								                <th>Role</th>
								                <th>Date</th>
								            </tr>
								         </thead>
							         	<tbody>
							         	@foreach ($all_ as $pr)
						                	@if($pr->statuses[0]->status === 'banned')
						                	<tr>
						                		<td>
													<a href="{{route('profiles.show', $pr->slug)}}">
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $pr->image)}}" alt="{{ $pr->title }}" name="{{ $pr->title }}">
											            	<span class="pl-5"> {{$pr->title}}</span>
											            </figure>
						                			</a>
						                		</td>					                		
						                		<td>{{$pr->user->name}}</td>
						                		<td><a href="{{route('roles.show', $pr->role->slug)}}">
						                			{{$pr->role->name}}</a>
						                		</td>
								              	<td>{{$pr->user->created_at}}</td>
							              		<td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('profiles.edit', $pr->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['profiles.destroy', $pr->slug], 'method' => 'DELETE']) !!}
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


