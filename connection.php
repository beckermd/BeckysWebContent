<?php
$db_host= "localhost";
$db_user= "root";
$db_password= "";
$db_name= "BECKYS";

// Create connection
$con= mysql_connect($db_host,$db_user,$db_password,$db_name);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


