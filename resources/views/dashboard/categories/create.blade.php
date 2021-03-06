@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		    <h2>Create a Category
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('categories.index')}}">Back to categories</a>
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
				            {!!Form::open(array('route' => 'categories.store', 'files' => true)) !!}   

				            <div class="row">        
					            <div class="col-md-4"> 
					            	<i class="fa fa-image fa-4x"></i>

					            	<div class=" pt-5">
						                {!!Form::label('image', 'Upload a Featured Image') !!}
						                {!!Form::file('image') !!} 
					            	</div>  
					            </div>
		      
				            	<div class="col-md-8"> 
						            <div class="row">
						            	<div class="col-md-6">       
							                {!!Form::label('title', 'Add a Category title', array('class' => 'form-spacing-top'))!!}
							                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
							            </div>

							            <div class="col-md-6">      
								                {!!Form::label('subtitle', 'Add a Category subtitle', array('class' => 'form-spacing-top'))!!}
								                {!!Form::text('subtitle', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}	            		
							            </div>		            		
						            </div>		            		



						            <div class="row pt-5"> 
							            <div class="col-md-12">      
							                {!!Form::label('about_category', 'Category description:', array('class' => 'form-spacing-top'))!!}
							                {!!Form::textarea('about_category', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
							            </div>
						            </div>

						            <div class="pt-5">    
						                {!!Form::submit('Add New Category', array('class' => 'btn btn-success btn-block')) !!}
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

@endsection


