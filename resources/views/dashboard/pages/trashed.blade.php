@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
    		    <h2>Trashed {!! $page_name !!}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('posts.index')}}">Back to  {!! $page_name !!}</a>
                    </span>
	                </h2>
	             <hr />
			    <div id="contenido"  class="card">
                    <div class="row">
                    	<div class="col-md-12 pt-4">
							@if(count($trash_post) > 0)
									<table class="table table-striped table-hover">
								         <thead>
								            <tr>
								                <th>Post</th>
								                <th>Post category</th>
								                <th>Author</th>
								                <th>Answers</th>
								                <th>Created at</th>
								            </tr>
								         </thead>
								         <tbody>
							         		@foreach ($trash_post as $post)
							                	<tr>
							                		<td>
														<a href="{{route('posts.show', $post->slug)}}">
											               	<figure>
												            	<img height="50" width="50" src="{{URL::to('/images/' . $post->image)}}" alt="{{ $post->title }}" name="{{ $post->title }}">
												            	<span class="pl-5"> {{$post->title}}</span>
												            </figure>
							                			</a>
							                		</td>
							                		<td><a href="{{route('postcategories.show', $post->postcategory->slug)}}">
							                			{{$post->postcategory->title}}</a>
							                		</td>					                		
							                		<td>
							                			<a href="{{route('profiles.show', $post->profile->slug)}}">
								                			{{$post->profile->title}}
								                		</a>
							                		</td>
									              	<td>Comments</td>
									              	<td>{{$post->created_at}}</td>
									               <td>
									               		<a href="{{route('posts.restore', $post->slug)}}">Restore</a>
									               </td>
									               <td>
										            	<div class="col-md-6">
											            	{!! Form::open(['route' => ['posts.kill', $post->slug], 'method' => 'DELETE']) !!}

															{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}

															{!! Form::close() !!}
														</div>
									               </td>
							                	</tr>
							
							            	@endforeach
							         	</tbody>
							      	</table>
							@else
								<h3>No trashed posts!</h3>
							@endif
						</div>	
					</div>     
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


