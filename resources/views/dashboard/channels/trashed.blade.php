@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">

			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">
                    		<div class="col-md-12">
                    			<h3>Trashed users</h3>
                    		</div>
							@if(count($trash_ch) > 0)
								<table class="table table-striped table-hover">
						         <thead>
						            <tr>
						                <th>Channel</th>
						                <th>Profile</th>
						                <th>Date</th>
						            </tr>
						         </thead>
						         <tbody>
						         	@foreach ($trash_ch as $channel)
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
								<div class="col-md-12"><h3>No trashed channels!</h3></div>
							@endif
						</div>	
					</div>     
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


