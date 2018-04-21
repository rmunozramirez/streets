@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} </h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> All {!! $page_name !!}es
                    </li>
                    <span class="pull-right"><i class="fas fa-pencil-alt"></i> <a href="{{route('profiles.create')}}">Create a new Status</a></span>
                </ol>
                <hr>
			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">
                    		<div class="col-md-12"><h3>Discussions</h3></div>
                    	</div>
					@foreach ($discussions as $discussion)
					<div class="col-lg-8 col-md-4">	
						<div class="panel hovercard">
							<img class="card-header" src="{{URL::to('/images/' . $discussion->image)}}">
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
				</div>	</div></div></div></div>	
			</div>
		</div>
	</div>
</section>

	
@endsection


