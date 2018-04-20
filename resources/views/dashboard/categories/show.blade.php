@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total subcategories: {{$category->subcategories_count}}</span> </h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> {!! $page_name !!}
                    </li>
                    <span class="pull-right">
                    	<i class="fa fa-pencil-alt"></i> <a href="{{route('categories.create')}}">Create a new category</a>
		            	<i class="fa fa-chevron-left"></i> <a href="{{route('categories.index')}}">Back to categories</a>
		            	<i class="fa fa-trash"></i> <a href="{{route('categories.trashed')}}">Trashed Categories</a>
                    </span>
                </ol>
                <hr>
			    <div id="contenido"  class="card">
					<div class="card-body">        
			            <div class="row">
				            <div class="col-md-4"> 
				            	<img class="img-responsive"  src="{{URL::to('/images/' . $category->image ) }}" name="{{$category->title}}" alt="{{$category->title}}" >
				            </div>
		  
			            	<div class="col-md-8"> 
					            <dl class="dl-horizontal">
							    	<h3><dt>Category Name:</dt>
									<dd>{!! $category->title !!}</dd></h3>

							        <dt>Category subtitle:</dt>
							        <dd class="pb-3">{!! $category->subtitle !!}</dd>

							        <dt>Status</dt>
							        <dd class="pb-3">{!! $category->statuses[0]->status !!}</dd>

							        <dt>Registered at:</dt>
							        <dd class="pb-3">{{ $category->created_at}}</dd>

							        <dt>About Category:</dt>
							        <dd class="pb-3">{!! $category->about !!}</dd>
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
	    			@if($category->subcategories_count > 0 )
				<div class="row">
					<div class="col-md-12">
						@if(count($category->subcategories) > 1 )
							<h3>{{$category->subcategories_count}} subcategories under {{$category->title}}</h3>
						@else
							<h3>One subcategory under {{$category->title}}</h3>
						@endif
					</div>
				
					<table class="table table-striped table-hover">
				         <thead>
				            <tr>
				                <th>Subcategory</th>
				                <th>Likes</th>
				                <th>Date</th>
				            </tr>
				         </thead>
				         <tbody>
				         	@foreach ($category->subcategories as $subcategory)	
				            <tr>
				               <td>
				               		<img class="mr-4" height="80" width="80" src="{{URL::to('/images/' . $subcategory->image ) }}" alt="{{$subcategory->title}}" > 
				               		<a href="{{route('subcategories.show', $subcategory->slug)}}">
				               		{{$subcategory->title}}
				               		</a>
				               	</td>
				               <td>{{$subcategory->channels()->sum('likes')}}</td>
				               <td>{{$subcategory->created_at}}</td>
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
