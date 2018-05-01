@extends('user.index')
@section ('title', "| $page_name")
@section('content')

<div  id="contenido"  class="container left-right-shadow">
	<div class="inside">
		<h3 class="page-title">Edit: {!! $element->title !!}
			<span class="small pull-right">
             	<i class="fa fa-chevron-left"></i> <a href="{{route('profile', $element->slug )}}"> Back</a>
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
			<div class="tab-pane" id="tab-profile">
				<div class="m-t-md">
					 {!! Form::model($element, ['method'=>'PATCH', 'action'=> ['UserAreaController@update', $element->slug ],'files'=>true]) !!}   
					<div class="row">        
						<div class="col-md-4"> 

						</div>
						<div class="col-md-8"> 
							<div class="row">
								<div class="col-md-6">       
									{!!Form::label('name', 'User name', array('class' => 'pt-3'))!!}
									{!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
								</div>
    							
    							<div class="col-md-6">               
									{!!Form::label('email', 'Email', array('class' => 'pt-3'))!!}
									{!!Form::text('email', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>
							</div>

							<div class="row pt-4">
								<div class="col-md-6">
									{!!Form::label('password', 'Password', array('class' => 'pt-3'))!!}
									{!!Form::password('password', null, array('class' => 'pull-left form-control', 'minlength' => '6'))!!}
								</div>
		
								<div class="col-md-6">               
									{!!Form::label('facebook', 'Password', array('class' => 'pt-3'))!!}
									{!!Form::text('facebook', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>
							</div>

							<div class="pt-4">    
								{!!Form::submit('Edit profile', array('class' => 'btn btn-success btn-block')) !!}
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
