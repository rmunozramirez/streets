@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
		    <h2>Trashed {!! $page_name !!}
		    	<span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a href="{{route('categories.index')}}">Back to Categories</a>
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
					                <th>Category</th>
					                <th>Deleted at</th>
					            </tr>
					         </thead>
					         <tbody>
					         	@foreach ($element as $cat)
					            <tr>
					               <td><a href="{{route('categories.show', $cat->slug)}}">
						               	<figure>
							            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $cat->image)}}" alt="{{ $cat->title }}" name="{{ $cat->title }}"><span class="pl-5"> {{$cat->title}}</span>
							            </figure>
						               	
						               </a>
						           </td>
					               <td>{{$cat->deleted_at}}</td>
					               	<td>	<a href="{{route('categories.restore', $cat->slug)}}">Restore</a></td>
					               <td>
						            	<div class="col-md-6">
							            	{!! Form::open(['route' => ['categories.kill', $cat->slug], 'method' => 'DELETE']) !!}
											{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
											{!! Form::close() !!}
										</div>
					               </td>
					            </tr>
					            @endforeach
					         </tbody>
					      	</table>
						@else
							<h3>No trashed Categories</h3>
						@endif
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


			                
