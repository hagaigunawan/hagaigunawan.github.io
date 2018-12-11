<?php
  include 'header.php';
  include 'conn.php';
  showHeader(3);
  $id = $_GET['id'];

  if (isset($_GET['s'])) {
    echo '<script> alert("Mohon Upload File .jpg atau .png")</script>';
  }

  $sql = "SELECT * FROM resep WHERE idResep=$id";
  $result = $db->query($sql);
    while ($row = $result->fetch_assoc()) {
    $judul = $row['namaResep'];
    $bahan = $row['bahan'];
    $cara = $row['cara'];
}
  ?>
  <div class="container panel panel-primary" style="padding-top: 15px;">
    <form method="post" action="updateR_p.php?id=<?=$id?>" enctype="multipart/form-data">
      <p>Judul Resep</p>
      <input id="judul" type="text" name="judul" placeholder="Masukan Judul Resep" value="<?=$judul?>">
      <br>
      <br>
      <p>Bahan Makanan</p>
      <textarea id="bahan" style="overflow: scroll hidden;" rows="5" cols="50" name="bhn"><?=$bahan?></textarea>
      <br>
      <br>
      <p>Cara Masak</p>
      <textarea id="cara" style="overflow: scroll hidden;" rows="5" cols="50" name="cra"><?=$cara?></textarea>
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
  