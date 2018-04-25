<?php
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular_todo";

$conn = mysqli_connect($Servername, $username, $password, $dbname) or die ("connection failed:" . mysqli_error());