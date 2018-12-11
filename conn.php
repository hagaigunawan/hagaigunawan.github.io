<?php
  $db = mysqli_connect('localhost','root','','cookpedia');
  if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>