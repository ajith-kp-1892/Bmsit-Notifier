<?php

include 'db.php';
include 'ajaxresponse.php';

$fetchNotifications = "select * from notification";
$execFetchNotifications = mysqli_query($db,$fetchNotifications);
$rows = mysqli_num_rows($db,$execFetchNotifications);

if ($rows > 0) {
	$count = 0;
	$data = array();
    while($row = mysqli_fetch_assoc($db,$execFetchNotifications)) {         
		$data[$count++] = $row;
    }
	header('Content-Type: application/json');
	echo json_encode($rows);
	
} else {
    echo "No results found";
}

mysqli_close();
?>