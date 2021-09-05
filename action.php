<?php

// DON'T forget to create you're database-info.php file.
include 'database-info.php';

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$word = $_POST['word'];
$meaning = $_POST['meaning'];
$example = $_POST['example'];

$sql = "INSERT INTO words (name, meaning, example)
VALUES ('$word', '$meaning', '$example')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();