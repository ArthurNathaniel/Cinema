<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cinema"; 

$servername = "nathstack.tech";
$username = "u500921674_cinema";
$password = "OnGod@123";
$dbname = "u500921674_cinema";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
