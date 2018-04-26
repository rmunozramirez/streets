@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
    		    <h2>Trashed {!! $page_name !!}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('pages.index')}}">Back to  {!! $page_name !!}</a>
                    </span>
	                </h2>
	             <hr />
			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">
							@if(count($trash_page) > 0)
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Page</th>
								                <th>Created at</th>
								                <th>Deleted at</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($trash_page as $page)
							                	<tr>
							                		<td>
														<a href="{{route('pages.show', $page->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $page->image)}}" alt="{{ $page->title }}" name="{{ $page->title }}">
												            	<span class="pl-5"> {{$page->title}}</span>
												            </figure>
							                			</a>
							                		</td>
									              	<td>{{$page->created_at}}</td>
									              	<td>{{$page->deleted_at}}</td>
									               <td>
									               		<a href="{{route('pages.restore', $page->slug)}}">Restore</a>
									               </td>
									               <td>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['pages.kill', $page->slug], 'method' => 'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
															{!! Form::close() !!}
														</div>
									               </td>
							                	</tr>
							
							            	@endforeach
							         	</tbody>
							      	</table>
							@else
								<h3>No trashed Pages!</h3>
							@endif
						</div>	
					</div>     
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


