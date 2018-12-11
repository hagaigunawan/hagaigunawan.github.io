<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
  include 'header.php';
  include 'conn.php';
  showHeader(4);

  if (isset($_SESSION['id'])) {
     $id = $_SESSION['id'];
  $sql = "SELECT * FROM user WHERE idUser = $id";
  $result = $db->query($sql);
  while ($row = $result->fetch_assoc()) {
    $nama = $row['Nama'];
    $url = $row['urlFoto'];
    $role = $row['role'];
  }
  ?>
  <div class="container">
    <?php
    if ($url == "") {?>
      <img class="img" style="display: block;margin-left: auto;margin-right: auto;" src="img/user.png">
      <?php
    }else{
      ?>
      <img class="img" style="display: block;margin-left: auto;margin-right: auto;" src="<?=$url?>">
      <?php
    }
    ?>
    <p style="text-align: center;">Hai, <?= $nama ?></p>
    <div class="container">
      <div class="panel panel-primary">
        <div class="btn-group">
          <button type="button" class="btn btn-secondary active">Resep</button>
          <button type="button" class="btn btn-secondary" onclick="window.location.href='profile2.php'">Edit Profile</button>
          <br>
          <br>
          <?php
          $sql = "SELECT * FROM resep WHERE idUser = '$id'";
          $result = $db->query($sql);
          $i =0;
          while ($row = $result->fetch_assoc()) {
            $i++;
            $id = $row['idResep'];
            ?>
            <a href='listResep.php?id=<?=$id?>'><?=$i." . ".$row['namaResep']?></a><br>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  }else{
    header('Location:login.php');
  }
  ?>


 