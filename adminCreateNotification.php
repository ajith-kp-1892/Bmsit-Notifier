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
<script src="js/notificationController.js"></script>
<!-- //js -->
<script src="js/bootstrap.js"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
</head>
<script src="js/ipconfig.js"></script>
<link href="css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="css/bootstrap-datetimepicker.min.css">
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
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
							<ul class="nav navbar-nav">
								<li><a href="adminCreateEvents.php">Event Creation</a></li>
								<li><a href="adminCreateNotification.php" class="active">Notification Creation</a></li>
								<li><a href="adminEventsList.php">Events</a></li>
								<li><a href="adminNotificationList.php">Notification</a></li>
								<li><a href="phpScripts/logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>

<!-- //bannner -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			
			<div class="col-md-6 mail-left">
				<h3>Create a <span>Notification</span></h3>
				<form method="POST" action="phpScripts/createNotification.php">
					<input type="text" placeholder="Subject" name="subject" required>
					<div id="datetimepicker" class="input-append date">
						 <input type="text" placeholder="Submission Date" name="date" required></input>
						  <span class="add-on" style="position:relative">
							  <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						 </span>
					    </div>
					<div class="clearfix"> </div>
					<input type="text" placeholder="Author" name="author" required>
					<textarea placeholder="Type Your Description Here...." name="description" required></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	 <script type="text/javascript"
     src="js/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="js/bootstrap-datetimepicker.min.js">
    </script>
    <!-- Calendar -->
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'yyyy/MM/dd'
      });
    </script>
	<!-- End of Calendar -->
	<script src="js/bootstrap.js"></script>
</body>
</html>