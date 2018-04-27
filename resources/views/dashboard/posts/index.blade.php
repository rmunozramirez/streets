@extends('dashboard.index')
@section ('title', "| Posts")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
		    <h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-active"><i class="fa fa-eye"></i> Active posts</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-eye-slash"></i> Inactive posts</a>
			            </li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Active posts</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Post</th>
								                <th>Post category</th>
								                <th>Author</th>
								                <th>Answers</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($all_ as $post)
								         		@if($post->statuses[0]->status === 'active')
							                	<tr>
							                		<td>
														<a href="{{route('posts.show', $post->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $post->image)}}" alt="{{ $post->title }}" name="{{ $post->title }}">
												            	<span class="pl-5"> {{$post->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('postcategories.show', $post->postcategory->slug)}}">
							                			{{$post->postcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $post->profile->slug)}}">
								                			{{$post->profile->title}}
								                		</a>
							                		</td>
									              	<td>Comments</td>
									              	<td>{{$post->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('posts.edit', $post->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['posts.destroy', $post->slug], 'method' => 'DELETE']) !!}

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
			                			<h3>Inactive posts</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Post</th>
								                <th>Post category</th>
								                <th>Author</th>
								                <th>Answers</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
								         	@foreach ($all_ as $post)
								         		@if($post->statuses[0]->status === 'inactive')
							                	<tr>
							                		<td>
														<a href="{{route('posts.show', $post->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $post->image)}}" alt="{{ $post->title }}" name="{{ $post->title }}">
												            	<span class="pl-5"> {{$post->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('roles.show', $post->postcategory->slug)}}">
							                			{{$post->postcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $post->profile->slug)}}">
								                			{{$post->profile->title}}
								                		</a>
							                		</td>
									              	<td>Comments</td>
									              	<td>{{$post->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('posts.edit', $post->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['posts.destroy', $post->slug], 'method' => 'DELETE']) !!}

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


