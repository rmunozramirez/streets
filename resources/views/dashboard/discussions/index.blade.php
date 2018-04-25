@extends('dashboard.index')
@section ('title', "| Discussions")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
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
					            	<div class="col-md-6">
						            	{!! Form::open(['route' => ['discussions.destroy', $discussion->slug], 'method' => 'DELETE']) !!}

										{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

										{!! Form::close() !!}
									</div>
				               </td>
		                	</tr>
		            	@endforeach
	            	
		         	</tbody>
		      	</table>		      	
			</div>
		</div>
	</div>
</div>

	
@endsection


