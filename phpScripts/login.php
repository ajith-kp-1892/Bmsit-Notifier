<?php

	include_once "db.php";
	
	try{
		$email = mysqli_real_escape_string($db,$_POST['email1']);
		$password = sha1(mysqli_real_escape_string($db,$_POST['password1']));

		$getList = "SELECT u.email,u.h_id FROM users u WHERE u.email = '$email'";
		$execList = mysqli_query($db,$getList);
		$data = mysqli_fetch_assoc($execList);
		$count = mysqli_num_rows($execList);

		if($count == 0 || $count > 1){
			?>
				<script>
					$('#status').css('color','green');
					$('#status').html('Error while registering');
				</script>
				<?php
		}
		else{
			if($data['h_id'] == 1){
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['h_id'] = 1;
				header('Location: ../adminCreateEvents.php');
			}
			else if($data['h_id'] == 2){
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['h_id'] = 2;
				header('Location: ../events.php');
			}
			else{
				echo '<script>console.log("Invalid choice");</script>';
			}
		}
	}
	catch(Exception $e){
		echo '<script>console.log(Caught exception: ',  $e->getMessage(), ");\n</script>";
	}
	finally{
		mysqli_close($db);
	}
?>
