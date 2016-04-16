<?php
	include_once "db.php"
	if(isset($_POST['title']) && isset($_POST['event_date']) && isset($_POST['venue']) && isset($_POST['description'])){
		
		$title = $_POST['title'];
		$event_date = $_POST['event_date'];
		$venue = $_POST['venue'];
		$description = $_POST['description'];

		$setEvent = mysqli_query($db,"INSERT INTO student(usn,department_id,h_id) VALUES('$usn','$department_id','$h_id')");
	}
	else{
		echo "'<script>çonsole.log('No data set')";
	}

?>