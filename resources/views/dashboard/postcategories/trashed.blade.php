@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
		    <h2>Trashed {!! $page_name !!}
		    	<span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a href="{{route('postcategories.index')}}">Back to postcategories</a>
                </span>
                </h2>
             <hr />
			<div id="contenido"  class="card">
				<div class="row">
                	<div class="col-md-12 pt-4">
                		<div class="col-md-12">
                		</div>
						@if(count($trash_postcat) > 0)
							<table class="table table-striped table-hover">
					         <thead>
					            <tr>
					                <th>Subcategory</th>
					                <th>Created at</th>
					                <th>Trashed at</th>
					            </tr>
					         </thead>
					         <tbody>
					         	@foreach ($trash_postcat as $postcat)
					            <tr>
					               <td><a href="{{route('postcategories.show', $postcat->slug)}}">
						               	<figure>
							            	<img class="" height="50" src="{{URL::to('/images/' . $postcat->image)}}" alt="{{ $postcat->title }}" name="{{ $postcat->title }}"><span class="pl-5"> {{$postcat->title}}</span>
							            </figure>
						               	
						               </a>
						           </td>
					               <td>{{$postcat->created_at}}</td>
					               <td>{{$postcat->deleted_at}}</td>
					               <td>
					               		<a href="{{route('postcategories.restore', $postcat->slug)}}">Restore</a>
					               </td>
					               <td>
						            	{!! Form::open(['route' => ['postcategories.kill', $postcat->slug], 'method' => 'DELETE']) !!}
										{!! Form::submit('Permanent delete', ['class' => 'btn btn-block btn-danger']) !!}
										{!! Form::close() !!}
					               </td>
					            </tr>
					            @endforeach
					         </tbody>
					      	</table>
						@else
							<h3>No trashed postcategories!</h3>
						</div>
						@endif
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


			                
			          