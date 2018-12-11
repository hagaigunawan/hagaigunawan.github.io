<?php 
include 'conn.php';

$email = $_POST['email'];
$mypassword = $_POST['password'];


$sql = "SELECT * FROM user WHERE Email = '$email'";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
	$id = $row['idUser'];
	$pass = $row['Password'];
	$role = $row['role'];
}

if (isset($pass)) {
	if(password_verify($mypassword,$pass)){
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;
		header("Location:index.php");
	}
}else {
	header("Location:login.php?s=fail");
}
?>