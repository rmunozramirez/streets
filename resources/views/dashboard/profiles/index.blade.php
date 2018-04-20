@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total profile: {{count($all_profiles)}}</span> </h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> All {!! $page_name !!}s
                    </li>
                    <span class="pull-right"><i class="fas fa-pencil-alt"></i> <a href="{{route('profiles.create')}}">Create a new profile</a></span>
                </ol>
                
                <hr>
			    <div id="contenido"  class="card">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs user-tabs">
	                        <li class="active"><a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active Users</a></li>
	                        <li class=""><a data-toggle="tab" href="#tab-2-banned"><i class="fa fa-coffee"></i>Inactive users</a></li>
	                        <li class=""><a data-toggle="tab" href="#tab-3-hold"><i class="fa fa-ban"></i>Banned Users</a></li>
	                        <li class=""><a data-toggle="tab" href="#tab-4-trashed"><i class="fa fa-trash"></i>Trashed</a></li>
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
								         	@foreach ($active_pr as $status)
							                	<tr>
							                		<td>
														<a href="{{route('profiles.show', $status->statusable->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $status->statusable->image)}}" alt="{{ $status->statusable->title }}" name="{{ $status->statusable->title }}">
												            	<span class="pl-5"> {{$status->statusable->title}}</span>
												            </figure>
							                			</a>
							                		</td>					                		
							                		<td>{{$status->statusable->user->name}}</td>
							                		<td><a href="{{route('roles.show', $status->statusable->role->slug)}}">
							                			{{$status->statusable->role->name}}</a>
							                		</td>
									              	<td>{{$status->statusable->user->created_at}}</td>
							                	</tr>	          
								            @endforeach
								         	</tbody>
								      	</table>
									</div>	
								</div>
                            </div>
                            <div id="tab-2-banned" class="tab-pane">
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
								         	@foreach ($inactive_pr as $status)
									            <tr>
									               <td>
										               	<a href="{{route($status->statusable_type . '.show', $status->statusable->slug)}}">
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $status->statusable->image)}}" alt="{{ $status->statusable->title }}" name="{{ $status->statusable->title }}">
											            	<span class="pl-5"> {{$status->statusable->title}}</span>
											            </figure>               	
										               </a>
							                		</td>
							                		<td>{{$status->statusable->user->name}}</td>
							                		<td><a href="{{route('roles.show', $status->statusable->role->slug)}}">
							                			{{$status->statusable->role->name}}</a>
							                		</td>
									              	<td>{{$status->statusable->user->created_at}}</td>
									            </tr>

								            @endforeach
								         	</tbody>
								      	</table>
									</div>
								</div>
                            </div>
                            <div id="tab-3-hold" class="tab-pane">
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
								         	@foreach ($bann_pr as $status)
									            <tr>
									               <td>
										               	<a href="{{route($status->statusable_type . '.show', $status->statusable->slug)}}">
										               	<figure>
											            	<img height="50" width="50" src="{{URL::to('/images/' . $status->statusable->image)}}" alt="{{ $status->statusable->title }}" name="{{ $status->statusable->title }}">
											            	<span class="pl-5"> {{$status->statusable->title}}</span>
											            </figure>               	
										               </a>
							                		</td>
							                		<td>{{$status->statusable->user->name}}</td>
							                		<td><a href="{{route('roles.show', $status->statusable->role->slug)}}">
							                			{{$status->statusable->role->name}}</a>
							                		</td>
									              	<td>{{$status->statusable->user->created_at}}</td>
									            </tr>
								            @endforeach
								         	</tbody>
								      	</table>
									</div>
								</div>
                            </div>
                            <div id="tab-4-trashed" class="tab-pane">
                                <div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>Trashed users</h3></div>
										@if(count($trashed_pr) > 0)
											<table class="table table-striped table-hover">
									         <thead>
									            <tr>
									                <th>User</th>
									                <th>Role</th>
									                <th>Status</th>
									                <th>Date</th>
									            </tr>
									         </thead>
									         <tbody>
									         	@foreach ($trashed_pr as $profile)
									            <tr>
									               <td><a href="{{route('profiles.show', $profile->slug)}}">
										               	<figure>
											            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $profile->image)}}" alt="{{ $profile->title }}" name="{{ $profile->title }}"><span class="pl-5"> {{$profile->user->name}}</span>
											            </figure>
										               	
										               </a>
										           </td>
									               <td>{{$profile->role->name}}</td>
									               <td>{{$profile->status->name}}</td>
									               <td>{{$profile->created_at}}</td>
									               <td><a href="{{route('profiles.restore', $profile->slug)}}">Restore</a></td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('profiles.edit', $profile->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['profiles.destroy', $profile->slug], 'method' => 'DELETE']) !!}

															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

															{!! Form::close() !!}
														</div>
									               </td>
									            </tr>
									            @endforeach
									         </tbody>
									      	</table>
									      	<div class="text-center">
										   
										    </div>
										@else
											<div class="col-md-12"><h3>No trashed users!</h3></div>
										@endif
									</div>	
								</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


