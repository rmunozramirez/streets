@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total subcategories: {{$subcategory->channels_count}}</span> </h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> {!! $page_name !!}
                    </li>
                    <span class="pull-right">
                    	<i class="fa fa-pencil-alt"></i> <a href="{{route('subcategories.create')}}">Create a new subcategory</a>
		            	<i class="fa fa-chevron-left"></i> <a href="{{route('subcategories.index')}}">Back to subcategories</a>
		            	<i class="fa fa-trash"></i> <a href="{{route('subcategories.trashed')}}">Trashed Subcategories</a>
                    </span>
                </ol>
                <hr>
			    <div id="contenido"  class="card">
					<div class="card-body">        
			            <div class="row">
				            <div class="col-md-4"> 
				            	<img class="img-responsive"  src="{{URL::to('/images/' . $subcategory->image ) }}" name="{{$subcategory->title}}" alt="{{$subcategory->title}}" >
				            </div>
		  
			            	<div class="col-md-8"> 
					            <dl class="dl-horizontal">
							    	<h3><dt>Subcategory Name:</dt>
									<dd>{!! $subcategory->title !!}</dd></h3>

							        <dt>Subcategory subtitle:</dt>
							        <dd class="pb-3">{!! $subcategory->subtitle !!}</dd>

							        <dt>Status</dt>
							        <dd class="pb-3">{!! $subcategory->statuses[0]->status !!}</dd>

							        <dt>Registered at:</dt>
							        <dd class="pb-3">{{ $subcategory->created_at}}</dd>

							        <dt>About Category:</dt>
							        <dd class="pb-3">{!! $subcategory->about !!}</dd>
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
	    			@if($subcategory->channels_count > 0 )
				<div class="row">
					<div class="col-md-12">
						@if(count($subcategory->channels_count) > 1 )
							<h3>{{$subcategory->channels_count}} channels under {{$subcategory->title}}</h3>
						@else
							<h3>One channel under {{$subcategory->title}}</h3>
						@endif
					</div>
				
					<table class="table table-striped table-hover">
				         <thead>
				            <tr>
				                <th>Channel</th>
				                <th>Likes</th>
				                <th>Date</th>
				            </tr>
				         </thead>
				         <tbody>
				         	@foreach ($subcategory->channels as $channel)	
				            <tr>
				               <td>
				               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $channel->image ) }}" alt="{{$channel->title}}" > 
				               		<a href="{{route('channels.show', $channel->slug)}}">
				               		{{$channel->title}}
				               		</a>
				               	</td>
				               <td>{{$channel->sum('likes')}}</td>
				               <td>{{$channel->created_at}}</td>
				            </tr>
				            @endforeach
				         </tbody>
				      </table>	
				</div>
			@else
				<div class="col-md-12"><h3>No subcategories under {{$category->title}}</h3></div>
			@endif
			</div>
		</div>
	</div>
</section>
@endsection
