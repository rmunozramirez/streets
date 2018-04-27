@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Trashed profiles
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('profiles.index')}}">Back to profiles</a>
            </span></h2>
        	<hr>
			<div id="contenido"  class="card">
			    <div class="row">
			    	<div class="col-md-12 pt-4">
						@if(count($element) > 0)
							<table class="table table-striped table-hover">
					         <thead>
					            <tr>
					                <th>User</th>
					                <th>Role</th>
					                <th>Date</th>
					            </tr>
					         </thead>
					         <tbody>
					         	@foreach ($element as $profile)
					            <tr>
					               <td>
					               		<a href="{{route('profiles.show', $profile->slug)}}">
							               	<figure>
								            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $profile->image)}}" alt="{{ $profile->title }}" name="{{ $profile->title }}"><span class="pl-5"> {{$profile->user->name}}</span>
								            </figure>
										</a>
						           </td>
					               <td>{{$profile->role->name}}</td>
					               <td>{{$profile->created_at}}</td>
					               <td><a href="{{route('profiles.restore', $profile->slug)}}">Restore</a></td>
					               <td>
						            	{!! Form::open(['route' => ['profiles.kill', $profile->slug], 'method' => 'DELETE']) !!}
										{!! Form::submit('Permanent Delete', ['class' => 'btn btn-block btn-danger']) !!}
										{!! Form::close() !!}		
					               </td>
					            </tr>
					            @endforeach
					         </tbody>
					      	</table>
					      	<div class="text-center">
						   
						    </div>
						@else
							<h3>No trashed profiles!</h3>
						@endif
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


