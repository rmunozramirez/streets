@extends('dashboard.index')
@section ('title', "| $element->title")
@section('content')
<section id="content">

<!-- Channel panel  -->
	<div class="wrapper wrapper-content animated fadeInUp">		
	    <div class="row wrapper border-bottom white-bg">
			<div class="inside">
				@if( $element ) 
	                <h2>{!! $element->title !!}
	                <span class="small pull-right">
	                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('images.index')}}">Back to Channels</a>
	                 	<i class="fa fa-pencil"></i> <a href="{{route('images.edit', $element->slug)}}">Edit</a>
	                </span></h2>
	            	<hr>
					<div id="contenido"  class="card">
						<div class="card-body">
						<div class="row">
							<div class="col-md-4">
				               <figure>
					            	<img height="300" class="img-responsive" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}" />
					            </figure>				
			            	</div>
							<div class="col-md-8">
						      	<div class="row">
								    <dl class="dl-horizontal">
								    	<h3><dt>Image Name:</dt>
										<dd>{!! $element->title !!}</dd></h3>

								        <dt>Image subtitle:</dt>
								        <dd class="pb-3">{{ $element->subtitle}}</dd>

								        <dt>Uploader</dt>
								        <dd class="pb-3">
								        	<a href="{{route('profiles.show', $element->profile->slug)}}">
								        		{!! $element->profile->title !!}
								        	</a>
								        </dd>

								        <dt>Registered at:</dt>
								        <dd class="pb-3">{{ $element->created_at}}</dd>

								        <dt>Description</dt>
								        <dd class="pb-3">{{ $element->about}}</dd>

								        <dt>Alt</dt>
								        <dd class="pb-3">{{ $element->alt}}</dd>
								    </dl>
						         </div>		            
					        </div>
				        </div>	
						</div>
					</div>
				@else <h2>There is not images uploaded in the site</h2>
		        @endif
			</div>
			
		</div>
	</div>
<!-- End Channel panel  -->
</section>

	
@endsection


