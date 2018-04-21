@extends('dashboard.index')
@section ('title', "| $page_name")
@section('content')
<section id="content">
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row wrapper border-bottom white-bg">
			<div class="inside">
                <h2>User profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}"> Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fas fa-pencil-alt"></i> {!! $page_name !!}
                    </li>
                    <span class="pull-right">
                    	<i class="fa fa-chevron-left"></i> <a href="{{route('profiles.index')}}">Back to profiles</a>
                    </span>
                </ol>
                <hr>

			    <div id="contenido"  class="card">
				    @if(count($errors) > 0)
				        <ul class="list-group">    
				            @foreach($errors->all() as $error)
				                <li class="list-group-item text-danger">{{$error}}</li>
				            @endforeach
				        </ul>
				    @endif
					<div class="form-horizontal">
					    <div id="rootwizard" class="tabs-container">
					    	<ul class="nav nav-tabs user-tabs">
					    	  	<li class="active"><a href="#tab-user" data-toggle="tab"><i class="fa fa-user"></i>User Account</a></li>
					    		<li class=""><a href="#tab-profile" data-toggle="tab"><i class="fa fa-desktop"></i>Profile</a></li>
					    	</ul>
					    	<div class="tab-content">
					    	    <div class="tab-pane active" id="tab-user">
					    	    	<div class="m-t-md">
										<h3>First, create an user</h3>
									    <div class="row justify-content-center">
									        <div class="col-md-8">
									            <div class="card">
									                 <div class="card-body pt-5">
									                    <form method="POST" action="{{ route('register') }}">
									                        @csrf

									                        <div class="form-group row">
									                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

									                            <div class="col-md-6">
									                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

									                                @if ($errors->has('name'))
									                                    <span class="invalid-feedback">
									                                        <strong>{{ $errors->first('name') }}</strong>
									                                    </span>
									                                @endif
									                            </div>
									                        </div>

									                        <div class="form-group row">
									                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

									                            <div class="col-md-6">
									                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

									                                @if ($errors->has('email'))
									                                    <span class="invalid-feedback">
									                                        <strong>{{ $errors->first('email') }}</strong>
									                                    </span>
									                                @endif
									                            </div>
									                        </div>

									                        <div class="form-group row">
									                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

									                            <div class="col-md-6">
									                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

									                                @if ($errors->has('password'))
									                                    <span class="invalid-feedback">
									                                        <strong>{{ $errors->first('password') }}</strong>
									                                    </span>
									                                @endif
									                            </div>
									                        </div>

									                        <div class="form-group row">
									                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

									                            <div class="col-md-6">
									                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
									                            </div>
									                        </div>

									                        <div class="form-group row mb-0 pt-3">
									                            <div class="col-md-6 col-md-offset-4">
									                                <button type="submit" class="btn btn-primary btn-block">
									                                    {{ __('Register') }}
									                                </button>
									                            </div>
									                        </div>
									                    </form>
									                </div>
									            </div>
									        </div>
									    </div>
								    </div>
					    	    </div>
								<div class="tab-pane" id="tab-profile">
									<div class="m-t-md">
										<h3>Profile information</h3>
										{!!Form::open(array('route' => 'profiles.store', 'files' => true)) !!}   
										<div class="row pt-5">        
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
	</div>
</section>

@endsection
