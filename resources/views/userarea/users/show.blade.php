@extends('userarea.index')
@section ('title', "| $page_name")
@section('content')


<section id="inner-page" class="header">		
<!-- Navigation Section -->
    @include('layouts.navigation')

</section>

<section id="content">

	@include ('userarea.partials.user_menu')
	
    <div  id="contenido"  class="container left-right-shadow">
		<div class="inside">
			<h3 class="page-title">{{$page_name}}
				<span class="small pull-right">
                 	<i class="far fa-edit"></i> <a href="{{route('user.edit', $element->slug)}}">Edit</a>
                </span></h3>
			 <hr>
			 <div id="contenido">
				<div class="row">
					<div class="col-md-12">
				      	<div class="row">
						    <dl class="dl-horizontal">
						    	<h3><dt>User Name:</dt>
								<dd>{!! $element->name !!}</dd></h3>

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
</section>

	
@endsection

