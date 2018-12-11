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
      $alamat = $row['Alamat'];
      $jk = $row['JenisKelamin'];

    }
    ?>
    <div class="container">
      <img class="img" style="display: block;margin-left: auto;margin-right: auto;"  src="<?=$url?>" alt="img/user.png">
      <p style="text-align: center;">hai, <?=$nama?></p>
      <div class="container">
        <div class="panel panel-primary">
          <div class="container btn-group">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='profile.php'">Resep</button>
            <button type="button" class="btn btn-secondary active">Edit Profile</button>
            <br>
            <br>
            <br>
            <form method="POST" action="update.php" enctype="multipart/form-data">
              <label>Nama</label>
              <br>
              <input type="text" name="nama" value="<?=$nama?>">
              <br>
              <br>  
              <label>Jenis Kelamin</label>
              <br>
              <input type="radio" name="radio" value="P" <?php
              if ($jk == 'P') {?>
              checked="checked">  
              <?php 
              } 
              ?>
              <label>Pria</label>
              <br>
              <input type="radio" name="radio" value="W" <?php
              if ($jk == 'W') {?>
              checked="checked">  
              <?php 
              } 
              ?>
              <label>Wanita</label>
              <br>
              <br>
              <label>Alamat</label>
              <br>
              <textarea rows="4" cols="50" name="alamat"><?=$alamat?></textarea>
              <br>
              <br>
              <label>Foto Anda</label>
              <input type="file" name="foto">
              <br>
              <br>
              <input type="submit" name="save" value="Save">
            </form>
            <form method="post" action="delete.php">
              <input type="submit" name="delete" value="Delete Account">
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
  }else{
    header('Location:login.php');
  }
  ?>
  