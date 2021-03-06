@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
			<div id="contenido"  class="card">
			    <div class="row">
			    	<div class="col-md-12 pt-4">
			    		<div class="col-md-12"><h3>Trashed users</h3></div>
						@if(count($trash_cat) > 0)
							<table class="table table-striped table-hover">
					         <thead>
					            <tr>
					                <th>User</th>
					                <th>Role</th>
					                <th>Date</th>
					            </tr>
					         </thead>
					         <tbody>
					         	@foreach ($trash_cat as $category)
					            <tr>
					               <td>
					               		<a href="{{route('categories.show', $category->slug)}}">
							               	<figure>
								            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $category->image)}}" alt="{{ $category->title }}" name="{{ $category->title }}"><span class="pl-5"> {{$category->user->name}}</span>
								            </figure>
										</a>
						           </td>
					               <td>{{$category->role->name}}</td>
					               <td>{{$category->created_at}}</td>
					               <td><a href="{{route('categories.restore', $category->slug)}}">Restore</a></td>
					               <td>
						            	{!! Form::open(['route' => ['categories.kill', $category->slug], 'method' => 'DELETE']) !!}
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
							<div class="col-md-12"><h3>No trashed users!</h3></div>
						@endif
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


