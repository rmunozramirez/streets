@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>Edit: {{ $subcategory->title}}
    		    	<span class="small pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('subcategories.index')}}">Back to subcategories</a>
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
		        		{!! Form::model($subcategory, ['method'=>'PATCH', 'action'=> ['DashboardSubcategoriesController@update', $subcategory->slug ],'files'=>true]) !!} 


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
							                {!!Form::label('title', 'Add a subategory title', array('class' => 'form-spacing-top'))!!}
							                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
							            </div>

							            <div class="col-md-6">      
								                {!!Form::label('subtitle', 'Add a subcategory subtitle', array('class' => 'form-spacing-top'))!!}
								                {!!Form::text('subtitle', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}	            		
							            </div>		            		
						            </div>		            		


						            <div class="row pt-5">
						            	<div class="col-md-6">
							            	here comes the category selector with the + operator
							            </div>
							       	</div>

						            <div class="row pt-5"> 
							            <div class="col-md-12">      
							                {!!Form::label('about', 'Category description:', array('class' => 'form-spacing-top'))!!}
							                {!!Form::textarea('about', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
							            </div>
						            </div>

						            <div class="pt-5">    
						                {!!Form::submit('Edit Subcategory', array('class' => 'btn btn-success btn-block')) !!}
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


