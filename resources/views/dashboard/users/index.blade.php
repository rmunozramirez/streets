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
			            <li class=""><a data-toggle="tab" href="#tab-3-banned"><i class="fa fa-ban"></i>User with banned profiles</a></li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<h3>Active Users</h3>
									<table class="table table-striped table-hover">
							         	<thead>
								            <tr>
								                <th>User</th>
								                <th>Profile</th>
								                <th>Role</th>
								                <th>Joined</th>
								            </tr>
								         </thead>
							         	<tbody>
							         	@foreach ($users as $user)
						                	@if($user->profile->statuses[0]->status === 'active')
						                	<tr>
						                		<td><a href="{{route('users.show', $user->slug)}}">{{$user->name}}</span></a>
						                		</td>					                		
						                		<td>{{$user->profile->title}}</td>
						                		<td><a href="{{route('roles.show', $user->profile->role->slug)}}">
						                			{{$user->profile->role->title}}</a>
						                		</td>
								              	<td>{{$user->created_at}}</td>
							              		<td>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['users.destroy', $user->slug], 'method' => 'DELETE']) !!}
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
								                <th>Joined</th>
								            </tr>
								         </thead>
							         	<tbody>
							         	@foreach ($all_ as $user)
						                	@if($user->profile->statuses[0]->status === 'inactive')
						                	<tr>
						                		<td><a href="{{route('users.show', $user->slug)}}">{{$user->name}}</span></a>
						                		</td>					                		
						                		<td>{{$user->profile->title}}</td>
						                		<td><a href="{{route('roles.show', $user->profile->role->slug)}}">
						                			{{$user->profile->role->title}}</a>
						                		</td>
								              	<td>{{$user->created_at}}</td>
							              		<td>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['users.destroy', $user->slug], 'method' => 'DELETE']) !!}
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
								                <th>Joined</th>
								                <th>Deleted at</th>
								            </tr>
								         </thead>
							         	<tbody>
							         	@foreach ($all_ as $user)
						                	@if($user->profile->statuses[0]->status === 'banned')
						                	<tr>
						                		<td><a href="{{route('users.show', $user->slug)}}">{{$user->name}}</span></a>
						                		</td>					                		
						                		<td>{{$user->profile->title}}</td>
						                		<td><a href="{{route('roles.show', $user->profile->role->slug)}}">
						                			{{$user->profile->role->title}}</a>
						                		</td>
								              	<td>{{$user->created_at}}</td>
							              		<td>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['users.destroy', $user->slug], 'method' => 'DELETE']) !!}
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


