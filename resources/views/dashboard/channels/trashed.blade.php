@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
    		    <h2>Trashed {!! $page_name !!}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('channels.index')}}">Back to channels</a>
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
						         	@foreach ($element as $channel)
						            <tr>
						               <td><a href="{{route('channels.show', $channel->slug)}}">
							               	<figure>
								            	<img height="50" width="50" src="{{URL::to('/images/' . $channel->image)}}" alt="{{ $channel->title }}" name="{{ $channel->title }}"><span class="pl-5"> {{$channel->title}}</span>
								            </figure>
							               	
							               </a>
							           </td>
						               <td><a href="{{route('profiles.show', $channel->profile->slug)}}">{{$channel->profile->title}}</a></td>
						               <td>{{$channel->created_at}}</td>
						               <td>
						               		<a href="{{route('channels.restore', $channel->slug)}}">Restore</a>
						               </td>
						               <td>
							            	<div class="col-md-6">
								            	{!! Form::open(['route' => ['channels.kill', $channel->slug], 'method' => 'DELETE']) !!}

												{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

												{!! Form::close() !!}
											</div>
						               </td>
						            </tr>
						            @endforeach
						         </tbody>
						      	</table>
							@else
								<h3>No trashed channels!</h3>
							@endif
						</div>	
					</div>     
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


