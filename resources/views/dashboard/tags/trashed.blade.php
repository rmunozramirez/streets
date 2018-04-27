@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
    		    <h2>Trashed {!! $page_name !!}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('discussions.index')}}">Back to discussions</a>
                    </span>
	                </h2>
	             <hr />
			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">
							@if(count($element) > 0)
								<table class="table table-striped table-hover">
						         <thead>
						            <tr>
						                <th>Channel</th>
						                <th>Profile</th>
						                <th>Date</th>
						            </tr>
						         </thead>
						         <tbody>
						         	@foreach ($element as $discussion)
						            <tr>
						               <td><a href="{{route('discussions.show', $discussion->slug)}}">
							               	<figure>
								            	<img height="50" width="50" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}"><span class="pl-5"> {{$discussion->title}}</span>
								            </figure>
							               	
							               </a>
							           </td>
						               <td><a href="{{route('profiles.show', $discussion->profile->slug)}}">{{$discussion->profile->title}}</a></td>
						               <td>{{$discussion->created_at}}</td>
						               <td>
						               		<a href="{{route('discussions.restore', $discussion->slug)}}">Restore</a>
						               </td>
						               <td>
							            	<div class="col-md-6">
								            	{!! Form::open(['route' => ['discussions.kill', $discussion->slug], 'method' => 'DELETE']) !!}

												{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

												{!! Form::close() !!}
											</div>
						               </td>
						            </tr>
						            @endforeach
						         </tbody>
						      	</table>
							@else
								<h3>No trashed discussions!</h3>
							@endif
						</div>	
					</div>     
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


