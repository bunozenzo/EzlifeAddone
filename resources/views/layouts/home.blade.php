<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>learn Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/reponsive.css') }}">
	<link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
	<script src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	
</head>
<body>
	<div class="container-fluid" id="mainwrap">
		<header class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="itemImg">
						<img src="{{ asset('public/images/dllogo1.png') }}" alt="">
						<p>Mods, Maps, Skins, Seeds, Texture Packs</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 menu">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav navbar-left">
										<li><a href="#" id="selected">Trang chủ</a></li>
										<li><a href="#">Liên hệ</a></li>
										<li><a href="#">Dịch vụ</a></li>
										<li><a href="#">Thông tin</a></li>
										<li><a href="#">Địa chỉ</a></li>

									</ul>
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-8 headerLeft">
						<h2>MCPE DL</h2>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-4 headerRight">
						<i class="fa fa-bars fa-lg" aria-hidden="true"></i>
						<p>Folow:</p>
						<div class="pull-right">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="container-fluid content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-8 contentLeft">
						 @yield('content')
					</div>
					<div class="col-xs-2 col-sm-2 col-md-4 contentRight">
						<div class="contentRtop">
							<button type="button" class="btn btn-success bt-sm">Login</button>
							<button type="button" class="btn btn-success bt-sm">Sing Up</button>
							<button type="button" class="btn btn-info bt-sm">Submission</button>
						</div>
						<div class="search">
							<input type="search" name="" id="input" class="form-control" value="" required="required" title="">
						</div>
					</div>
				</div>
			</div>			
		</section>
		<footer class="container-fluid">
			<div class="container">
				<p>Copyright © 2014.</p>
				<p>We are not affiliated with Mojang AB.</p>
			</div>
		</footer>
	</div>
</body>
</html>