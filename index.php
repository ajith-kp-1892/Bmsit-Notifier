<!DOCTYPE html>
<html>
<head>
<title>BMSIT Notifier</title>
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
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- bannner -->
	<div class="banner">
		<div class="container">
			<div class="logo">
				<a href="index.php">BMSIT</a>
			</div>
			<!-- <div class="banner-info">
				<h1>The Largest Selection Of <span>Apartments</span></h1>
				<p>most the best investment of your money.</p>
			</div> -->
		</div>
	</div>

<div class="col-md-6" style="margin: auto;background: transparent;float:none;">
	<div class="grid_3 grid_5">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Login</a></li>
				<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Sign Up</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<form action="" method="post" name="login">
						<div class="input-group" style="display: inline-flex;">
							<span class="input-group-addon" id="sizing-addon2">@</span>
							<input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2">
						</div><br>
						<div class="input-group" style="display: inline-flex;">
							<span class="input-group-addon" id="sizing-addon2">@</span>
							<input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="sizing-addon2">
						</div><br>
						<button class="label label-success" style="font-size: 100%;line-height: 2;" onclick="loginUser()">Log In</button>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					<div class="input-group" style="display: inline-flex;">
						<span class="input-group-addon" id="sizing-addon2">&#9786</span>
						<input type="text" class="form-control" placeholder="Username" id="username" aria-describedby="sizing-addon2">
					</div><br>
					<div class="input-group" style="display: inline-flex;">
						<span class="input-group-addon" id="sizing-addon2">@</span>
						<input type="text" class="form-control" placeholder="Email" id="email" aria-describedby="sizing-addon2">
					</div><br>
					<div class="input-group" style="display: inline-flex;">
						<span class="input-group-addon" id="sizing-addon2">@</span>
						<input type="text" class="form-control" placeholder="Usn" id="usn" aria-describedby="sizing-addon2">
					</div><br>
					<div class="input-group" id="from-to-section" style="display: inline-flex;">
					<span class="input-group-addon" id="sizing-addon2">@</span>
						<select id="department_id" class="form-control">
							<option value="0">Select One</option>
	                        <option value="1">MCA</option>
	                        <option value="2">MECH</option>
	                        <option value="3">ECE</option>
	                        <option value="4">CS</option>
		                    <option value="5">CS</option>
		                    <option value="6">TELECOM</option>
		                    <option value="7">ISE</option>
		                    <option value="8">CIVIL</option>
		                </select>
					</div></br>
					<div class="input-group" style="display: inline-flex;">
						<span class="input-group-addon" id="sizing-addon2">@</span>
						<input type="password" class="form-control" placeholder="Password" id="password" aria-describedby="sizing-addon2">
					</div><br>
					<div class="input-group" style="display: inline-flex; align:left;">
						<span class="input-group-addon" id="sizing-addon2">@</span>
						<input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" aria-describedby="sizing-addon2">
					</div><br>
					<button class="label label-success" style="font-size: 100%;line-height: 2;" onclick="registerUser()">Register</button>
				</div>	
				<div id ='status' class='form'></div>
			</div>
		</div>
	</div>
	</div>
	<div class="clearfix"> 
	</div>
	<script src="js/bootstrap.js"></script>
<script>
	//User Login
	function loginUser(){
		var email = $("#email").val();
		var password = $("#password").val();

		$.ajax({
		    url    :    'index.ajax.php',
		    type   :    'POST',
		    dataType: 	'JSON',
		    data   :    {
		        'type'	: 1,
		        'email'		: email,
		        'password'	: password
		    }
		})
		.done(function(response) {
		    try{
		       	if (response.status.code == 'success') {
		       		$("#status").html(response.status.message);
		       		exit;
				}
				else if (response.status.code == 'failure') {
					console.error(response.status.message);
		       		exit;
                } 
                else {
   					console.error("Invalid Status Code");
					}
            } catch (e) {
               console.error(e);
            }
        })
        .fail (function(xhr, textStatus, errorThrown) {
            console.error("AJAX FAIL");
            console.error(xhr.responseText);
            console.error(textStatus);
            console.error(errorThrown);
        });
    };

    //User register
	function registerUser(){
		var username = $("#username").val();
		var email = $("#email").val();
		var usn = $("#usn").val();
		var department_id = $("#department_id").val();
		var password = $("#password").val();

		$.ajax({
		    url    :    'index.ajax.php',
		    type   :    'POST',
		    dataType: 	'JSON',
		    data   :    {
		        'type'	: 2,
		        'username'	: username,
		        'email'		: email,
		        'usn'		: usn,
		        'department_id'	: department_id,
		        'password'	: password
		    }
		})
		.done(function(response) {
		    try{
		       	if (response.status.code == 'success') {
		       		$_SESSION['username'] = $username;
		       		window.location.href = "";
				}
				else if (response.status.code == 'failure') {
                } 
                else {
   					console.error("Invalid Status Code");
					}
            } catch (e) {
               console.error(e);
            }
        })
        .fail (function(xhr, textStatus, errorThrown) {
            console.error("AJAX FAIL");
            console.error(xhr.responseText);
            console.error(textStatus);
            console.error(errorThrown);
        });
    };
</script>
</body>
</html>
