<?php
	include_once "db.php";
	
	try{
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$usn = mysqli_real_escape_string($db,$_POST['usn']);
		$department_id = mysqli_real_escape_string($db,$_POST['department_id']);
		$password = sha1(mysqli_real_escape_string($db,$_POST['password']));
		
		$username = trim($username);
		$email = trim($email);
		$usn = trim($usn);
		$department_id = trim($department_id);
		$password = trim($password);
		$h_id = 2;
		
		// Check user credentials
		$checkAvailability = "SELECT u.email FROM users u WHERE u.email = '$email' AND h_id = '$h_id' ";
		$execCheckAvailability = mysqli_query($db,$checkAvailability);
		
		$count = mysqli_num_rows($execCheckAvailability); // if email not found then register
		
		if($count == 0){

			echo "<script>console.log('Inserting Values...');</script>";

			$insertStudentQuery = mysqli_query($db,"INSERT INTO student(usn,department_id,h_id) VALUES('$usn','$department_id','$h_id')");

			$insertUserQuery = mysqli_query($db,"INSERT INTO users(username,email,password,h_id) VALUES('$username','$email','$password','$h_id')");

			if( $insertStudentQuery && $insertUserQuery ){
				echo "<script>console.log('Successfully registered');</script>";
				header('Location: ../index.php');
			}
			else
			{
				echo "<script>console.log('Error while registering');</script>";
			}
		}

		else{
				echo "<script>console.log('Sorry Email ID already taken');</script>";
		}
	}
	catch(Exception $e){
		echo '<script>console.log(Caught exception: ',  $e->getMessage(), ");\n</script>";
	}
	finally{
		mysqli_close($db);
	}

?>