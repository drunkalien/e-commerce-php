<?php 
include "./environment.php";
$connection = mysqli_connect("localhost", "root", "", "my_database");

if (mysqli_connect_errno() && $environment == "development" ) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else if (mysqli_connect_errno() && $environment == "production") {
    echo "Connection cannot be established";
}

