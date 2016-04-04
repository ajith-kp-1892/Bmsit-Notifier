<?php
// ajax response format

// include_once("../share/config.php");

// ajax response structure
function ajaxresponse( $statusCode, $statusMessage, $result ) {
	$response = array(
		"status"  	=> array(
			"code" 		=> "failure",
			"message" 	=> "default_message",
		),
		"result" 	=> null,
	);
	$response['status']['code'] = $statusCode;
	$response['status']['message'] = $statusMessage;
	$response['result'] = $result;
	// $response['debug'] = debug_backtrace();
	// $response['result'] = ( $statusCode == "failure" ? null : $result );
	echo json_encode($response);
	exit();
}

?>