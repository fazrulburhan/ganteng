<?php
$servername = "localhost";
$username = "root";
$pasword = "";
$dbname = "magang";

// Create connection
$conn = new mysqli($servername, $username, $pasword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}