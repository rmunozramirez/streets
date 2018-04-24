@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active Categories</a>
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
								                <th>Category</th>
								                <th>Subcategories</th>
								                <th>Chanels</th>
								                <th>Date</th>
								            </tr>
								         </thead>
							         	<tbody>
							         		@foreach ($all_ as $cat)
							         		@if($cat->statuses[0]->status === 'active')
								            <tr>
								               <td>
								               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $cat->image ) }}" alt="{{$cat->title}}" > 
								               		<a href="{{route('categories.show', $cat->slug)}}">
								               		{{$cat->title}}
								               		</a>
								               	</td>
								               <td>{{count($cat->subcategories)}}</td>
								               <td>{{count($cat->channels)}}</td>
								               <td>{{$cat->created_at}}</td>
								               <td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('categories.edit', $cat->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['categories.destroy', $cat->slug], 'method' => 'DELETE']) !!}
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
			                			<h3>Inactive Categories</h3>
			                		</div>
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Category</th>
								                <th>Subcategories</th>
								                <th>Chanels</th>
								                <th>Date</th>
								            </tr>
								         </thead>
							         	<tbody>
							         		@foreach ($all_ as $cat)
							         		@if($cat->statuses[0]->status === 'inactive')
								            <tr>
								               <td>
								               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $cat->image ) }}" alt="{{$cat->title}}" > 
								               		<a href="{{route('categories.show', $cat->slug)}}">
								               		{{$cat->title}}
								               		</a>
								               	</td>
								               <td>{{count($cat->subcategories)}}</td>
								               <td>{{count($cat->channels)}}</td>
								               <td>{{$cat->created_at}}</td>
								               <td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('categories.edit', $cat->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['categories.destroy', $cat->slug], 'method' => 'DELETE']) !!}

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


