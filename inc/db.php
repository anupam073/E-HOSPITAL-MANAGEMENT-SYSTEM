<?php
// Create connection
$con=mysqli_connect("localhost","root","","ohmsphp");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>