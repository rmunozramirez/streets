@extends('dashboard.index')
@section ('title', "| Discussions")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
			<div id="contenido"  class="card">
			    <div class="row">
			    	<div class="col-md-12 pt-4">
			    		<div class="col-md-12"><h3>Discussions</h3></div>
			    	</div>
				@foreach ($discussions as $discussion)
				<div class="col-lg-3 col-md-4">	
					<div class="panel hovercard">
						<img height="200" class="img-responsive card-header" src="{{URL::to('/images/' . $discussion->image)}}">
							<h3><a href="{{route('discussions.show' , $discussion->slug)}}">{{ $discussion->title }}</a></h3>
						
						<div class="panel-body">					
							<h5 class="subcat">	In:				
								categories			
							</h5>					   
							<p>
								Event Rating:<br />
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								(14)
							</p>	
							<hr>

							<a href="{{ url('blogs/'.$discussion->slug) }}">View</a>

							| Edit | <a href="event.php">Delete</a>
						</div>
					</div>
					
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

	
@endsection


