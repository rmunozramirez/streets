@extends('dashboard.index')
@section ('title', "| Subcategories")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active Subcategories</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-ban"></i>Inactive</a>
			            </li>

			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Active Subcategories</h3>
			                		</div>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
							                <th>Subcategory</th>
							                <th>In Category</th>
							                <th>Channels</th>
							                <th>Date</th>
							            </tr>
							         </thead>
							         <tbody>
							         		@foreach ($all_ as $element)
								         		@if($element->statuses[0]->status === 'active')
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
							               	</td>
							               <td><a href="{{route('categories.show', $element->category->slug)}}">
							               		{{$element->category->title}}
							               		</a></td>
							               <td>{{count($element->channels)}}</td>
							               <td>{{$element->created_at}}</td>
							               <td>
							               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('subcategories.edit', $element->slug)}}">Edit</a>
								            	<div class="col-md-6">
									            	{!! Form::open(['route' => ['subcategories.destroy', $element->slug], 'method' => 'DELETE']) !!}
													{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
													{!! Form::close() !!}
												</div>
							               </td>
							            </tr>
							                	@endif
							            	@endforeach
							         	</tbody>
							      	</table>
								</div>	
							</div>
			            </div>
			            <div id="tab-2-inactive" class="tab-pane">
			            	<div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Inactive Subcategories</h3>
			                		</div>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
							                <th>Subcategory</th>
							                <th>In Category</th>
							                <th>Channels</th>
							                <th>Date</th>
							            </tr>
							         </thead>
							         <tbody>
							         		@foreach ($all_ as $element)
								         		@if($element->statuses[0]->status === 'inactive')
							            <tr>
							               <td>
							               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $element->image ) }}" alt="{{$element->title}}" > 
							               		<a href="{{route('subcategories.show', $element->slug)}}">
							               		{{$element->title}}
							               		</a>
							               	</td>
							               <td><a href="{{route('categories.show', $element->category->slug)}}">
							               		{{$element->category->title}}
							               		</a></td>
							               <td>{{count($element->channels)}}</td>
							               <td>{{$element->created_at}}</td>
							               <td>
							               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('subcategories.edit', $element->slug)}}">Edit</a>
								            	<div class="col-md-6">
									            	{!! Form::open(['route' => ['subcategories.destroy', $element->slug], 'method' => 'DELETE']) !!}

													{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

													{!! Form::close() !!}
												</div>
							               </td>
							            </tr>
							                	@endif
							            	@endforeach
							         	</tbody>
							      	</table>
								</div>	
							</div>
			            </div>

			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

@endsection


