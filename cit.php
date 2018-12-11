$pass = password hash($_POST['password'],PASSSWORD DECRYPT);

password verify("rahasia","hasil ecnrypt");

session_start();

$_SESSION['username'];
$_SESSION['role'];
$_SESSION['idUser'];

FILE UPLOAD
<form method='POST' action='xx.php' enctype="multipart/form-data">
</form>



xx.php
echo "<pre>";
var_dump($_POST);

//pindah files ke server
$_FILES[name][type][tmp_name][eror][size];
$tujuan = "upload/hehe.img";
move_uploaded_file($_FILES['foto']['tmp_name'],'$tujuan');

//ambil extensi
$nama_file = $_FILES['foto']['name'];
$ext = explode('.', $nama_file);
$ext = end($ext);
$ext = strtolower($ext);

//cek extensi
if($$ext=="jpg" || $ext=="png" || $ext == "gif"){
	
}else{
	
}

$ext_bole[] = ['jpg'], ['jpeg'], ['png'], ['gif'];
if(in_array($ext, $ext_boleh)){
	
}

//cek ukuran
if($_FILES['foto']['size'] <= 2*1024*1024){
	
}

//sql
insert into table(x,x,x) values (?,?,?); 

	