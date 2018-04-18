@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')

<section id="content">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>{!! $page_name !!} <span class="mt-3 small pull-right">Total profile: {{count($all_profiles)}}</span> </h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> All {!! $page_name !!}s
                    </li>
                    <span class="pull-right"><i class="fas fa-pencil-alt"></i> <a href="{{route('profiles.create')}}">Create a new profile</a></span>
                </ol>
                
                <hr>
			    <div id="contenido" class="card">
					<div class="tabs-container">
						<ul class="nav nav-tabs user-tabs">
							<li class="active"><a href="#tab-user" data-toggle="tab"><i class="fa fa-user"></i>User Account</a></li>
							<li class=""><a href="#tab-profile" data-toggle="tab"><i class="far fa-user-circle"></i>Profile</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab-user"> 	
								<div class="row justify-content-center">
									@include('dashboard.register')
					            </div>
							</div>
							<div class="tab-pane" id="tab-profile">
								<div class="text-center m-t-md">
									<h2>Profile information</h2>
									{!!Form::open(array('route' => 'profiles.store', 'files' => true)) !!}   

									<div class="row">        
										<div class="col-md-4"> 
											<i class="fa fa-image fa-5x"></i>
											<div class=" pt-5">
												{!!Form::label('image', 'Upload a Featured Image') !!}
												{!!Form::file('image', null, array('class' => 'form-control', 'required' => ''))!!}
											</div>
										</div>
					  
										<div class="col-md-8"> 
											<div class="row">
												<div class="col-md-6">       
													{!!Form::label('user_name', 'Profile title', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('user_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
												</div>

												<div class="col-md-6">
													{!!Form::label('birthday', 'Birthday', array('class' => 'form-spacing-top'))!!}
													{!!Form::date('birthday', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
												</div>		            		
											</div>

											<div class="row pt-4">   
												<div class="col-md-6">               
													{!! Form::label('id', 'Role:') !!}
													{!! Form::select('id', ['' => 'Choose a Role'] + $all_roles, null, array('class' => 'form-control')) !!}
												</div>

												<div class="col-md-6"> 
													{!! Form::label('id', 'Status:') !!}
													{!! Form::select('id', ['' => 'Choose a Status'] + $all_st, null, array('class' => 'form-control')) !!}     
												</div>
											</div>										

											<div class="row pt-4">
												
												<div class="col-md-6">               
													{!!Form::label('web', 'Website', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('web', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
												</div>

												<div class="col-md-6"> 
													{!!Form::label('youtube', 'Your video', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('youtube', null, array('class' => 'form-control', 'maxlength' => '255'))!!}      
												</div>
											</div>

											<div class="row pt-4">
												<div class="col-md-6">
													{!!Form::label('twitter', 'Twitter', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('twitter', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
												</div>
						
												<div class="col-md-6">               
													{!!Form::label('facebook', 'Facebook', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('facebook', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
												</div>
											</div>

											<div class="row pt-4">
												<div class="col-md-6">
													{!!Form::label('linkedin', 'Linkedin', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('linkedin', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
												</div>
						
												<div class="col-md-6">               
													{!!Form::label('googleplus', 'Googleplus', array('class' => 'form-spacing-top'))!!}
													{!!Form::text('googleplus', null, array('class' => 'form-control', 'maxlength' => '255'))!!}
												</div>
											</div>

											<div class="row pt-4"> 
												<div class="col-md-12">      
													{!!Form::label('about', 'Profile description:', array('class' => 'form-spacing-top'))!!}
													{!!Form::textarea('about_chanel', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
												</div>
											</div>

											<div class="pt-4">    
												{!!Form::submit('Add profile', array('class' => 'btn btn-success btn-block')) !!}
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
	</div>
</section>
@endsection


