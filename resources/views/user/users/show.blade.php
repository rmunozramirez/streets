@extends('user.index')
@section ('title', "| $page_name")
@section('content')

<div class="container left-right-shadow">
	<div class="inside">
		<h3 class="page-title">{{$page_name}}
			<span class="small pull-right">
             	<i class="far fa-edit"></i> <a href="{{route('user.edit', $element->slug)}}">Edit</a>
            </span></h3>
		 <hr>
		 <div id="contenido">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
			      	<div class="row">
					    <dl class="dl-horizontal">
					    	<h4><dt>User Name:</dt>
							<dd>{!! $element->name !!}</dd></h4>

					        <dt>Email:</dt>
					        <dd class="pb-3">{{ $element->email}}</dd>

					        <dt>Member since:</dt>
					        <dd class="pb-3">{{ $element->created_at}}</dd>


					    </dl>
			         </div>		            
		        </div>
	        </div>
		</div>
	</div>			
</div>
	
@endsection

