@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total channels: {{count($all_sub)}}</span> </h2>
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
                    <div class="tabs-container">
                        <ul class="nav nav-tabs user-tabs">
	                        <li class="active">
	                        	<a data-toggle="tab" href="#tab-1-active"> <i class="fa fa-users"></i>Active Subcategories</a>
	                        </li>
	                        <li class="">
	                        	<a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-ban"></i>Inactive</a>
	                        </li>
	                        <li class="">
	                        	<a data-toggle="tab" href="#tab-3-trashed"><i class="fa fa-trash"></i>Trashed</a>
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
								         		@foreach ($all_sub as $sub)
									         		@if($sub->statuses[0]->status === 'active')
								            <tr>
								               <td>
								               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $sub->image ) }}" alt="{{$sub->title}}" > 
								               		<a href="{{route('subcategories.show', $sub->slug)}}">
								               		{{$sub->title}}
								               		</a>
								               	</td>
								               <td><a href="{{route('categories.show', $sub->category->slug)}}">
								               		{{$sub->category->title}}
								               		</a></td>
								               <td>{{count($sub->channels)}}</td>
								               <td>{{$sub->created_at}}</td>
								               <td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('subcategories.edit', $sub->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['subcategories.destroy', $sub->slug], 'method' => 'DELETE']) !!}

														{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

														{!! Form::close() !!}
													</div>
								               </td>
								            </tr>
								                	@endif
								            	@endforeach
								         	</tbody>
								      	</table>>
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
								         		@foreach ($all_sub as $sub)
									         		@if($sub->statuses[0]->status === 'inactive')
								            <tr>
								               <td>
								               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $sub->image ) }}" alt="{{$sub->title}}" > 
								               		<a href="{{route('subcategories.show', $sub->slug)}}">
								               		{{$sub->title}}
								               		</a>
								               	</td>
								               <td><a href="{{route('categories.show', $sub->category->slug)}}">
								               		{{$sub->category->title}}
								               		</a></td>
								               <td>{{count($sub->channels)}}</td>
								               <td>{{$sub->created_at}}</td>
								               <td>
								               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('subcategories.edit', $sub->slug)}}">Edit</a>
									            	<div class="col-md-6">
										            	{!! Form::open(['route' => ['subcategories.destroy', $sub->slug], 'method' => 'DELETE']) !!}

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
                            <div id="tab-3-trashed" class="tab-pane">
                                <div class="row">
                                	<div class="col-md-12 pt-4">
                                		<div class="col-md-12">
                                			<h3>Trashed Subcategories</h3>
                                		</div>
										@if(count($trash_sub) > 0)
											<table class="table table-striped table-hover">
									         <thead>
									            <tr>
									                <th>Channel</th>
									                <th>Profile</th>
									                <th>Status</th>
									                <th>Date</th>
									            </tr>
									         </thead>
									         <tbody>
									         	@foreach ($trash_sub as $sub)
									            <tr>
									               <td><a href="{{route('channels.show', $sub->slug)}}">
										               	<figure>
											            	<img class="img-circle" height="50" src="{{URL::to('/images/' . $sub->image)}}" alt="{{ $sub->title }}" name="{{ $sub->title }}"><span class="pl-5"> {{$sub->title}}</span>
											            </figure>
										               	
										               </a>
										           </td>
									               <td><a href="{{route('profiles.show', $sub->profile->slug)}}">{{$sub->profile->user_name}}</a></td>
									               <td><a href="">{{$sub->status->name}}</a></td>
									               <td>{{$sub->created_at}}</td>
									               <td>
									               		<a type="button" class="col-md-6 btn btn-secondary" href="{{route('channels.edit', $sub->slug)}}">Edit</a>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['channels.destroy', $sub->slug], 'method' => 'DELETE']) !!}

															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

															{!! Form::close() !!}
														</div>
									               </td>
									            </tr>
									            @endforeach
									         </tbody>
									      	</table>
									      	<div class="text-center">
										        {{ $trash_sub->links() }}
										    </div>
										@else
											<div class="col-md-12"><h3>No trashed channels!</h3></div>
										@endif
									</div>	
								</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


