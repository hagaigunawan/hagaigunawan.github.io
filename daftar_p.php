<?php 
 include 'conn.php';

$nama = $_POST['user'];
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

$sql = "INSERT INTO user(Nama, Email, Password, role) VALUES ('$nama','$email','$password','u')";
$db->query($sql);

$sql = "SELECT idUser FROM user WHERE Email = '$email'";
 $result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $id = $row['idUser'];
}
header("Location:daftar1.php?id=$id");	
   exit;

?>