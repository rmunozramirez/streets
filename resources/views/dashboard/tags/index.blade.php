@extends('dashboard.index')
@section ('title', "| Tags")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
                <div class="row">
                	<div class="col-md-12 pt-4">
                		<h3>Active discussions</h3>
						<table class="table table-striped table-hover">
					         <thead>
					            <tr>
					                <th>Tag</th>
					                <th>Profiles</th>
					                <th>Channels</th>
					                <th>Posts</th>
					                <th>Discussions</th>
					                <th>Pages</th>
					            </tr>
					         </thead>
					         <tbody>
				         		@foreach ($all_ as $tag)
				                	<tr>
				                		<td>
				                			<a href="{{route('tags.show', $tag->slug)}}">
												{{$tag->title}}
											</a>
				                		</td>	
				                		<td>{{$tag->profiles->count()}}</td>
				                		<td>{{$tag->channels->count()}}</td>
				                		<td>{{$tag->posts->count()}}</td>
				                		<td>{{$tag->discussions->count()}}</td>
				                		<td>{{$tag->pages->count()}}</td>
				                	</tr>
				            	@endforeach
				         	</tbody>
				      	</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	
@endsection


