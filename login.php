<?php

$conn = mysqli_connect('localhost','root','','shubhankar');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO login (email, password)
VALUES ('$email','$password')";

if (mysqli_query($conn, $sql)) {
  echo "Data stored successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

