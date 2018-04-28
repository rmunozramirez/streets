@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
    		    <h2>Trashed {!! $page_name !!}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('tags.index')}}">Back to tags</a>
                    </span>
	                </h2>
	             <hr />
			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">
							@if(count($element) > 0)
								<table class="table table-striped table-hover">
						         <thead>
						            <tr>
						                <th>Tag</th>
						                <th>Profile</th>
						                <th>Deleted at</th>
						            </tr>
						         </thead>
						         <tbody>
						         	@foreach ($element as $tag)
						            <tr>
						               <td><a href="{{route('tags.show', $tag->slug)}}">{{$tag->title}}</a></td>
						               <td>{{$tag->deleted_at}}</td>
						               <td>
						               		<a href="{{route('tags.restore', $tag->slug)}}">Restore</a>
						               </td>
						               <td>
							            	<div class="col-md-6">
								            	{!! Form::open(['route' => ['tags.kill', $tag->slug], 'method' => 'DELETE']) !!}

												{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

												{!! Form::close() !!}
											</div>
						               </td>
						            </tr>
						            @endforeach
						         </tbody>
						      	</table>
							@else
								<h3>No trashed tags!</h3>
							@endif
						</div>	
					</div>     
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


