<?php

include_once "session.php";
include 'db.php';

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
?>