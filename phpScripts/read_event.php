<?php
	
	include_once "session.php";
	//Check student or not
	if($_SESSION['h_id'] != 2 || $_SESSION['h_id'] != 1){	
		header('Location: ../index.php');
	}
	else{
		
		include_once('db.php');

		try{
			$fetchEvents = "SELECT e.event_title,e.event_description,e.event_venue,e.event_date,e.author
			FROM `event` e";

			$exceFetchEvents = mysqli_query($db,$fetchEvents);
			$count = mysqli_num_rows($exceFetchEvents);
			//$eventList = mysqli_fetch_assoc($exceFetchEvents);
			$rows = array();
			if ($count > 0) {
			    $i=0;
			    while($row = mysqli_fetch_assoc($exceFetchEvents)) {      
					$rows[$i++] = $row;
			    }
				
				header('content-type: application/json; charset=utf-8');
				header("access-control-allow-origin: *");
				
				echo json_encode($rows);
				
			} else {
			    echo "0 results";
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
