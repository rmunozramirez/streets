@extends('dashboard.index')
@section ('title', "| Status")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>All {!! $page_name !!}</h2><hr />
		    <div id="contenido"  class="card">
                <div class="tabs-container">
                    <ul class="nav nav-tabs user-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1-active"><i class="fa fa-eye"></i> Active</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2-inactive"><i class="fa fa-eye-slash"></i> Inactive</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3-banned"><i class="fa fa-ban"></i>Banned</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1-active" class="tab-pane active">
                        	<div class="row">
		                    	<div class="col-md-12 pt-4">
		                    		<h3>Active Elements</h3>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
						                	<th>Title</th>
						                	<th>Element</th>
							            </tr>
							         </thead>
							         <tbody>
						            	@foreach ($all_ as $status)
						            		@if($status->status === 'active')
							                	<tr>
							                		<td>
														<a href="{{route($status->statusable_type . '.show', $status->statusable->slug)}}">
												               	<figure>
													            	<img height="50" width="50" src="{{URL::to('/images/' . $status->statusable->image)}}" alt="{{ $status->statusable->title }}" name="{{ $status->statusable->title }}">
													            	<span class="pl-5"> {{$status->statusable->title}}</span>
													            </figure>               	
												               </a>
							                			</a>
							                		</td>					                		
							                		<td><a href="{{route($status->statusable_type . '.index')}}">{{$status->statusable_type}}</a></td>
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
		                    		<h3>Inactive Elements</h3>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
						                	<th>Title</th>
						                	<th>Element</th>
							            </tr>
							         </thead>
							         <tbody>
						            	@foreach ($all_ as $status)
						            		@if($status->status === 'inactive')
							                	<tr>
							                		<td>
														<a href="{{route($status->statusable_type . '.show', $status->statusable->slug)}}">
												               	<figure>
													            	<img height="50" width="50" src="{{URL::to('/images/' . $status->statusable->image)}}" alt="{{ $status->statusable->title }}" name="{{ $status->statusable->title }}">
													            	<span class="pl-5"> {{$status->statusable->title}}</span>
													            </figure>               	
												               </a>
							                			</a>
							                		</td>					                		
							                		<td><a href="{{route($status->statusable_type . '.index')}}">{{$status->statusable_type}}</a></td>
							                	</tr>
						                	@endif
					               	 	@endforeach
							         </tbody>
							      	</table>
								</div>	
							</div>
                        </div>
                        <div id="tab-3-banned" class="tab-pane">
                        	<div class="row">
		                    	<div class="col-md-12 pt-4">
		                    		<h3>Banned Elements</h3>
									<table class="table table-striped table-hover">
							         <thead>
							            <tr>
						                	<th>Title</th>
						                	<th>Element</th>
							            </tr>
							         </thead>
							         <tbody>
						            	@foreach ($all_ as $status)
						            		@if($status->status === 'banned')
							                	<tr>
							                		<td>
														<a href="{{route($status->statusable_type . '.show', $status->statusable->slug)}}">
												               	<figure>
													            	<img height="50" width="50" src="{{URL::to('/images/' . $status->statusable->image)}}" alt="{{ $status->statusable->title }}" name="{{ $status->statusable->title }}">
													            	<span class="pl-5"> {{$status->statusable->title}}</span>
													            </figure>               	
												               </a>
							                			</a>
							                		</td>					                		
							                		<td><a href="{{route($status->statusable_type . '.index')}}">{{$status->statusable_type}}</a></td>
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


