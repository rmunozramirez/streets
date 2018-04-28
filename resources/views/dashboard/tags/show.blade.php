@extends('dashboard.index')
@section ('title', "| Tag: $element->title")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
			<h2>{!! $element->title !!}
            	<span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('tags.index')}}">Back to tags</a>
                </span></h2>
            </h2>
            <hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-channels"> <i class="fa fa-users"></i>Channels</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-profiles"><i class="fa fa-ban"></i>Posts</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-3-pages"><i class="fa fa-ban"></i>Pages</a>
			            </li>
			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-channels" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		@if( $element->channels ) 
					                <h3>Channels
					                	<span class="mt-3 pull-right">Total Channels: {{$element->channels->count()}}</span>
				                	</h3>
					                <hr>
									<div id="contenido"  class="card">
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
								         		@foreach ($element->channels as $channel)
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
									</div>
									@else <h2>{!! $element->user_name !!} does not have a channel</h2>
									@endif
								</div>	
							</div>
			            </div>
			            <div id="tab-2-profiles" class="tab-pane">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		@if( $element->posts ) 
					                <h3>Posts
						                <span class="mt-3 pull-right">Total Posts: {{$element->posts->count()}}</span>
						            </h3>
					                <hr>
									<div id="contenido"  class="card">
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
								         		@foreach ($element->posts as $post)
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
										              	<td>{{$post->created_at}}</td>
										               <td>
										               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $post->slug)}}">Edit</a>
											            	<div class="col-md-6">
												            	{!! Form::open(['route' => ['channels.destroy', $post->slug], 'method' => 'DELETE']) !!}

																{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

																{!! Form::close() !!}
															</div>
										               </td>
								                	</tr>
								            	@endforeach
								         	</tbody>
								      	</table>
									</div>
									@else <h2>{!! $element->user_name !!} does not have a post</h2>
									@endif
								</div>	
							</div>
			            </div>
			            <div id="tab-3-pages" class="tab-pane">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		@if( $element->pages ) 
					                <h3>Posts
						                <span class="mt-3 pull-right">Total Pages: {{$element->pages->count()}}</span>
						            </h3>
					                <hr>
									<div id="contenido"  class="card">
										<table class="table table-striped table-hover">
									         <thead>
									            <tr>
									                <th>Page</th>
									                <th>Created at</th>
									            </tr>
									         </thead>
									         <tbody>
								         		@foreach ($element->pages as $page)
							                	<tr>
							                		<td>
														<a href="{{route('pages.show', $page->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $page->image)}}" alt="{{ $page->title }}" name="{{ $page->title }}">
												            	<span class="pl-5"> {{$page->title}}</span>
												            </figure>
							                			</a>
							                		</td>
									              	<td>{{$page->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('pages.edit', $page->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['pages.destroy', $page->slug], 'method' => 'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
															{!! Form::close() !!}
														</div>
									               </td>
							                	</tr>
								            	@endforeach
								         	</tbody>
								      	</table>
									</div>
									@else <h2>{!! $element->user_name !!} does not have a post</h2>
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
<!-- End Profile panel  -->
	
@endsection


