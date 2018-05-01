@extends('user.index')
@section ('title', "|  $element->title | Edit" )
@section('content')

<div  id="contenido"  class="container left-right-shadow">
	<div class="inside">
		<h3 class="page-title">Edit: {!! $element->title !!}
			<span class="small pull-right">
             	<i class="fa fa-chevron-left"></i> <a href="{{route('channel', $element->slug )}}"> Back</a>
            </span></h3>
    	<hr>
		    <div id="contenido">
			    @if(count($errors) > 0)
			        <ul class="list-group">
			        
			            @foreach($errors->all() as $error)
			                <li class="list-group-item text-danger">{{$error}}</li>
			            @endforeach
			        </ul>
			    @endif

					<div class="card-body">        
	        		{!! Form::model($element, ['method'=>'PATCH', 'action'=> ['UserChannelController@update', $element->slug ],'files'=>true]) !!} 

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
						                {!!Form::label('title', 'Channel title', array('class' => 'form-spacing-top'))!!}
						                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
						            </div>

						            <div class="col-md-6">      
							                {!!Form::label('subtitle', 'Channel subtitle', array('class' => 'form-spacing-top'))!!}
							                {!!Form::text('subtitle', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}		
						            </div>		            		
					            </div>		            		

					            <div class="row pt-5">
					            	<div class="col-md-6">
						            	{!! Form::label('subcategory_id', 'Subcategory:') !!}
		                    			{!! Form::select('subcategory_id', array('' => 'Choose a Subcategory') + $all_sub, null, array('class' => 'form-control')) !!}
						            </div>

					            </div>


					            <div class="row pt-5"> 
						            <div class="col-md-12">      
						                {!!Form::label('about', 'Channel description:', array('class' => 'form-spacing-top'))!!}
						                {!!Form::textarea('about', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
						            </div>
					            </div>

					            <div class="pt-5">    
					                {!!Form::submit('Edit Channel', array('class' => 'btn btn-success btn-block')) !!}
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


