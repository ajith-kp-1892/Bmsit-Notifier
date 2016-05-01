<?php
	include_once "phpScripts/session.php";
	//Check admin or not
	if($_SESSION['h_id'] != 1){	
	header('Location: index.php');
}
?>
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
<script src="js/eventController.js"></script>
<!-- //js -->
<script src="js/bootstrap.js"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
</head>
<script src="js/ipconfig.js"></script>
<script src="js/eventController.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- bannner -->
	<div class="banner1">
		<div class="container">
			<div class="logo">
				<a href="">B.M.S Institute of Technology and Management <span>Bangalore</span></a>
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
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
							<ul class="nav navbar-nav">
								<li><a href="adminCreateEvents.php">Event Creation</a></li>
								<li><a href="adminCreateNotification.php">Notification Creation</a></li>
								<li><a href="adminEventsList.php" class="active">Events</a></li>
								<li><a href="adminNotificationList.php">Notification</a></li>
								<li><a href="phpScripts/logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
	
	<div class="news" ng-controller="EventController">
		<div class="container">
			<h3><span>Latest</span> Events</h3>
			<p class="dolore"></p>
			<div class="news-grids">
				<div class="col-md-4 news-grid" ng-repeat="event in eventsData">
					<div class="news-grid1">
						<div class="news-grid1-sub">
							<h4><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								{{event.event_date}}  @  {{event.event_venue}}</h4>
							<h5>{{event.event_title}}</h5>
							<p>{{event.event_description}}</p>
						</div>
						<img src="images/1.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>
