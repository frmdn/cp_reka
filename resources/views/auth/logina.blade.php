
<!doctype html><html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<link rel="shortcut icon" href="{{ URL::asset('adm/login/images/police.ico') }}" type="image/x-icon">
<!-- Bootstrap  -->
<link href="{{ URL::asset('adm/login/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- icon fonts font Awesome -->
<link href="{{ URL::asset('adm/login/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- Import Custom Styles -->
<link href="{{ URL::asset('adm/login/css/style.css') }}" rel="stylesheet">
<!-- Import Animate Styles -->
<link href="{{ URL::asset('adm/login/css/animate.min.css') }}" rel="stylesheet">
<!-- Import Custom Responsive Styles -->
<link href="{{ URL::asset('adm/login/css/responsive.css') }}" rel="stylesheet">
<style type="text/css">
	.alert {
		color:#464037;
		font-size:13px;
		display:none;
		border-radius:0;
	}
	.hakcipta {
		font-size:12px;
		text-align:center;
	}
	.btn-bhabin {
		width:100%;
	}
	label {
		font-size: 13px;
	}
	input.form-control {
		border-radius: 0;
	}
	.site-banner {
		display: block;
	}
</style>
</head>
<body class="header-fixed-top">
<div id="page-top" class="page-top"></div><!-- /.page-top -->
<section id="site-banner" class="site-banner text-center">
	<div class="container">
		<div class="site-logo">
			<a href="#"><img src="{{ URL::asset('adm/login/images/logo.png') }}" alt="Rekasys" width="300px" height="150px"></a>
		</div><!-- /.site-logo -->
	</div><!-- /.container -->
</section><!-- /#site-banner -->
<section id="main-content" class="main-content blog-post-singgle-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<div id="blog-post-content" class="blog-post-content">
					<article class="post type-post">
						<div class="alert alert-danger text-center">8957320</div>
						<div class="post-top">
							<form action="{{ route('login') }}" aria-label="{{ __('Login') }}">
								<div class="form-group">
									<label>Email </label>
									<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
								
								@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
									
								 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif	
									
								</div>
								<hr>
								<button type="submit" class="btn btn-lg btn-bhabin">{{ __('Login') }}</button>
							</form>
							<br>
							<div class="hakcipta">
								Hak Cipta &copy; 2018								<br>
								Rekasystem Technology
							</div>
						</div><!-- /.post-top -->
					</article>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div><!-- /.container -->
	<br><br>
</section><!-- /#main-content -->

</body>
</html>