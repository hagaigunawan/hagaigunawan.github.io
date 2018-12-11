<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
  include 'header.php';
  include 'conn.php';
  showHeader(3);

  if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
  if (isset($_GET['s'])) {
    echo '<script> alert("Mohon Upload File .jpg atau .png")</script>';
  }
  ?>
  <div class="container panel panel-primary" style="padding-top: 15px;">
    <form method="post" action="resep_p.php" enctype="multipart/form-data">
      <p>Judul Resep</p>
      <input id="judul" type="text" name="judul" placeholder="Masukan Judul Resep">
      <br>
      <br>
      <p>Bahan Makanan</p>
      <textarea id="bahan" style="overflow: scroll hidden;" rows="5" cols="50" name="bhn"></textarea>
      <br>
      <br>
      <p>Cara Masak</p>
      <textarea id="cara" style="overflow: scroll hidden;" rows="5" cols="50" name="cra"></textarea>
      <br>
      <br>
      Kategori
      <br>
      <div class="dropdown btn-group">
        <select name="kat">
          <?php
          $sql = "SELECT * FROM kategori";
          $result = $db->query($sql);
          $i = 0;
          while ($row = $result->fetch_assoc()) {
            $i++;?>
          <option value="<?= $row['idKat']?>"> <?=$row['Kategori']?> </option>}
          <?php
        }
        ?>
        </select>
      </div>
      <br>
      <br>
      <p>Upload Gambar Masakan</p>
      <input type="file" name="img">
      <br>
      <br>
      <input id="submit" type="submit" name="submit" value="submit">
      <script>
          $(document).ready(function(){
            $("#submit").click(function(){
              if ($("#judul").val() == "" || $("#bahan").val() == "" || $("#cara").val() == "") {
                alert("Mohon Isi Field yang Kosong.");
                setTimeout(function(){$("#email").focus();}, 1);
                return false;
              }
            });
          });
        </script>
      <br>
      <br>
    </form>
  </div>
  <?php
  }else {
    header('Location:login.php');
  }
  ?>
  