<!DOCTYPE html>
<html>
<head></head>
<body>
	<?php
	include 'header.php';
	showHeader(1);
	?>
	<div id="main">
		<div class="container">
			<div class="panel panel-primary row">
				<div class="panel-body">
					<h3 class="text-on-pannel text-primary "><strong>RECOOK</strong></h3>
					<div class="row">
						<?php
						include 'conn.php';
	    	      		$sql = "SELECT user.Nama,idResep,NamaResep,foto FROM resep JOIN user ON resep.idUser = user.idUser";
    		      		$result = $db->query($sql);
    		      		$i =0;
    		      		while ($row = $result->fetch_assoc()) {
    		      		  $i++;
    		      		?>
    		      		<a href="listResep.php?id=<?=$row['idResep']?>">
    		      			<div class="container panel panel-primary col-sm-4" style="padding-top: 15px;">
								<img class="img" src="<?=$row['foto']?>">
								<figcaption>
									<?=$row['NamaResep']?>
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>