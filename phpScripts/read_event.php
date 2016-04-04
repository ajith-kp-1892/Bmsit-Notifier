<?php
include_once('db.php');

$fetchEvents = "SELECT e.event_title,e.event_description,e.event_venue,e.event_date,e.author
FROM `event` e";
$exceFetchEvents = mysqli_query($fetchEvents,$db);
$rows = array();
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
         
		$rows[] = $row;
    }
	header('Content-Type: application/json');
	echo json_encode($rows);
	
} else {
    echo "0 results";
}
$conn->close();
?>