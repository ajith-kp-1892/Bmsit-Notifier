<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html ng-app>
<head>
<title>BMS IT&M</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/ipconfig.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
<script src="js/notificationController.js"></script>
<script src="js/bootstrap.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- bannner -->
	<div class="banner1">
		<div class="container">
			<div class="logo">
				<a href="index.html">B.M.S Institute of Technology and Management <span>Bangalore</span></a>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
							<ul class="nav navbar-nav">
								<li><a href="events.html">News & Events</a></li>
								<li><a href="services.html" class="active">Services</a></li>
								<li><a href="mail.html">Mail Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //bannner -->
<!-- services -->
	<div class="services"  ng-controller="NotificationController">
		<div class="container">
			<h3><span></span> Notifications</h3>
			<p class="dolore">Consectetur adipiscing elit, sed do 
				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
				minim veniam.
			</p>
			<div class="services-grids"  ng-repeat="notify in notificationData">
				<div class="col-md-7 services-grid-right">
					<div class="services-grid-right1" >
						<div class="col-xs-4">
							<div class="services-grid-right1-left1">
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-8 services-grid-right1-right">
							<h4>{{notify.subject}}</h4>
							<p>{{notify.desc}}</p>
							<p style="float:left;"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp{{notify.date}}</p>
							<p style="float:right;">{{notify.author}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
				</div>
			</div>
			</div>
	</div>			
</body>
</html>
