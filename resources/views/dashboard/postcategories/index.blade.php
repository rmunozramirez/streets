@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
			    <div class="tabs-container">
			        <ul class="nav nav-tabs user-tabs">
			            <li class="active">
			            	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active post categories</a>
			            </li>
			            <li class="">
			            	<a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-ban"></i>Inactive  post categories</a>
			            </li>

			        </ul>
			        <div class="tab-content">
			            <div id="tab-1-active" class="tab-pane active">
			                <div class="row">
			                	<div class="col-md-12 pt-4">
			                		<div class="col-md-12">
			                			<h3>Active post categories</h3>
			                		</div>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
							                <th>Subcategory</th>
							                <th>Posts</th>
							                <th>Date</th>
							            </tr>
							         </thead>
							         <tbody>
							         		@foreach ($all_ as $postcat)
								         		@if($postcat->statuses[0]->status === 'active')
							            <tr>
							               <td>
							               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $postcat->image ) }}" alt="{{$postcat->title}}" > 
							               		<a href="{{route('postcategories.show', $postcat->slug)}}">
							               		{{$postcat->title}}
							               		</a>
							               	</td>
							               <td>{{count($postcat->posts)}}</td>
							               <td>{{$postcat->created_at}}</td>
							               <td>
							               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('postcategories.edit', $postcat->slug)}}">Edit</a>
								            	<div class="col-md-6">
									            	{!! Form::open(['route' => ['postcategories.destroy', $postcat->slug], 'method' => 'DELETE']) !!}
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
			                			<h3>Inactive Postcategories</h3>
			                		</div>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
							                <th>Post ccategory</th>
							                <th>Posts</th>
							                <th>Date</th>
							            </tr>
							         </thead>
							         <tbody>
							         		@foreach ($all_ as $postcat)
								         		@if($postcat->statuses[0]->status === 'inactive')
							            <tr>
							               <td>
							               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $postcat->image ) }}" alt="{{$postcat->title}}" > 
							               		<a href="{{route('postcategories.show', $postcat->slug)}}">
							               		{{$postcat->title}}
							               		</a>
							               	</td>
							               <td>{{$postcat->posts}}</td>
							               <td>{{$postcat->created_at}}</td>
							               <td>
							               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('oostcategories.edit', $postcat->slug)}}">Edit</a>
								            	<div class="col-md-6">
									            	{!! Form::open(['route' => ['postcategories.destroy', $postcat->slug], 'method' => 'DELETE']) !!}
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


