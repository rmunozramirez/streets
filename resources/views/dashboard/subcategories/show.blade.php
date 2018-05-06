@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $element->title !!}
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('subcategories.index')}}">Back to subcategories</a>
                 	<i class="fa fa-pencil"></i> <a href="{{route('subcategories.edit', $element->slug)}}">Edit</a>
                </span></h2>
            	<hr>
			    <div id="contenido"  class="card">
					<div class="card-body">        
			            <div class="row">
				            <div class="col-md-3">
								@foreach($element->images as $image)
	                    			@if($image->imageable_type === 'subcategories')
						               <figure>
							            	<img  class="img-responsive" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
							            </figure>
							        @else
							        <div class="text-center">
							        	<i class="fa fa-image fa-5x pb-4"></i><br>
							        	<a class="btn btn-default btn-sm" href="{{route('subcategories.edit', $element->slug)}}"> Add a nice picture</a>
						            </div>
						        	@endif
						        @endforeach				
			            	</div>
		  
			            	<div class="col-md-8"> 
					            <dl class="dl-horizontal">
							    	<h3><dt>Subcategory Name:</dt>
									<dd>{!! $element->title !!}</dd></h3>

							        <dt>Subcategory subtitle:</dt>
							        <dd class="pb-3">{!! $element->subtitle !!}</dd>

							        <dt>Belongs to category:</dt>
							        <dd class="pb-3">
							        	<a href="{{route('categories.show', $element->category->slug)}}">
							        	{!! $element->category->title !!}</a></dd>

							        <dt>Status</dt>
							        <dd class="pb-3">{!! $element->statuses[0]->status !!}</dd>

							        <dt>Registered at:</dt>
							        <dd class="pb-3">{{ $element->created_at}}</dd>

							        <dt>About Category:</dt>
							        <dd class="pb-3">{!! $element->about !!}</dd>
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
	    	@if($element->channels_count > 0 )
				<div class="row">
					<div class="col-md-12">
						@if($element->channels_count > 1 )
							<h2>{{$element->channels_count}} channels under {{$element->title}}</h2>
						@else
							<h2>One channel under {{$element->title}}</h2>
						@endif
					</div>
				<hr />
					<table class="table table-striped table-hover">
				         <thead>
				            <tr>
				                <th>Channel</th>
				                <th>Status</th>
				                <th>Profile</th>
				                <th>Date</th>
				            </tr>
				         </thead>
				         <tbody>
				         	@foreach ($element->channels as $channel)	
				            <tr>
				               <td>
				               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $channel->image ) }}" alt="{{$channel->title}}" > 
				               		<a href="{{route('channels.show', $channel->slug)}}">
				               		{{$channel->title}}
				               		</a>
				               	</td>
				               	<td>{{$channel->statuses[0]->status}}</td>
				               	<td>
				               		<a href="{{route('profiles.show', $channel->profile->slug)}}">
				               			{{$channel->profile->title}}
				               		</a>
				               </td>
				               
				               <td>{{$channel->created_at}}</td>
				            </tr>
				            @endforeach
				         </tbody>
				      </table>	
				</div>
			@else
				<h2>No channels under {{$element->title}}</h2>
			@endif
			</div>
		</div>
	</div>
</section>
@endsection
