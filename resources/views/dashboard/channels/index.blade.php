@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total channels: {{count($all_ch)}}</span> </h2>
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
	                        <li class=""><a data-toggle="tab" href="#tab-5-trashed"><i class="fa fa-trash"></i>Trashed</a></li>
	                    </ul>
                        <div class="tab-content">
                            <div id="tab-3-active" class="tab-pane active">
                                <div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>Active Channels</h3></div>
										@if(count($active_ch) > 0)
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
									         	@foreach ($active_ch as $channel)
							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $channel->statusable->channel->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $channel->statusable->channel->image)}}" alt="{{ $channel->statusable->channel->title }}" name="{{ $channel->statusable->channel->title }}">
												            	<span class="pl-5"> {{$channel->statusable->channel->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->statusable->channel->subcategory->slug)}}">
							                			{{$channel->statusable->channel->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $channel->statusable->channel->profile->slug)}}">
								                			{{$channel->statusable->channel->profile->title}}
								                		</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->statusable->role->slug)}}">
							                			{{$channel->statusable->role->name}}</a>
							                		</td>
									              	<td>{{$channel->statusable->user->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $channel->statusable->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $channel->slug], 'method' => 'DELETE']) !!}

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
											<div class="col-md-12"><h3>There are not active channels!</h3></div>
										@endif
									</div>	
								</div>
                            </div>
                            <div id="tab-4-banned" class="tab-pane">
                            	<div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>Banned Channels</h3></div>
										@if(count($bann_ch) > 0)
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
									         	@foreach ($bann_ch as $channel)
									            							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $channel->statusable->channel->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $channel->statusable->channel->image)}}" alt="{{ $channel->statusable->channel->title }}" name="{{ $channel->statusable->channel->title }}">
												            	<span class="pl-5"> {{$channel->statusable->channel->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->statusable->channel->subcategory->slug)}}">
							                			{{$channel->statusable->channel->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $channel->statusable->channel->profile->slug)}}">
								                			{{$channel->statusable->channel->profile->title}}
								                		</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $channel->statusable->role->slug)}}">
							                			{{$channel->statusable->role->name}}</a>
							                		</td>
									              	<td>{{$channel->statusable->user->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $channel->statusable->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $channel->slug], 'method' => 'DELETE']) !!}

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
										@if(count($trash_ch) > 0)
											<table class="table table-striped table-hover">
									         <thead>
									            <tr>
									                <th>Channel</th>
									                <th>Profile</th>
									                <th>Status</th>
									                <th>Date</th>
									            </tr>
									         </thead>
									         <tbody>
									         	@foreach ($trash_ch as $channel)
									            <tr>
									               <td><a href="{{route('channels.show', $channel->slug)}}">
										               	<figure>
											            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $channel->image)}}" alt="{{ $channel->title }}" name="{{ $channel->title }}"><span class="pl-5"> {{$channel->title}}</span>
											            </figure>
										               	
										               </a>
										           </td>
									               <td><a href="{{route('profiles.show', $channel->profile->slug)}}">{{$channel->profile->user_name}}</a></td>
									               <td><a href="">{{$channel->status->name}}</a></td>
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
									            @endforeach
									         </tbody>
									      	</table>
									      	<div class="text-center">
										        {{ $trash_ch->links() }}
										    </div>
										@else
											<div class="col-md-12"><h3>No trashed channels!</h3></div>
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


