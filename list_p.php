<?php
include 'conn.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
	header('Location:updateR.php?id='.$id);
}elseif (isset($_POST['delete'])) {
	$sql = "DELETE FROM resep WHERE idResep = '$id'";
	$db->query($sql);
	header('Location:profile.php');
}

	?>