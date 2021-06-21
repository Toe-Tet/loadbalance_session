<?php 

function connect() {
	// $pdoString = "mysql:host=localhost;dbname=loadbalance_login";
	// $pdo = new PDO($pdoString, 'root', 'password');
	// return $pdo;

    $host = "database-1.cwlrobvswhym.us-east-1.rds.amazonaws.com";
    $dbuser = "admin";
    $dbpassword = "Qwertyuiopasdfghjkl";
    $dbname = "loadbalance_session";
    // $dbname = '62_20201706_124259';
    $portno = 3306;

    // $imagepath = $_SERVER["DOCUMENT_ROOT"] . "/BookingSystem/itemimg/";
    // $root = glob($_SERVER["DOCUMENT_ROOT"]."file:///var/www/html/Pure*");

    // Create Connection
    $con = new mysqli($host, $dbuser, $dbpassword,$dbname,$portno);
    $con->set_charset('utf8');
    // Check connection
    if ($con->connect_error) {
        die('Connection failed: ' . $con->connect_error);
        // die('ERROR: Could not connect. ' . mysqli_connect_error());
    }
    return $con;
}

 ?>