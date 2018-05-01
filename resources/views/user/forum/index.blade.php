@extends('user.index')
@section ('title', "| $page_name")
@section('content')

<div class="container left-right-shadow">
	<div class="inside">
		<h2>All {!! $page_name !!}</h2>
		<hr />
		<div id="contenido">
			<!-- tabs -->
			<div class="sky-tabs sky-tabs-amount-2 sky-tabs-pos-top-justify sky-tabs-anim-fade sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-comments"></i> All discussions</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="fa fa-user"></i> My discussions</span></span></label>

				<ul>
					<li class="sky-tab-content-1">
						<div class="col-md-4">
							<h4>Filters</h4>
						</div>				
	                	<div class="col-md-8 pt-4">
	                		<h3>Active discussions</h3>
							<table class="table table-striped table-hover mt-5">
						         <tbody>
					         		@foreach ($all_ as $discussion)
					         			@if($discussion->statuses[0]->status === 'active')
					                	<tr>
					                		<td>
								               	<figure>
									            	<img class="img-circle mr-2" height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}"> {{$discussion->title}}
									            </figure>	
					                		</td>
					                		<td>
					                			<div class="likes">
										    		<h5>{{ $discussion->likes->count() }}</h5>
										    		Likes
										    	</div>
					                		</td>
					                		<td>
					                			<div class="btn btn-basic">
										    		<h5>{{ $discussion->replies->count() }}</h5>
										    		Replies
										    	</div>
					                		</td>

					                		<td>
					                			<a href="{{route('profiles.show', $discussion->profile->slug)}}">
					                				{{$discussion->profile->title}}
					                			</a>
					                		</td>
				
							              	<td>{{$discussion->created_at->format('m/d/Y')}}</td>
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
						         <tbody>
					         		@foreach ($all_ as $discussion)
					         			@if($discussion->statuses[0]->status === 'inactive')
					                	<tr>
					                		<td>
								               	<figure>
									            	<img height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
									            </figure>	
					                		</td>
					                		<td>
					                			<a href="{{route('discussions.show', $discussion->slug)}}">
													{{$discussion->title}}
												</a>
					                		</td>	
					                		<td>
					                			<a href="{{route('profiles.show', $discussion->profile->slug)}}">
					                				{{$discussion->profile->title}}
					                			</a>
					                		</td>	
					                		<td>
					                			{{$discussion->replies->count()}}
					                		</td>
					                		
					                		<td>{{$discussion->likes->count()}}</td>
				
							              	<td>{{$discussion->created_at->format('m/d/Y')}}</td>
							               <td>
							               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('discussions.edit', $discussion->slug)}}">Edit</a>
								            	<div class="col-md-6">
									            	{!! Form::open(['route' => ['discussions.destroy', $discussion->slug], 'method' => 'DELETE']) !!}
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


