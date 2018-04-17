@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total profile: {{count($all_profiles)}}</span> </h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> All {!! $page_name !!}s
                    </li>
                    <span class="pull-right"><i class="fas fa-pencil-alt"></i> <a href="{{route('profiles.create')}}">Create a new profile</a></span>
                </ol>
                
                <hr>
			    <div id="contenido"  class="card">
					<div class="row">
							@if(count($profiles) > 0)
							<table class="table table-striped table-hover">
						         <thead>
						            <tr>
						                <th>User</th>
						                <th>Role</th>
						                <th>Date</th>
						            </tr>
						         </thead>
						         <tbody>
						         	@foreach ($profiles as $profile)
						            <tr>
						               <td><a href="{{route('profiles.show', $profile->slug)}}">
							               	<figure>
								            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $profile->image)}}" alt="{{ $profile->title }}" name="{{ $profile->title }}"><span class="pl-5"> {{$profile->user->name}}</span>
								            </figure>
							               	
							               </a>
							           </td>
						               <td>{{$profile->role->name}}</td>
						               <td>{{$profile->created_at}}</td>
						               <td>
						               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('profiles.edit', $profile->slug)}}">Edit</a>
							            	<div class="col-md-6">
								            	{!! Form::open(['route' => ['profiles.destroy', $profile->slug], 'method' => 'DELETE']) !!}

												{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

												{!! Form::close() !!}
											</div>
						               </td>
						            </tr>
						            @endforeach
						         </tbody>
						      </table>
							@else
								<div class="col-md-12"><h3>No {!! $page_name !!}</h3></div>
							@endif
					</div>	
					<div class="text-center">
				        {{ $profiles->links() }}
				    </div>		
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


