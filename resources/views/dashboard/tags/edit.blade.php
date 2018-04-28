@extends('dashboard.index')
@section ('title', "| $element->title | Edit")
@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
			<h2>{!! $element->title !!} 
                <span class="small pull-right">
                	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('tags.index')}}">Back to tags</a>
                 	<i class="fa fa-pencil"></i> Edit	
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
				<div class="card-body">        
        		{!! Form::model($element, ['method'=>'PATCH', 'action'=> ['TagController@update', $element->slug ],'files'=>true]) !!} 
		            <div class="row">         
		            	<div class="col-md-8 col-md-offset-4"> 
				            <div class="row">
				            	<div class="col-md-12">       
					                {!!Form::label('title', 'Tag', array('class' => 'form-spacing-top'))!!}
					                {!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
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
</div>

@endsection


