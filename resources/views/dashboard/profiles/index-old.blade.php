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
	                        <li class="active"><a data-toggle="tab" href="#tab-3-active"> <i class="fa fa-users"></i>Active Users</a></li>
	                        <li class=""><a data-toggle="tab" href="#tab-4-banned"><i class="fa fa-ban"></i>Banned</a></li>
	                        <li class=""><a data-toggle="tab" href="#tab-6-hold"><i class="fa fa-pause-circle"></i>On Hold Users</a></li>
	                        <li class=""><a data-toggle="tab" href="#tab-5-trashed"><i class="fa fa-trash"></i>Trashed</a></li>
	                    </ul>
                        <div class="tab-content">
                            <div id="tab-3-active" class="tab-pane active">
                                <div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>Active Users</h3></div>
										@if(count($active_pr) > 0)
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
									         	@foreach ($active_pr as $profile)
									            <tr>
									               <td><a href="{{route('profiles.show', $profile->slug)}}">
										               	<figure>
											            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $profile->image)}}" alt="{{ $profile->title }}" name="{{ $profile->title }}"><span class="pl-5"> {{$profile->user->name}}</span>
											            </figure>
										               	
										               </a>
										           </td>
									               <td>{{$profile->role->name}}</td>
									               <td><a href="{{route('status.index')}}">{{$profile->status->name}}</a></td>
									               <td>{{$profile->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-4" href="{{route('profiles.edit', $profile->slug)}}">Edit</a>
									               		<a type="button" class="col-md-4" href="{{route('profiles.bann', $profile->slug)}}">Ban</a>
										            	<div class="col-md-4">
											            	{!! Form::open(['route' => ['profiles.destroy', $profile->slug], 'method' => 'DELETE']) !!}

															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

															{!! Form::close() !!}

									               </td>
									            </tr>
									            @endforeach
									         </tbody>
									      	</table>
									      	<div class="text-center">
									        	
									    	</div>
										@else
											<div class="col-md-12"><h3>There are not active users!</h3></div>
										@endif
									</div>	
								</div>
                            </div>
                            <div id="tab-6-hold" class="tab-pane">
                            	<div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>On Hold Users</h3></div>
										@if(count($on_hold_pr) > 0)
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
									         	@foreach ($on_hold_pr as $profile)
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
									               <td>
									               		<a type="button" class="col-md-4" href="{{route('profiles.allow', $profile->slug)}}">Activate</a>
									               		<a type="button" class="col-md-4" href="{{route('profiles.edit', $profile->slug)}}">Edit</a>
										            	<div class="col-md-4">
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
										<div class="col-md-12"><h3>There are not On Hold users!</h3></div>
										@endif
									</div>	
								</div>
                            </div>
                            <div id="tab-4-banned" class="tab-pane">
                            	<div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>Banned Users</h3></div>
										@if(count($bann_pr) > 0)
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
									         	@foreach ($bann_pr as $profile)
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
									               <td>
									               		<a type="button" class="col-md-4" href="{{route('profiles.allow', $profile->slug)}}">Allow</a>
									               		<a type="button" class="col-md-4" href="{{route('profiles.edit', $profile->slug)}}">Edit</a>
										            	<div class="col-md-4">
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
										<div class="col-md-12"><h3>There are not banned users!</h3></div>
										@endif
									</div>	
								</div>
                            </div>
                            <div id="tab-5-trashed" class="tab-pane">
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


