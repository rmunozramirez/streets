@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
		    <h2>Trashed {!! $page_name !!}
		    	<span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a href="{{route('subcategories.index')}}">Back to subcategories</a>
                </span>
                </h2>
             <hr />
			<div id="contenido"  class="card">
				<div class="row">
                	<div class="col-md-12 pt-4">
                		<div class="col-md-12">
                		</div>
						@if(count($element) > 0)
							<table class="table table-striped table-hover">
					         <thead>
					            <tr>
					                <th>Subcategory</th>
					                <th>Category</th>
					                <th>Trashed at</th>
					            </tr>
					         </thead>
					         <tbody>
					         	@foreach ($element as $sub)
					            <tr>
					               <td><a href="{{route('subcategories.show', $sub->slug)}}">
						               	<figure>
							            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $sub->image)}}" alt="{{ $sub->title }}" name="{{ $sub->title }}"><span class="pl-5"> {{$sub->title}}</span>
							            </figure>
						               	
						               </a>
						           </td>
					               <td><a href="{{route('categories.show', $sub->category->slug)}}">{{$sub->category->title}}</a></td>
					               <td>{{$sub->deleted_at}}</td>
					               <td>
					               		<a href="{{route('subcategories.restore', $sub->slug)}}">Restore</a>
					               </td>
					               <td>
						            	{!! Form::open(['route' => ['subcategories.kill', $sub->slug], 'method' => 'DELETE']) !!}
										{!! Form::submit('Permanent delete', ['class' => 'btn btn-block btn-danger']) !!}
										{!! Form::close() !!}
					               </td>
					            </tr>
					            @endforeach
					         </tbody>
					      	</table>
						@else
							<h3>No trashed subcategories!</h3>
						</div>
						@endif
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


			                
			          