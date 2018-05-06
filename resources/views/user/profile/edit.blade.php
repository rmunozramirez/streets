@extends('user.index')
@section ('title', "| $page_name")
@section('content')
	
<div  id="contenido"  class="container left-right-shadow">
	<div class="inside">
		<h3 class="page-title">Edit: {!! $element->title !!}
			<span class="small pull-right">
             	<i class="fa fa-chevron-left"></i> <a href="{{route('profile', Auth::user()->profile->slug )}}"> Back</a>
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
					 {!! Form::model($element, ['method'=>'PATCH', 'action'=> array('UserProfileController@update',  Auth::user()->slug, $element->slug ),'files'=>true]) !!} 
					<div class="row">        
						<div class="col-md-3"> 
							@foreach($element->images as $image)
		            			@if($image->imageable_type === 'profiles')
					               <figure>
						            	<img  class="img-circle img-responsive" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
						            </figure>
						        @else
						        <div class="text-center">
						        	<i class="fa fa-image fa-5x pb-4"></i><br>
						        	<a class="btn btn-default btn-sm" href="{{route('profiles.edit', $element->slug)}}"> Add a nice picture</a>
					            </div>
					        	@endif
					        @endforeach	
							<div class=" pt-5">
								{!!Form::label('image', 'Upload a Featured Image') !!}
								{!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
							</div>
						</div>
						<div class="col-md-9"> 
							<div class="row">
								<div class="col-md-12">       
									{!!Form::label('title', 'Profile title', array('class' => 'pt-3'))!!}
									{!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
								</div>
    		
							</div>

							<div class="row pt-4">
								<div class="col-md-4">
									{!!Form::label('birthday', 'Birthday', array('class' => 'pt-3'))!!}
									{!!Form::date('birthday', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
								</div>												
				
								<div class="col-md-4">               
									{!!Form::label('web', 'Website', array('class' => 'pt-3'))!!}
									{!!Form::text('web', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>

								<div class="col-md-4"> 
									{!!Form::label('youtube', 'Your video', array('class' => 'pt-3'))!!}
									{!!Form::text('youtube', null, array('class' => 'form-control', 'maxlength' => '255'))!!}      
								</div>
							</div>

							<div class="row pt-4">
								<div class="col-md-6">
									{!!Form::label('twitter', 'Twitter', array('class' => 'pt-3'))!!}
									{!!Form::text('twitter', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>
		
								<div class="col-md-6">               
									{!!Form::label('facebook', 'Facebook', array('class' => 'pt-3'))!!}
									{!!Form::text('facebook', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>
							</div>

							<div class="row pt-4">
								<div class="col-md-6">
									{!!Form::label('linkedin', 'Linkedin', array('class' => 'pt-3'))!!}
									{!!Form::text('linkedin', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>
		
								<div class="col-md-6">               
									{!!Form::label('googleplus', 'Googleplus', array('class' => 'pt-3'))!!}
									{!!Form::text('googleplus', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
								</div>
							</div>

							<div class="row pt-4"> 
								<div class="col-md-12">      
									{!!Form::label('about', 'Profile description:', array('class' => 'pt-3'))!!}
									{!!Form::textarea('about', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
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
