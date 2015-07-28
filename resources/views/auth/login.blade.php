<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Login</title>

<script src="js/jquery.js"></script>
<script src="js/uff/jquery-ultimate-fancy-form.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.dropdown.js"></script>

{!! Html::style('css/uff/animate.css') !!}
{!! Html::style('css/uff/jquery-ultimate-fancy-form.css') !!}
{!! Html::style('css/uff/hint.css') !!}
{!! Html::style('css/normalize.css') !!}
{!! Html::style('css/foundation.min.css') !!}
{!! Html::style('css/foundation.css') !!}
{!! Html::style('css/uff/custom.css') !!}

<link rel="shortcut icon" href="img/favicon.ico">

</head>
<body>
	<div class="large-4 large-offset-4 columns" style="vertical-align:middle; " class="form">

	<div class="row show-for-large-only" align="center" style="margin-top:8rem;">
	</div>
	<div class="row hide-for-small" align="center">
		{!! html_entity_decode(Html::link('/',
			Html::image('img/Logo3.png'),array(
		'id'=>'logo_login',
		'style'=>'width:350px;'
		))) !!}
	</div>
	<div class="row show-for-small-only" align="center" style="margin-top:100px;">

		{!! html_entity_decode(Html::link('/',
			Html::image('img/Logo3.png'),array(
		'id'=>'logo_login',
		))) !!}

	</div>
		
		<div class="row">	
		
		@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
		@endif
		
				{!! Form::open(array(
					'url' => '/auth/login',
					'method' => 'post',
					'role'=>'form',
					'class'=>'form form-horizontal component-uff p15','style'=>'border:2px solid #fff;')) !!}
				{!! Form::token() !!}
				<div class="row">
						<div class="large-12 columns">
							<div data-step>
								<div class="row">
									<div class="large-12 columns">
											<h2 data-sb="fadeInLeft" class="sub-title">Welcome to Eventica</h2>
										
										<div class="form-group">
											<label class="columns large-3 control-label" data-sb="fadeInRight">Username</label>
											<div class="columns large-9">
												<!--{!! Form::email('email',null,['data-sb'=>'fadeInLeft','class'=>'form-control','data-validation-required'=>'#manager_first_name_error_required','placeholder'=>'eventica']); !!}-->
												<input type="email" class="form-control" name="email" value="{{ old('email') }}">
												

												<!--<div class="clearfix"></div>
												<div id="manager_first_name_error_required" class="alert-box warning warning-danger">
												Username is required
												</div>-->
											</div>
										</div>
										<div class="form-group">
											<label class="columns large-3 control-label" data-sb="fadeInRight">Password</label>
											<div class="columns large-9">
												<!--{!! Form::password('password',['data-sb'=>'fadeInLeft','class'=>'form-control','data-validation-required'=>'#manager_last_name_error_required','placeholder'=>'••••••••••••']) !!}
												<div class="clearfix"></div>
												<div id="manager_last_name_error_required" class="alert-box warning warning-danger">
												Password is required
												</div>-->
												<input type="password" class="form-control" name="password">
											</div>
											</div>
										</div>
										{!! Form::checkbox('remember',null,false,['id'=>'rememberMe','style'=>'margin-left:10px;']); !!}
										<label for="rememberMe"><div style="color:#fff;">Remember me</div></label>
										{!! Form::button('Log in',array('class'=>'button send_form radius','type'=>'submit','data-sb'=>'bounceInLeft','data-step-finish')) !!}
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				
				{!! Form::close() !!}
				<div style="color:#fff;text-align:center;">&copy; 2015 Eventica. All Rights Reserverd.</div>
		</div>
	</div>
</body>
</html>