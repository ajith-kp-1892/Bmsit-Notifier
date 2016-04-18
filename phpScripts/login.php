<?php

	include_once "db.php";
	
	try{
		$email = mysqli_real_escape_string($db,$_POST['email1']);
		$password = sha1(mysqli_real_escape_string($db,$_POST['password1']));

		$getList = "SELECT u.email,u.password,u.h_id FROM users u WHERE u.email = '$email' AND u.password = '$password'";
		$execList = mysqli_query($db,$getList);
		$data = mysqli_fetch_assoc($execList);
		$count = mysqli_num_rows($execList);

		if($count == 0){
			?>
				<!-- This piece of code isn't working. Please give it a look -->
				<script type="text/javascript">alert("Invalid Username/Passsword");</script>
				<!-- End of Issue-->
				<?php
					header('Location: ../index.php');
		}
		else{
			if($data['h_id'] == 1){
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['h_id'] = 1;
				header('Location: ../adminCreateEvents.php');
			}
			
			if($data['h_id'] == 2){
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['h_id'] = 2;
				header('Location: ../events.php');
			}
		}
	}
	catch(Exception $e){
		?>
				<script>document.alert("Invalid Username/Passsword");</script>
				<?php
					header('Location: ../index.php');
	}
	finally{
		mysqli_close($db);
	}
?>