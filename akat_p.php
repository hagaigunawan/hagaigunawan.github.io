<?php 
include 'conn.php';

$sql = "SELECT idKat FROM kategori";
 $result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $id = end($row);
}
$id = $id +1 ;
$kat = $_POST['kat'];
$$url = $_FILES['img'];
$tmp = $_FILES['img']['tmp_name'];
$ext = explode(".", $_FILES['img']['name']);
$ext = end($ext);
$ext = strtolower($ext);
if ($ext == "jpg" || $ext=="png") {
	$pmn = "kat/".$id.".".$ext;
    move_uploaded_file($tmp, $pmn);
	$sql = "INSERT INTO kategori(Kategori, url) VALUES('$kat', '$pmn')";
	$db->query($sql);
	header("Location:profile.php");
}

 ?>