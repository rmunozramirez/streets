@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">

<!-- Channel panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
					@if( $channel ) 
		                <h2>Channel: {!! $channel->title !!}</h2>
		                <ol class="breadcrumb">
	                    <li>
	                        <a href="{{route('index')}}"> Dashboard</a>
	                    </li>
	                    <li class="active">
	                        <a href="{{route('channels.index')}}"> Channels</a>
	                    </li>
	                    <li class="">
	                         {!! $page_name !!}
	                    </li>
	                    <span class="pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a href="{{route('channels.index')}}">Back to channels</a>
	                    </span>
	                </ol>
	                <hr>
						<div id="contenido"  class="card">
							<div class="card-body">
							<div class="row">
								<div class="col-md-6">
					               <figure>
						            	<img height="300" class="
						            	" src="{{URL::to('/images/' . $channel->image)}}" alt="{{ $channel->title }}" name="{{ $channel->title }}" />
						            </figure>				
				            	</div>
								<div class="col-md-6">
							      	<div class="row">
									    <dl class="dl-horizontal">
									    	<h3><dt>Channel Name:</dt>
											<dd>{!! $channel->title !!}</dd></h3>

									        <dt>Channel subtitle:</dt>
									        <dd class="pb-3">{{ $channel->subtitle}}</dd>

									        <dt>Subcategory:</dt>
									        <dd class="pb-3">{{ $channel->subcategory->title}}</dd>

									        <dt>Status</dt>
									        <dd class="pb-3">{!! $channel->statuses[0]->status !!}</dd>

									        <dt>Registered at:</dt>
									        <dd class="pb-3">{{ $channel->created_at}}</dd>

									        <dt>Likes</dt>
									        <dd class="pb-3">{{ $channel->likes}}</dd>
									    </dl>
							         </div>		            
						        </div>
					        </div>	
							</div>
						</div>
					@else <h2>{!! $user_name !!} does not have a channel</h2>
			        @endif
				</div>
				
			</div>
		</div>
<!-- End Channel panel  -->
</section>

	
@endsection


