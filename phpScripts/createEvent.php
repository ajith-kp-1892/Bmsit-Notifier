<?php
	include_once "session.php";
	//Check admin or not
	if($_SESSION['h_id'] != 1){
		session_destroy();
		header('Location: ../index.php');
	}
	else{
		try {
			include_once "db.php";

			if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['venue']) && isset($_POST['description'])){
				$title = $_POST['title'];
				$date = $_POST['date'];
				$venue = $_POST['venue'];
				$description = $_POST['description'];
				
				$insertDate  = date("Y-m-d",strtotime($date));
				
				$setEvent = mysqli_query($db,"");
				$author = $_SESSION['email'];

				$setEvent = mysqli_query($db,"INSERT IGNORE INTO event(event_title,event_description,event_venue,event_date,author) VALUES('$title','$description','$venue','$insertDate','$author')");
				if(!$setEvent){
					echo "<script>alert('Event creation failed');</script>";
					header('Location: ../adminCreateEvents.php');
				}
				else{
					echo "<script>alert('Event created successfully');</script>";
					header('Location: ../adminCreateEvents.php');
				}
			}
			else{
				echo "<script>alert('POST parameters not set');</script>";
				header('Location: ../adminCreateEvents.php');
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
