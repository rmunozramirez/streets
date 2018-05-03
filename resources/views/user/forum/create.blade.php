@extends('user.index')
@section ('title', "| Create a discussion")
@section('content')

<div class="container left-right-shadow">
	<div class="inside">
			<h2>Create a discussion
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a href="{{route('discussions.index')}}">Back to discussions</a>
                </span></h2>
            	<hr>
			<div id="contenido">
			    @if(count($errors) > 0)
			        <ul class="list-group">
			            @foreach($errors->all() as $error)
			                <li class="list-group-item text-danger">{{$error}}</li>
			            @endforeach
			        </ul>
			    @endif

		        <div class="row"> 
					<div class="card-body">         
				            {!!Form::open(array('route' => 'forum.store', 'files' => true)) !!}         
		            <div class="col-md-4"> 
		            	<div class=" pt-5">
			            	<i class="fa fa-image fa-4x"></i>
			            	<div class=" pt-5">
				                {!!Form::label('image', 'Upload a Featured Image') !!}
				                {!!Form::file('image') !!} 
			            	</div> 
		            	</div> 
		            </div>
	            	<div class="col-md-8"> 
	            	 	<div class="row">
			            	<div class="col-md-12">       
				                {!!Form::label('title', 'Add a Discussion title', array('class' => 'form-spacing-top'))!!}
				                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
				            </div>
					      	<div class="col-md-12 pt-5">      
					           	{!!Form::label('body', 'Discussion body:', array('class' => 'form-spacing-top'))!!}
				                {!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}
				            </div>
				        </div>
			            <div class="row">    
				            <div class="col-md-12 pt-5">    
						        {!!Form::submit('Add discussion', array('class' => 'btn btn-success btn-block')) !!}
						        {!!Form::close() !!}       
				            </div>         	
			            </div>
					</div>	
	            </div>         
            </div>
		</div>	
	</div>
</div>

	
@endsection

