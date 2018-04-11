<?php
// define('HOST', 'localhost');
// define('USER', 'root');
// define('PASS', '');
// define('DB', 'db_attendance');

$HOST = 'localhost';
$USER = 'root';
$PASS = '';
$DB = 'db_attendance';

		$con = new mysqli($HOST, $USER, $PASS, $DB);
    	
	    if ($con->connect_error) {
	        die("Not Connected" .$dbc->connect_error);
	    }else{
	        // echo "Connected to server";
	        return true;
	    }

?>