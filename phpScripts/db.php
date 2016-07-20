<?php
//Initialize DB parameters
define('DB_SERVER', 'mysql.hostinger.in');
define('DB_USERNAME', 'u990132261_notif');
define('DB_PASSWORD', 'bmsitnotif');
define('DB_DATABASE', 'u990132261_bmsit');
//Connect to server DB
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//Error handling connectivity
if (!$db) {
	echo "Unable to connect to DB: " . mysqli_connect_error();
	exit;
}
?>
