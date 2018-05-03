@extends('user.index')
@section ('title', "| $element->title | Edit")
@section('content')

<div class="container left-right-shadow">
	<div class="inside">
			<h2>{!! $element->title !!} 
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('discussions.index')}}">Back to discussions</a>
                 	<i class="fa fa-pencil"></i> Edit	
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
				<div class="card-body">        
        		{!! Form::model($element, ['method'=>'PATCH', 'action'=> ['UserDiscussionController@update', $element->slug ],'files'=>true]) !!} 
		            <div class="row">        
			            <div class="col-md-4"> 
			            	<figure>
				            	<img class="img-responsive" src="{{URL::to('/images/' . $element->image)}}" alt="{{ $element->title }}" name="{{ $element->title }}">
				            </figure>
			            	<div class=" pt-5">
				                {!!Form::label('image', 'Upload a Featured Image') !!}
				                {!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
			            	</div>  

			            </div>
	  
		            	<div class="col-md-8"> 
				            <div class="row">
				            	<div class="col-md-12">       
					                {!!Form::label('title', 'Discussion title', array('class' => 'form-spacing-top'))!!}
					                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
		            			</div>		            
					            <div class="col-md-12 pt-5">      
					                {!!Form::label('body', 'Discussion body:', array('class' => 'form-spacing-top'))!!}
					                {!!Form::textarea('body', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
					            </div>
					            <div class="col-md-12 pt-5">    
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


