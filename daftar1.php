<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
  include 'header.php';
  showHeader(4);
  $id = $_GET['id'];
  if (isset($_GET['s'])) {
    echo '<script> alert("Mohon Upload File .jpg atau .png")</script>';
  }
  ?>
  <div class="container">
    <h1 style="text-align: center">Lengkapi Profile</h1>
    <div class="ctr">
      <form method="POST" action="daftar1_p.php?id=<?=$id?>" enctype="multipart/form-data">
        <img src="img/gambar1.png" style="width: 100px;height: 100px;">
        <input type="file" name="foto">
        <br>
        <br>
        <label>Alamat</label>
        <br>
        <textarea rows="4" cols="50" name="alamat"></textarea>
        <br>
        <br>
        <label>Jenis Kelamin</label>
        <br>
        <input type="radio" name="radio" value="P">
        <label>Pria</label>
        <br>
        <input type="radio" name="radio" value="W">
        <label>Wanita</label>
        <br>
        <br>
        <input type="submit" name="save" value="Save">
        <input type="submit" name="skip" value="Isi Nanti">
      </form>
      <br>
    </div>
    <hr>
  </div>