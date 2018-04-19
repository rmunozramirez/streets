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
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> All {!! $page_name !!}es
                    </li>
                    <span class="pull-right"><i class="fas fa-pencil-alt"></i> <a href="{{route('profiles.create')}}">Create a new profile</a></span>
                </ol>
                <hr>
			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">

							<table class="table table-striped table-hover">
					         <thead>
					            <tr>
				                	<th>Title</th>
				                	<th>Element</th>
				                	<th>Status</th>

					            </tr>
					         </thead>
					         <tbody>
					            <tr>
					            	@foreach ($all_st as $status)
					                	<tr>
					                		<td>
					                			{{$status->statusable->title}}
					                		</td>					                		
					                		<td>{{$status->statusable_type}}</td>					                		
					                		<td><a href="{{route($status->statusable_type . '.index')}}">{{$status->status}}</a></td>
					                	</tr>
				               	 	@endforeach


					            </tr>
					         </tbody>
					      	</table>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


