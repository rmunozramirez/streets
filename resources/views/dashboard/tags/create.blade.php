@extends('dashboard.index')
@section ('title', "| Create a Tag")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
			<h2>Create a Tag
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a href="{{route('tags.index')}}">Back to Tags</a>
                </span></h2>
            	<hr>
			<div id="contenido"  class="card">
			    @if(count($errors) > 0)
			        <ul class="list-group">
			            @foreach($errors->all() as $error)
			                <li class="list-group-item text-danger">{{$error}}</li>
			            @endforeach
			        </ul>
			    @endif

		        <div class="row"> 
					<div class="card-body">         
			            {!!Form::open(array('route' => 'tags.store', 'files' => true)) !!}         

		            	<div class="col-md-8 col-md-offset-4">       
			                {!!Form::label('title', 'Add a Tag', array('class' => 'form-spacing-top'))!!}
			                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
			               
					        {!!Form::submit('Add Tag', array('class' => 'mt-5 btn btn-success btn-block')) !!}
					        {!!Form::close() !!}       
			            </div>        
					</div>	
	            </div>         
            </div>
		</div>	
	</div>
</section>

	
@endsection

