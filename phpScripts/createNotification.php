<?php
	include_once "session.php";
	//Check admin or not
	if($_SESSION['h_id'] != 1){	
		header('Location: ../index.php');
	}
	else{
		try {
			include_once "db.php";

			if(isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['author']) && isset($_POST['description'])){
				$subject = $_POST['subject'];
				$date = $_POST['date'];
				$author = $_POST['author'];
				$description = $_POST['description'];

				$setEvent = mysqli_query($db,"INSERT IGNORE INTO notification(subject,description,date,author) VALUES('$subject','$description','$date','$author')");
				if(!$setEvent){
					echo "<script>alert('Event creation failed');</script>";
					header('Location: ../adminCreateNotification.php');
				}
				else{
					echo "<script>alert('Event created successfully');</script>";
					header('Location: ../adminCreateNotification.php');
				}
			}
			else{
				echo "<script>alert('POST parameters not set');</script>";
				header('Location: ../adminCreateNotification.php');
			}
		}
		catch(Exception $e) {
			echo '<script>console.log(Caught exception: ',  $e->getMessage(), ");\n</script>";
		}
		finally {
			mysqli_close($db);
		}
	}
?>