<head>
	<title>Cookpedia</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<?php
session_start();
function showHeader($page){
  if (isset($_SESSION["id"])) {
    $id=$_SESSION["id"];
?>
    <body style="background-color: #E0EAFC">
  <img src="img/cookpedia.png" style="display: block;margin-left: auto;margin-right: auto;">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="<?=$page==1?'active':''?>"><a href="index.php">Home</a></li>
        <li class="<?=$page==2?'active':''?>"><a href="kategori.php">Kategori</a></li>
        <li class="<?=$page==3?'active':''?>"><a href="resep.php">Tulis Resep</a></li>
        <li class="<?=$page==4?'active':''?>"><a href="profile.php">Profile</a></li>
        <li class="<?=$page==5?'active':''?>"><a href="out.php">Logout</a></li>
      </ul>
    </div>
  </nav>
<?php
  }else{
?>
    <body style="background-color: #E0EAFC">
  <img src="img/cookpedia.png" style="display: block;margin-left: auto;margin-right: auto;">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="<?=$page==1?'active':''?>"><a href="index.php">Home</a></li>
        <li class="<?=$page==2?'active':''?>"><a href="kategori.php">Kategori</a></li>
        <li class="<?=$page==5?'active':''?>"><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>
<?php
  }
}
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>