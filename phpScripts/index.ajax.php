<?php

include 'db.php';
include 'ajaxresponse.php';

if(ISSET($_POST['type']))
{
	$type = $_POST['type'];
	
	if($type == 1){
		login();
	}
	elseif ($type == 2) {
		register();
	}
	else{
		$status = 'failure';
		ajaxresponse($status, 'Invalid type received', null);
	}

	function login(){
	// If form submitted, insert values into the database.
    if (ISSET($_POST['email']) && ISSET($_POST['password']) && ISSET($_POST['username'])){

    	$username = $_POST['username'];
        $username = $_POST['email'];
        $password = $_POST['password'];
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		$password = sha1($password);
	//Checking is user existing in the database or not
        $fetchStudentDetails = "SELECT s.email FROM student s WHERE s.email='$email' AND s.password= '$password'";
		$execFetchStudentDetails = mysql_query($fetchStudentDetails) or die(mysql_error());
		$rows = mysql_num_rows($execFetchStudentDetails);
        if($rows==1){
        	$staus = 'success';
			$response['data']['username'] = $username;
			ajaxresponse($status,'Found student details',$response)
            }else{
				ajaxresponse($status, 'Student Record Not Found', $response);
			}
    }else{
    	$status = 'failure';
		ajaxresponse($status,"POST variables not set",null)
	}
	}	

	function register(){
		if(ISSET($_POST['username']) && ISSET($_POST['email']) && ISSET($_POST['password']) && ISSET($_POST['usn']) && ISSET($_POST['department_id']) && ISSET($_POST['password'])){

			$username = $_POST['username'];
			$email= $_POST['email'];
			$usn = $_POST['usn'];
			$department_id = $_POST['department_id'];
			$password = $_POST['password'];
			
			$username = stripslashes($username);
			$username = mysql_real_escape_string($username);
			
			$email = stripslashes($email);
			$email = mysql_real_escape_string($email);
			
			$password = stripslashes($password);
			$password = mysql_real_escape_string($password);
			$password = sha1($password);
			
			//trn_date = date("Y-m-d H:i:s");
	        $studentregister = "INSERT IGNORE INTO student(`username`,`email`,`usn`,`department_id`,`password`) VALUES('$username'.'$email','$usn','$department_id','$password');";
	        $execstudentregister = mysql_query($studentregister);
	        if($execstudentregister){
	        	$staus = 'success';
	            ajaxresponse($status, 'Values Inserted To Student DB Successfully', null);
	        }
	        else{
	        	$status = 'failure';
	        	ajaxresponse($status, 'Failed To Register', null);
	        }
		}
	}
}
else{
	$status = 'failure';
	ajaxresponse($status, 'POST parameter type not received', null);
}
         
?>