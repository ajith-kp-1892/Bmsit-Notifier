<?php

	include_once "session.php";
	//Check student or not
	if($_SESSION['h_id'] != 2 || $_SESSION['h_id'] != 1){	
		header('Location: ../index.php');
	}
	else{
	
		include 'db.php';

		try{
			$fetchNotifications = "select * from notification";
			$execFetchNotifications = mysqli_query($db,$fetchNotifications);
			$rows = mysqli_num_rows($execFetchNotifications);

			if ($rows > 0) {
				$count = 0;
				$data = array();
			    while($row = mysqli_fetch_assoc($execFetchNotifications)) {         
					$data[$count++] = $row;
			    }
				header('Content-Type: application/json');
				echo json_encode($data);
				
			} else {
			    echo "No results found";
			}
		}
		catch(Exception $e){
			echo '<script>console.log(Caught exception: ',  $e->getMessage(), ");\n</script>";
		}
		finally{
			mysqli_close($db);
		}
	}
?>
