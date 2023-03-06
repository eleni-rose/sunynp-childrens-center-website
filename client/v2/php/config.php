<?php

//Define variables for database connection
$serverName = "localhost";
$dBUsername = "p_s23_04";
$dBPassword = "dtru0x";
$dBName = "p_23_04_db";

//Connect to database
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


// If connection fails, return exact failure message
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
