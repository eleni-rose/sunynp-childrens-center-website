<?php

// Database credentials
$host = "localhost";
$username = "p_s23_04";
$password = "dtru0x";
$dbname = "p_s23_04_db";

// Attempt to connect to MySQL database
$mysqli = new mysqli($host, $username, $password, $dbname);
 
if ($mysqli -> connect_errno) {
    die("Connection error: " . $mysqli ->  connect_error);
}

return $mysqli;