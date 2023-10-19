<?php

// Database credentials
$host = "localhost";
$username = "secret";
$password = "secret";
$dbname = "secret";

// Attempt to connect to MySQL database
$mysqli = new mysqli($host, $username, $password, $dbname);
 
if ($mysqli -> connect_errno) {
    die("Connection error: " . $mysqli ->  connect_error);
}

return $mysqli;
