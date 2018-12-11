<?php
include 'header.php';
include 'conn.php';
showHeader(4); 

$id = $_GET['id'];
  $sql = "SELECT * FROM resep WHERE idResep = '$id'";
  $result = $db->query($sql);
  while ($row  = $result->fetch_assoc()) {
    $judul = $row['namaResep'];
    $bahan = $row['bahan'];
    $cara = $row['cara'];
    $url = $row['foto'];
    if (isset($_SESSION['id'])) {
    	$idu = $row['idUser'];
    	$ids = $_SESSION['id'];
    }
}
?>
<div class="container">
	<img class="imglist" src="<?=$url?>">
	<h1 class="txtlist"><?= $judul ?></h1>
	<div>
		<h3 class="txtlist">Bahan - Bahan</h3>
		<div>
			<pre><?= $bahan ?></pre>
		</div>
	</div>
	<div>
		<h3 class="txtlist">Cara</h3>
		<div>
			<pre><?= $cara ?></pre>
		</div>
	</div>
	<?php
	if (isset($idu)) {
		if ($idu == $ids) {
		?>
		<form method="POST" action="list_p.php?id=<?=$id?>">
		<input type="submit" name="update" value="Update Resep">
		<input type="submit" name="delete" value="Hapus Resep">
	</form>
	<?php
	}
	}
	?>
	
</div>