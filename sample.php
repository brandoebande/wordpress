<?php
$servername = "http://sql5.freesqldatabase.com/";
$username = "sql5422204";
$password = "bjrpqZqfZQ";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>