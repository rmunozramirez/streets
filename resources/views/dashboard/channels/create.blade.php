@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">

<!-- Channel panel  -->
	    <div class="wrapper wrapper-content animated fadeInUp">		
	        <div class="row wrapper border-bottom white-bg">
				<div class="inside">
		            <h2>Create a channel<span class="small pull-right">
	                    	<i class="fa fa-chevron-left"></i> <a href="{{route('channels.index')}}">Back to channels</a>
	                    </span>
	                </h2>
	                <hr>
				    <div id="contenido"  class="card">
						<div class="inside">
					    	@if(count($errors) > 0)
					        <ul class="list-group">       
					            @foreach($errors->all() as $error)
					                <li class="list-group-item text-danger">{{$error}}</li>
					            @endforeach
					        </ul>
					    	@endif
						
							<div class="row">
								<div class="card-body">        
						            {!!Form::open(array('route' => 'channels.store', 'files' => true)) !!}   

						            <div class="row">        
							            <div class="col-md-4"> 
							            	<i class="fa fa-image fa-4x"></i>
							            	<div class=" pt-5">
								                {!!Form::label('image', 'Upload a Featured Image') !!}
								                {!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
							            	</div>  
							            </div>
				      
						            	<div class="col-md-8"> 
								            <div class="row">
								            	<div class="col-md-12">       
									                {!!Form::label('title', 'Chanel title', array('class' => 'form-spacing-top'))!!}
									                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
									            </div>
								            </div>

								            <div class="row pt-5">
									            <div class="col-md-12">      
									                {!!Form::label('subtitle', 'Chanel subtitle', array('class' => 'form-spacing-top'))!!}
									                {!!Form::text('subtitle', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}		            		
									            </div>		            		
								            </div>		            		

								            <div class="row pt-5">
								            	<div class="col-md-6">
									            	{!! Form::label('subcategory_id', 'Subcategory:') !!}
				                        			{!! Form::select('subcategory_id', ['' => 'Choose a Subcategory'] + $all_sub, null, array('class' => 'form-control')) !!}
									            </div>
									       	</div>
									       	<div class="row pt-5">
									            <div class="col-md-12">      
									                {!!Form::label('about', 'Chanel description:', array('class' => 'form-spacing-top'))!!}
									                {!!Form::textarea('about_chanel', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
									            </div>
								            </div>

								            <div class="pt-5">    
								                {!!Form::submit('Add New Chanel', array('class' => 'btn btn-success btn-block')) !!}
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
		</div>
<!-- End Channel panel  -->
</section>

	
@endsection


