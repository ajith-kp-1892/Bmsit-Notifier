<?php
include_once "session.php";
include_once('db.php');

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
	header('Content-Type: application/json');
	echo json_encode($rows);
	
} else {
    echo "0 results";
}
mysqli_close($db);
?>