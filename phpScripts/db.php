<?php
echo "<script>console.log('Entered');</script>";
define('DB_SERVER', 'sql29.hostinger.in');
define('DB_USERNAME', 'u990132261_ajith');
define('DB_PASSWORD', 'bmsitnotify');
define('DB_DATABASE', 'u990132261_bmsit');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$db) {
	echo "Unable to connect to DB: " . mysqli_connect_error();
	exit;
}

?>
