<?php
include 'conn.php';
session_start();
$id=$_SESSION['id'];
$sql = "DELETE FROM resep WHERE idUser = '$id'";
$db->query($sql);
$sql = "DELETE FROM user WHERE idUser = '$id'";
$db->query($sql);
session_unset();
session_destroy();

header("Location:index.php");
?>