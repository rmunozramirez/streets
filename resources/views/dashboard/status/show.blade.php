@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">

	    <div class="wrapper wrapper-content animated fadeInUp">
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
	                <h2>User profile</h2>
	                <ol class="breadcrumb">
	                    <li>
	                        <a href="{{route('index')}}"> Dashboard</a>
	                    </li>
	                    <li class="active">
	                        <i class="fas fa-pencil-alt"></i> {!! $page_name !!}
	                    </li>
	                    <span class="pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a href="{{route('profiles.index')}}">Back to profiles</a>
	                    </span>
	                </ol>
	                <hr>

					<div id="contenido"  class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 pt-4">
                                		<div class="col-md-12"><h3>Active Channels</h3></div>
									
								@foreach($statuses as $status)
									{{$status[0]->status}}
								@endforeach
					        </div>
					    </div>
					    <hr />
					    <div class="card-footer">

					    </div>	
					</div>
				</div>
			</div>
		</div>

</section>

	
@endsection


