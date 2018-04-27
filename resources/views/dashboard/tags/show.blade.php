@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $element->title !!}
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('tags.index')}}"> Back to Tags</a>
	            	<i class="fa fa-pencil"></i><a type="button" href="{{route('tags.edit', $element->slug)}}"> Edit</a>
	            </span>
	        </h2>
        	<hr>
			<table class="table table-striped table-hover">
		         <thead>
		            <tr>
		                <th>Tag</th>
		                <th>Profiles</th>
		                <th>Channels</th>
		                <th>Posts</th>
		                <th>Discussions</th>
		                <th>Pages</th>
		            </tr>
		         </thead>
		         <tbody>
	         		@foreach ($all_ as $tag)
	                	<tr>
	                		<td>
	                			<a href="{{route('tags.show', $tag->slug)}}">
									{{$tag->title}}
								</a>
	                		</td>	
	                		<td>{{$tag->profiles->count()}}</td>
	                		<td>{{$tag->channels->count()}}</td>
	                		<td>{{$tag->posts->count()}}</td>
	                		<td>{{$tag->discussions->count()}}</td>
	                		<td>{{$tag->pages->count()}}</td>
	                	</tr>
	            	@endforeach
	         	</tbody>
	      	</table>
		</div>
	</div>
</div>
<!-- End Profile panel  -->

<!-- Channel panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
	        	<div class="inside">
					@if( $element->channels ) 
		                <h2>Channels: {{$element->channels->count()}}</h2>
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
<!-- End Channel panel  -->

<!-- Discussions panel  -->

<!-- End Discussions panel  -->
	
@endsection


