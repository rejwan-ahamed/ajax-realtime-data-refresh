<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$con = mysqli_connect($server, $username, $password,$database);

if ($con) {
    echo "connection successfull";
}

else{
    echo "not connected";
}

?>