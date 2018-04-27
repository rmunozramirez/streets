@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $element->title !!}
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('postcategories.index')}}">Back to post categories</a>
                 	<i class="fa fa-pencil"></i> <a href="{{route('postcategories.edit', $element->slug)}}">Edit</a>
                </span></h2>
            	<hr>
			    <div id="contenido"  class="card">
					<div class="card-body">        
			            <div class="row">
				            <div class="col-md-4"> 
				            	<img class="img-responsive"  src="{{URL::to('/images/' . $element->image ) }}" name="{{$element->title}}" alt="{{$element->title}}" >
				            </div>
		  
			            	<div class="col-md-8"> 
					            <dl class="dl-horizontal">
							    	<h3><dt>Post category name:</dt>
									<dd>{!! $element->title !!}</dd></h3>

							        <dt>Post category subtitle:</dt>
							        <dd class="pb-3">{!! $element->subtitle !!}</dd>

							        <dt>Posts:</dt>
							        <dd class="pb-3">{{count($element->posts)}}</dd>

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
	    	@if($element->posts->count() > 0 )
				<div class="row">
					<div class="col-md-12">
						@if($element->posts->count() > 1 )
							<h2>{{$element->posts->count()}} posts under {{$element->title}}</h2>
						@else
							<h2>One post under {{$element->title}}</h2>
						@endif
					</div>
				<hr />
					<table class="table table-striped table-hover">
				         <thead>
				            <tr>
				                <th>Post</th>
				                <th>Status</th>
				                <th>Profile</th>
				                <th>Date</th>
				            </tr>
				         </thead>
				         <tbody>
				         	@foreach ($element->posts as $post)	
				            <tr>
				               <td>
				               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $post->image ) }}" alt="{{$post->title}}" > 
				               		<a href="{{route('posts.show', $post->slug)}}">
				               		{{$post->title}}
				               		</a>
				               	</td>
				               	<td>{{$post->statuses[0]->status}}</td>
				               	<td>
				               		<a href="{{route('profiles.show', $post->profile->slug)}}">
				               			{{$post->profile->title}}
				               		</a>
				               </td>
				               
				               <td>{{$post->created_at}}</td>
				            </tr>
				            @endforeach
				         </tbody>
				      </table>	
				</div>
			@else
				<h2>No posts under {{$element->title}}</h2>
			@endif
			</div>
		</div>
	</div>
</section>
@endsection
