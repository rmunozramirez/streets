@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Edit: {!! $profile->title !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('profiles.index')}}">Back to profiles</a>
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
						<div class="tab-pane" id="tab-profile">
							<div class="m-t-md">
								<h2 class="pb-5">Profile information</h2>
								 {!! Form::model($profile, ['method'=>'PATCH', 'action'=> ['DashboardProfileController@update', $profile->slug ],'files'=>true]) !!}   
								<div class="row">        
									<div class="col-md-4"> 
										<img class="img-responsive"  src="{{URL::to('/images/' . $profile->image ) }}" alt="{{$profile->title}}" >
										<div class=" pt-5">
											{!!Form::label('image', 'Upload a Featured Image') !!}
											{!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
										</div>
									</div>
									<div class="col-md-8"> 
										<div class="row">
											<div class="col-md-6">       
												{!!Form::label('title', 'Profile title', array('class' => 'pt-3'))!!}
												{!!Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
											</div>

											<div class="col-md-6">
												{!!Form::label('birthday', 'Birthday', array('class' => 'pt-3'))!!}
												{!!Form::date('birthday', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
											</div>		            		
										</div>

										<div class="row pt-4">   
											<div class="col-md-6">               
												{!! Form::label('role_id', 'Role:') !!}
												{!! Form::select('role_id', ['' => 'Choose a Role'] + $all_roles, null, array('class' => 'form-control')) !!}
											</div>

											<div class="col-md-6"> 
												{!! Form::label('status', 'Status:') !!}
												{!! Form::select('status',  ['' => 'Choose Status', 'active' => 'Active', 'inactive' => 'Inactive', 'banned' => 'Banned'], null, array('class' => 'form-control')) !!} 
											</div>
										</div>										

										<div class="row pt-4">
											
											<div class="col-md-6">               
												{!!Form::label('web', 'Website', array('class' => 'pt-3'))!!}
												{!!Form::text('web', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
											</div>

											<div class="col-md-6"> 
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
		</div>
	</div>
</section>

@endsection
