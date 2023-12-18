<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "finalpost";

//create connection
$conn = mysqli_connect($host, $user, $password, $dbname, 3307);
if(!$conn)
{
    die("Connection failed.");
}
