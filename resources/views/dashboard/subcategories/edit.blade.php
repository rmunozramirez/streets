@extends('dashboard.index')
@section ('title', "| $element->title | Edit")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>Edit: {{ $element->title}}
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
		        		{!! Form::model($element, ['method'=>'PATCH', 'action'=> ['DashboardSubcategoriesController@update', $element->slug ],'files'=>true]) !!}      
					            <div class="col-md-3"> 
				            		@foreach($element->images as $image)
		                    			@if($image->imageable_type === 'subcategories')
							               <figure>
								            	<img  class="img-responsive" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
								            </figure>
								        @else
								        <div class="text-center">
								        	<i class="fa fa-image fa-5x pb-4"></i><br>
								        </div>
							        	@endif
							        @endforeach		

					            	<div class=" pt-5">
						                {!!Form::label('image', 'Upload a Featured Image') !!}
						                {!!Form::file('image') !!} 
					            	</div>  
					            </div>
		      
				            	<div class="col-md-9"> 
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


