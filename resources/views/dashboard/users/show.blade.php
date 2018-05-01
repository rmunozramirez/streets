@extends('dashboard.index')
@section ('title', "| $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $element->name !!}
            	<span class="ml-5">
            		@if($element->profile->is_banned($element->id))
			    		<a href="{{route('profiles.allow', $element->id)}}" class="btn btn-success btn-sm">
			    			<i class="fa fa-thumbs-up"></i> Remove BANN!
			    		</a>
			    	@else
			    		<a href="{{route('profiles.ban', $element->id)}}" class="btn btn-danger btn-sm">
			    			<i class="fa fa-ban"></i> BANN the user!
			    		</a>
			    	@endif
            	</span>
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('users.index')}}"> Back to users</a>
	            </span>
	        </h2>
        	<hr>
			<div id="contenido"  class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
					      	<div class="row">
							    <dl class="dl-horizontal">
							    	<h3><dt>User Name:</dt>
									<dd>{!! $element->name !!}</dd></h3>

							        <dt>Profile Name:</dt>
							        <dd class="pb-3">{{ $element->profile->title}}</dd>

							        <dt>Role:</dt>
							        <dd class="pb-3">{{ $element->profile->role->title}}</dd>

							        <dt>Status</dt>
							        <dd class="pb-3">{!! $element->profile->statuses[0]->status !!}</dd>

							        <dt>Registered at:</dt>
							        <dd class="pb-3">{{ $element->created_at}}</dd>

							    </dl>
					         </div>		            
				        </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<!-- End Profile panel  -->

@endsection


