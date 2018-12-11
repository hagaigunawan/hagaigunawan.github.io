<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
  include 'header.php';
  showHeader(5);
  if (isset($_GET['s'])) {
    echo '<script> alert("Email atau Password Salah")</script>';
  }
  ?>
  <div class="container">
    <h1 style="text-align: center">MASUK COOKPEDIA</h1>
    <div class="ctr">
      <form method="post" action="login_p.php" >
        <img style="width: 50px;height: 50px;" src="img/email.png">
        <input id="email" type="email" name="email" autofocus style="width: 175px;">
        <br>
        <br>
        <img style="width: 50px;height: 50px;" src="img/password.png">
        <input id="pw" type="password" name="password" style="width: 175px;">
        <br>
        <br>
        <input id="submit" type="submit" name="login" value="login" style="width: 225px;">
        <script>
          $(document).ready(function(){
            $("#submit").click(function(){
              if ($("#email").val().length == "" || $("#pw").val().length == "") {
                alert("Mohon Isi Field yang Kosong.");
                setTimeout(function(){$("#email").focus();}, 1);
                return false;
              }
            });
          });
        </script>
        <br>
      </form>
    </div>
    <hr>
      <a href="daftar.php"><h3 style="text-align: center;" >Daftar Sekarang</h3></a>
  </div>