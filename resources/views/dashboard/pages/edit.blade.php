@extends('dashboard.index')
@section ('title', "| $element->title | Edit")
@section('content')

<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Edit: {{ ucfirst(trans($element->title)) }}
            	<span class="mt-3 small pull-right">Total pages: {{count($all_)}}</span>
            </h2>
            <hr />
		    <div id="contenido"  class="card">
			    @if(count($errors) > 0)
			        <ul class="list-group">
			        
			            @foreach($errors->all() as $error)
			                <li class="list-group-item text-danger">{{$error}}</li>
			            @endforeach
			        </ul>
			    @endif

					<div class="card-body">        
	        		{!! Form::model($element, ['method'=>'PATCH', 'action'=> ['PagesController@update', $element->slug ],'files'=>true]) !!} 

			            <div class="row">        
				            <div class="col-md-4"> 
				            	<img class="img-responsive"  src="{{URL::to('/images/' . $element->image ) }}" alt="{{$element->title}}" >
				            	<div class=" pt-5">
					                {!!Form::label('image', 'Upload a Featured Image') !!}
					                {!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
				            	</div>  
				            	<hr>
				            </div>
		  
			            	<div class="col-md-8"> 
					            <div class="row">
					            	<div class="col-md-6">       
						                {!!Form::label('title', 'Page title', array('class' => 'form-spacing-top'))!!}
						                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
						            </div>

						            <div class="col-md-6">      
							                {!!Form::label('subtitle', 'Page subtitle', array('class' => 'form-spacing-top'))!!}
							                {!!Form::text('subtitle', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}		
						            </div>		            		
					            </div>		            		

					            <div class="row pt-5"> 
						            <div class="col-md-12">      
						                {!!Form::label('body', 'Page body:', array('class' => 'form-spacing-top'))!!}
						                {!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
						            </div>
					            </div>

					            <div class="pt-5">    
					                {!!Form::submit('Edit Page', array('class' => 'btn btn-success btn-block')) !!}
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


