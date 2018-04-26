@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>Edit: {{ $postcat->title}}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('postcategories.index')}}">Back to post categories</a>
                    </span>
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

					<div class="row">
						<div class="card-body">        
		        		{!! Form::model($postcat, ['method'=>'PATCH', 'action'=> ['PostcategoriesController@update', $postcat->slug ],'files'=>true]) !!} 


				            <div class="row">        
					            <div class="col-md-4"> 
				            	<img class="img-responsive"  src="{{URL::to('/images/' . $postcat->image ) }}" alt="{{$postcat->title}}" >

					            	<div class=" pt-5">
						                {!!Form::label('image', 'Upload a Featured Image') !!}
						                {!!Form::file('image') !!} 
					            	</div>  
					            </div>
		      
				            	<div class="col-md-8"> 
						            <div class="row">
						            	<div class="col-md-6">       
							                {!!Form::label('title', 'Edit title', array('class' => 'form-spacing-top'))!!}
							                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
							            </div>

							            <div class="col-md-6">      
								                {!!Form::label('subtitle', 'Edit subtitle', array('class' => 'form-spacing-top'))!!}
								                {!!Form::text('subtitle', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}	            		
							            </div>		            		
						            </div>

						            <div class="row pt-5"> 
							            <div class="col-md-12">      
							                {!!Form::label('about', 'Edit description:', array('class' => 'form-spacing-top'))!!}
							                {!!Form::textarea('about', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
							            </div>
						            </div>

						            <div class="pt-5">    
						                {!!Form::submit('Edit post category', array('class' => 'btn btn-success btn-block')) !!}
						                {!!Form::close() !!}       
						            </div>
					            </div>
				            </div>  
				            
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


