@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		    <h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active Users</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-ban"></i>Banned</a>
			            </li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Active Channels</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Channel</th>
								                <th>Subcategory</th>
								                <th>Profile</th>
								                <th>Role</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($all_ as $channel)
								         		@if($channel->statuses[0]->status === 'active')
							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $channel->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $channel->image)}}" alt="{{ $channel->title }}" name="{{ $channel->title }}">
												            	<span class="pl-5"> {{$channel->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('subcategories.show', $channel->subcategory->slug)}}">
							                			{{$channel->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $channel->profile->slug)}}">
								                			{{$channel->profile->title}}
								                		</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->profile->role->slug)}}">
							                			{{$channel->profile->role->name}}</a>
							                		</td>
									              	<td>{{$channel->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $channel->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $channel->slug], 'method' => 'DELETE']) !!}

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
			                		<div class="col-md-12">
			                			<h3>Inactive Channels</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Channel</th>
								                <th>Subcategory</th>
								                <th>Profile</th>
								                <th>Role</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($all_ as $channel)
								         		@if($channel->statuses[0]->status === 'inactive')
							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $channel->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $channel->image)}}" alt="{{ $channel->title }}" name="{{ $channel->title }}">
												            	<span class="pl-5"> {{$channel->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->subcategory->slug)}}">
							                			{{$channel->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $channel->slug)}}">
								                			{{$channel->profile->title}}
								                		</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->profile->role->slug)}}">
							                			{{$channel->profile->role->name}}</a>
							                		</td>
									              	<td>{{$channel->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $channel->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $channel->slug], 'method' => 'DELETE']) !!}

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


