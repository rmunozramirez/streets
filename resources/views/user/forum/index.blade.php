@extends('user.index')
@section ('title', "| Forum ")
@section('content')

<div class="container left-right-shadow">
	<div class="inside">
		<h2>Forum
			<span class="mt-3 small pull-right">
				<i class="fa fa-plus"></i> <a href="{{route('forum.create')}}">Create a discussion</a>  	
	        </span>
	    </h2>
		<div id="contenido">
			<!-- tabs -->
			<div class="sky-tabs sky-tabs-amount-2 sky-tabs-pos-top-justify sky-tabs-anim-fade sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-comments"></i> All {{count($all_)}} {!! ucfirst(trans($page_name)) !!}</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="fa fa-user"></i> My discussions</span></span></label>

				<ul>
					<li class="sky-tab-content-1">
						<div class="col-md-4">
							<h4>Filters</h4>
						</div>				
	                	<div class="col-md-8 pt-4">
	                		<h3>Active discussions</h3>
							<table class="table table-hover mt-5">
						         <tbody>
					         		@foreach ($all_ as $discussion)
					         			@if($discussion->statuses[0]->status === 'active')
					                	<tr>
					                		<td>
					                			<div class="row">
					                				<div class="col-md-2">
						                				<div class="replies">
						                					{{$discussion->replies->count()}}
						                				</div>
						                				<span class="answers small text-center">Answers</span>
					                				</div>
					                				<div class="col-md-10">
	                									<h3><a href="{{route ('forum.show', $discussion->slug)}}">{{$discussion->title}}</a>
	                										@if($discussion->hasBestAnswer())
																<span class="danger small"><i class="fa fa-ban"></i>CLOSED</span>
															@endif
	                									</h3>
	                									<div class="pull-left">
															Author: <a href="">{{$discussion->profile->title}}</a>
														</div>

					                				</div>
					                			</div>
					                			<div class="row">
					                				<div class="col-md-5 col-md-offset-2 pt-3">
					                					<div class="breadcrumb small">
						                					<div class="pull-right">
															 	Likes: <a href="">{{ $discussion->likes->count() }}</a>
																Created at: {{$discussion->created_at->diffForHumans() }}
						                					</div>
					                					</div>
					                				</div>
		
					                				<div class="col-md-5 pt-3">
						                				<div class="pull-right">
						                				@foreach($discussion->tags as $tag)
											        		<a class="btn btn-default btn-xs mr-1" href="{{route('tags.show', $tag->slug)}}">
														    	{!! $tag->title !!}
														    </a>
														@endforeach    
														</div>
													</div>
					                			</div>
	
					                		</td>
					                	</tr>

					                	@endif
					            	@endforeach
					         	</tbody>
					      	</table>
						</div>
					</li>
					
					<li class="sky-tab-content-2">
	                	<div class="col-md-12 pt-4">
	                		<h3>My discussions</h3>
							<table class="table table-striped table-hover">
						         <thead>
						            <tr>
						                <th>Image</th>
						                <th>Title</th>
						                <th>Iniatiator</th>
						                <th>Answer</th>
						                <th>Likes</th>
						                <th>Created</th>
						            </tr>
						         </thead>
						         <tbody>
					         		@foreach ($all_ as $discussion)
					         			@if($discussion->profile->user->id === Auth::user()->id)
					                	<tr>
					                		<td>
					                			@if($discussion->hasBestAnswer())
													<span class="danger"><i class="fa fa-ban"></i> CLOSED</span>
												@endif
								               	<figure>
									            	<img height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
									            </figure>	
					                		</td>
					                		<td>
					                			<a href="{{route('forum.show', $discussion->slug)}}">
													{{$discussion->title}}
												</a>
					                		</td>	
					                		<td>
					                			<a href="{{route('forum.show', $discussion->profile->slug)}}">
					                				{{$discussion->profile->title}}
					                			</a>
					                		</td>	
					                		<td>
					                			{{$discussion->replies->count()}}
					                		</td>
					                		
					                		<td>{{$discussion->likes->count()}}</td>
				
							              	<td>{{$discussion->created_at->format('m/d/Y')}}</td>
							               <td>
							               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('forum.edit', $discussion->slug)}}">Edit</a>
								            	<div class="col-md-6">
									            	{!! Form::open(['route' => ['forum.destroy', $discussion->slug], 'method' => 'DELETE']) !!}
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
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

	
@endsection


