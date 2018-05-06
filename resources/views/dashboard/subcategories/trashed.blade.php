@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
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
					         	@foreach ($element as $element)
					            <tr>
					               <td>	
					               		@foreach($element->images as $image)
			                    			@if($image->imageable_type === 'subcategories')
								               <a href="{{route('subcategories.show', $element->slug)}}"><figure>
									            	<img class="mr-4 img-circle" height="50" width="50"  src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
									            	{{$element->title}}
									            </figure>
									            </a>
									        @else
									        <div class="text-center">
									        	<i class="fa fa-image fa-5x pb-4"></i><br>
								            </div>
								        	@endif
								        @endforeach
						               </a>
						           </td>
					               <td><a href="{{route('categories.show', $element->category->slug)}}">{{$element->category->title}}</a></td>
					               <td>{{$element->deleted_at}}</td>
					               <td>
					               		<a href="{{route('subcategories.restore', $element->slug)}}">Restore</a>
					               </td>
					               <td>
						            	{!! Form::open(['route' => ['subcategories.kill', $element->slug], 'method' => 'DELETE']) !!}
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


			                
			          