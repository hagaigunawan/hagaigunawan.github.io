<!DOCTYPE html>
<html>
<head></head>
<body>
	<?php
	include 'header.php';
	if (isset($_SESSION['role'])) {
		$role = $_SESSION['role'];
	}

	showHeader(2);
	?>
	<div id="main">
		<div class="container">
			<div class="panel panel-primary row">
				<div class="panel-body">
					<h3 class="text-on-pannel text-primary "><strong>KATEGORI</strong></h3>
					<div class="row">
						<?php
						include 'conn.php';
						$sql = "SELECT * FROM kategori";
						$result = $db->query($sql);
						$i =0;
						while ($row = $result->fetch_assoc()) {
							$i++;
							?>
							<a href="kat.php?id=<?=$row['idKat']?>">
								<div class="col-sm-6" style="padding-top: 15px;">
									<img style="width: 550px;height: 300px;" src="<?=$row['url']?>">
									<figcaption style="text-align: center;">
										<?=$row['Kategori']?>
									</figcaption>
								</div>
							</a>
							<?php
						}
						if (isset($role)) {
							if ($role == "a") {
							?>
							<a href="akat.php">
								<div class="col-sm-6" style="padding-top: 15px;">
									<img style="width: 550px;height: 300px;" src="img/plus.png">
								</div>
							</a>
							<?php
						}
						
						}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>