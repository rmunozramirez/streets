@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Back to discussions</span> </h2>
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
        		{!! Form::model($discussion, ['method'=>'PATCH', 'action'=> ['DashboardDiscussionsController@update', $discussion->slug ],'files'=>true]) !!} 
		            <div class="row">        
			            <div class="col-md-4"> 
			            	<figure>
				            	<img class="img-responsive" src="{{URL::to('/images/' . $discussion->image)}}" alt="{{ $discussion->title }}" name="{{ $discussion->title }}">
				            </figure>
			            	<div class=" pt-5">
				                {!!Form::label('image', 'Upload a Featured Image') !!}
				                {!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
			            	</div>  
			            	<hr>
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
</div>

@endsection


