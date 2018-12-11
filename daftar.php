<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
  include 'header.php';
  showHeader(5);
  if (isset($_SESSION)) {
    session_unset();
    session_destroy();
  }
  ?>

  <script>
    $(document).ready(function(){
      $("#input").focusout(function(){
        if ($("#input").val().length == "") {
          alert("asdasdasd");
        }
      });
    });
  </script>

  <div class="container">
    <h1 style="text-align: center">DAFTAR COOKPEDIA</h1>
    <div class="ctr">
      <form method="post" action="daftar_p.php">
        <img style="width: 50px;height: 50px;" src="img/user.png">
        <input id="user" type="text" name="user" autofocus style="width: 175px;">
        <br>
        <br>
        <img style="width: 50px;height: 50px;" src="img/email.png">
        <input id="email" type="email" name="email" style="width: 175px;">
        <br>
        <br>
        <img style="width: 50px;height: 50px;" src="img/password.png">
        <input id="pw1" type="password" name="password" style="width: 175px;">
        <br>
        <br>
        <input id="submit" required="true" type="submit" name="regis" value="Daftar" style="width: 225px;">
        <script>
          $(document).ready(function(){
            $("#submit").click(function(){
              if ($("#user").val().length == "" || $("#email").val().length == "" || $("#pw1").val().length == "") {
                alert("Mohon Isi Field yang Kosong.");
                setTimeout(function(){$("#user").focus();}, 1);
                return false;
              }
            });
          });
        </script>
    </form>
    <br>
  </div>
  <hr>
  <a href="login.php"><h3 style="text-align: center;" >Sudah Punya Akun ?</h3></a>

</div>