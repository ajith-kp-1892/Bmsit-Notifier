<?php
echo "<script>console.log('Entered');</script>";
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'bms_notif');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$db) {
	echo "Unable to connect to DB: " . mysqli_connect_error();
	exit;
}

?>