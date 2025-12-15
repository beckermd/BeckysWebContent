<?php
$db_host= "localhost";
$db_user= "root";
$db_password= "";
$db_name= "beckys_db";

// Create connection using mysqli (mysql_* functions were removed in PHP 7+)
$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$con) {
    // Stop execution on failure; in production consider logging instead of echoing details
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Set connection charset
mysqli_set_charset($con, 'utf8mb4');

?>
