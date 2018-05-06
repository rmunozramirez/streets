@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">		                
				<h2>{!! $element->title !!}
	                <span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('categories.index')}}">Back to categories</a>
                    	<i class="fa fa-pencil"></i> <a href="{{route('categories.edit', $element->slug)}}">Edit</a>
                    </span>
                </h2>
	                <hr>
			    <div id="contenido"  class="card">
					<div class="card-body">        
			            <div class="row">
				            <div class="col-md-3">
								@foreach($element->images as $image)
	                    			@if($image->imageable_type === 'categories')
						               <figure>
							            	<img  class="img-responsive" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
							            </figure>
							        @else
							        <div class="text-center">
							        	<i class="fa fa-image fa-5x pb-4"></i><br>
							        	<a class="btn btn-default btn-sm" href="{{route('profiles.edit', $element->slug)}}"> Add a nice picture</a>
						            </div>
						        	@endif
						        @endforeach				
			            	</div>
	  
			            	<div class="col-md-9"> 
					            <dl class="dl-horizontal">
							    	<h3><dt>Category Name:</dt>
									<dd>{!! $element->title !!}</dd></h3>

							        <dt>Category subtitle:</dt>
							        <dd class="pb-3">{!! $element->subtitle !!}</dd>

							        <dt>Status</dt>
							        <dd class="pb-3">{!! $element->statuses[0]->status !!}</dd>

							        <dt>Registered at:</dt>
							        <dd class="pb-3">{{ $element->created_at}}</dd>

							        <dt>About Category:</dt>
							        <dd class="pb-3">{!! $element->about !!}</dd>
							        
							        <dt>Tags</dt>
							        <dd class="pb-3">
							        	@if($element->tags)
							        	@foreach($element->tags as $tag)
							        		<a class="btn btn-info" href="{{route('tags.show', $tag->slug)}}">
										    	{!! $tag->title !!}
										    </a>
										@endforeach
										@endif
							        </dd>
							    </dl>	            		
				            </div>
			            </div>  
			        </div>
				</div>
			</div>
		</div>
	</div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
	    			@if($element->subcategories_count > 0 )
				<div class="row">
					<div class="col-md-12">
						@if(count($element->subcategories) > 1 )
							<h2>{{$element->subcategories_count}} subcategories under {{$element->title}}</h2>
						@else
							<h2>One subcategory under {{$element->title}}</h2>
						@endif
					</div>
				
					<table class="table table-striped table-hover">
				         <thead>
				            <tr>
				                <th>Subcategory</th>
				                <th>Status</th>
				                <th>Channels</th>
				                <th>Date</th>
				            </tr>
				         </thead>
				         <tbody>
				         	@foreach ($element->subcategories as $subcategory)	
				            <tr>
				               <td>

								@foreach($subcategory->images as $image)
	                    			@if($image->imageable_type === 'subcategories')
						               <a href="{{route('subcategories.show', $subcategory->slug)}}">
						               	<img class="mr-4 img-circle" height="50" width="50"  src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
								            {{$subcategory->title}}
					               		</a>
							        @else
							        <div class="text-center">
							        	<i class="fa fa-image fa-5x pb-4"></i><br>
							        	<a class="btn btn-default btn-sm" href="{{route('subcategories.edit', $element->slug)}}"> Add a nice picture</a>
						            </div>
						        	@endif
						        @endforeach			
				               		
				               		
				               	</td>
				               <td>{{$subcategory->statuses[0]->status}}</td>
				               <td>{{$subcategory->channels->count()}}</td>
				               <td>{{$subcategory->created_at}}</td>
				            </tr>
				            @endforeach
				         </tbody>
				      </table>	
				</div>
			@else
				<h2>No subcategories under {{$element->title}}
					<span class="small pull-right"><i class="fa fa-plus"></i> <a href="{{route('subcategories.create')}}">Create a subcategory</a></span>
				</h2>
			@endif
			</div>
		</div>
	</div>

@endsection
