<!DOCTYPE html>
<html>
<head></head>
<body>
	<?php
include 'header.php';
include 'conn.php';
showHeader(4); 

$id = $_GET['id'];
$kat;
  $sql = "SELECT * FROM resep JOIN kategori ON resep.idKat = kategori.idKat WHERE kategori.idKat = '$id' ";
  $result = $db->query($sql);
  while ($row  = $result->fetch_assoc()) {
  $kat = $row['Kategori'];
}
?>
	<div id="main">
		<div class="container">
			<div class="panel panel-primary row">
				<div class="panel-body">
					<?php
					if (isset($kat)) {?>
						<h3 class="text-on-pannel text-primary "><strong><?= $kat ?></strong></h3>
					<div class="row">
						<?php
						include 'conn.php';
	    	      		$sql = "SELECT * FROM resep JOIN kategori ON resep.idKat = kategori.idKat JOIN user ON resep.idUser = user.idUser WHERE kategori.idKat = '$id'";
    		      		$result = $db->query($sql);
    		      		$i =0;
    		      		while ($row = $result->fetch_assoc()) {
    		      		  $i++;
    		      		?>
    		      		<a href="listResep.php?id=<?=$row['idResep']?>">
    		      			<div class="container panel panel-primary col-sm-4" style="padding-top: 15px;">
								<img class="img" src="<?=$row['foto']?>">
								<figcaption>
									<?=$row['namaResep']?>
									<br>
									<br>
									By <?=$row['Nama']?>
									<br>
									<br>
								</figcaption>
							</div>
						</a>
    		      		<?php
    		      		}
    		      		?>
					</div>
					<?php
					}else{
						?>
						<h3 class="text-on-pannel text-primary ">BELUM ADA MAKANAN DI KATEGORI INI</h3>
						<a href="resep.php">Klik Disini Untuk Menulis Resep</a>
						<?php
					}
					?>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>