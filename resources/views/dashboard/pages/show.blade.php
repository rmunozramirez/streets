@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">

<!-- Page panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
					@if( $page ) 
		                <h2>{!! $page->title !!}
		                <span class="small pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('pages.index')}}">Back to pages</a>
    	                 	<i class="fa fa-pencil"></i> <a href="{{route('pages.edit', $page->slug)}}">Edit</a>
	                    </span></h2>
	                <hr>
						<div id="contenido"  class="card">
							<div class="card-body">
							<div class="row">
								<div class="col-md-4">
					               <figure>
						            	<img height="300" class="img-responsive" src="{{URL::to('/images/' . $page->image)}}" alt="{{ $page->title }}" name="{{ $page->title }}" />
						            </figure>				
				            	</div>
								<div class="col-md-8">
							      	<div class="row">
									    <dl class="dl-horizontal">
									    	<h3><dt>Page Name:</dt>
											<dd>{!! $page->title !!}</dd></h3>

									        <dt>Page subtitle:</dt>
									        <dd class="pb-3">{{ $page->subtitle}}</dd>

									        <dt>Status</dt>
									        <dd class="pb-3">{!! $page->statuses[0]->status !!}</dd>

									        <dt>Registered at:</dt>
									        <dd class="pb-3">{{ $page->created_at}}</dd>

									        <dt>Body</dt>
									        <dd class="pb-3">{!! $page->body !!}</dd>
									    </dl>
							         </div>		            
						        </div>
					        </div>	
							</div>
						</div>
					@else <h2>There is not have any Page</h2>
			        @endif
				</div>
				
			</div>
		</div>
<!-- End Page panel  -->
</section>

	
@endsection


