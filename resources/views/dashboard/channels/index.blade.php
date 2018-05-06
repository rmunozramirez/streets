@extends('dashboard.index')
@section ('title', "| Channels")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		    <h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-thumbs-up"></i>Active channels</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-coffee"></i>Inactive channels</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-3-banned"><i class="fa fa-ban"></i>From banned profile</a>
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
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($all_ as $element)
								         		@if($element->statuses[0]->status === 'active')
							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $element->slug)}}">
									               		@foreach($element->images as $image)
							                    			@if($image->imageable_type === 'channels')
																<figure>
													            	<img class="mr-4 img-circle" height="50" width="50"  src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
													            	{{$image->title}}
													            </figure>
													        @else
													        <div class="text-center">
													        	<i class="fa fa-image fa-5x pb-4"></i><br>
												            </div>
												        	@endif
												        @endforeach	
							                			</a>
							                		</td>
							                		<td><a href="{{route('subcategories.show', $element->subcategory->slug)}}">
							                			{{$element->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $element->profile->slug)}}">
								                			{{$element->profile->title}}
								                		</a>
							                		</td>
									              	<td>{{$element->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $element->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $element->slug], 'method' => 'DELETE']) !!}

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
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($all_ as $element)
								         		@if($element->statuses[0]->status === 'inactive')
							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $element->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}">
												            	<span class="pl-5"> {{$element->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $element->subcategory->slug)}}">
							                			{{$element->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $element->profile->slug)}}">
								                			{{$element->profile->title}}
								                		</a>
							                		</td>
									              	<td>{{$element->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $element->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $element->slug], 'method' => 'DELETE']) !!}

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
			                		<div class="col-md-12">
			                			<h3>Inactive Channels</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Channel</th>
								                <th>Subcategory</th>
								                <th>Profile</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($all_ as $element)
								         		@if($element->statuses[0]->status === 'banned')
							                	<tr>
							                		<td>
														<a href="{{route('channels.show', $element->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}">
												            	<span class="pl-5"> {{$element->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $element->subcategory->slug)}}">
							                			{{$element->subcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $element->profile->slug)}}">
								                			{{$element->profile->title}}
								                		</a>
							                		</td>
									              	<td>{{$element->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $element->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $element->slug], 'method' => 'DELETE']) !!}

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


