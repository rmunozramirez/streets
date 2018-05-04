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
			            	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-thumbs-up"></i>Active images</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-banned"><i class="fa fa-ban"></i>From banned profile</a>
			            </li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Active Images</h3>
			                		</div>
		                		      @foreach ($all_ as $image)
								      <div class="the_thumbnail">
								           <img class="image" src="{{URL::to('/images/' . $image->title ) }}" alt="{{$image->title}}" name="$image->title" >
								            <div class="overlay">
								              <a href="{{route('images.show', $image->slug)}}">
								                  <div class="text small">{{$image->name}}</div>
								              </a>
								            </div>
								        </div>
								      @endforeach 
								</div>	
							</div>
			            </div>
			            <div id="tab-2-banned" class="tab-pane">
			            	<div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Inactive Channels</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Image</th>
								                <th>Profile</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($all_ as $image)
								         		@if($image->statuses[0]->status === 'banned')
							                	<tr>
							                		<td>
														<a href="{{route('images.show', $image->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $image->title)}}" alt="{{ $image->title }}" name="{{ $image->title }}">
												            	<span class="pl-5"> {{$image->title}}</span>
												            </figure>
							                			</a>
							                		</td>			                		
							                		<td>
							                			<a href="{{route('profiles.show', $image->profile->slug)}}">
								                			{{$image->profile->title}}
								                		</a>
							                		</td>
									              	<td>{{$image->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('images.edit', $image->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['images.destroy', $image->slug], 'method' => 'DELETE']) !!}

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


