<!DOCTYPE html>
<html>
  <head>
    <title>PENDTIUMPRAZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../../bootstrap/css/bignav.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<body background="mcpic.png">
<script src="../../../bootstrap/js/jquery.js"></script>
<div class="navbar-wrapper">
<div class="container">
<p></p>
<nav class="navbar navbar-default navbar-static">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="../../praz.png" width="120" "height="44"></a>
    </div>
<?php include "../../header.php"; ?>
  <div class="well">
  <div class="jumbotron">
  <div class='navbar navbar-inverse'>
<div class='navbar-inner'>
<div class='container'>
<ul class='nav'>
<li><div style='color:white; padding-top:9px; text-align:left;'><h3> Studi Kasus Modul 2 </h3></div></li>
</ul>
</div>
</div>
</div>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<span class="label label-success">Pilih Hobi</span>
<br />
<input type="checkbox" name="hobby[]" value="Membaca"
/>Membaca
<br />
<input type="checkbox" checked="checked" name="hobby[]" value="Olahraga"
/>Olahraga
<br />
<input type="checkbox" name="hobby[]" value="Menyanyi"
/>Menyanyi <br />

<span class="label label-success">Pilih Pekerjaan</span>
<br />
<select name="job">
<option value="Mahasiswa" >Mahasiswa</option>
<option value="ABRI"selected="selected">ABRI</option>
<option value="PNS">PNS</option>
<option value="Swasta">Swasta</option>
</select> <br />
<input type="submit" value="Simpan" class="btn btn-primary"> <input type="button" value="Batal" onclick="self.history.back()" class="btn btn-danger">

</form>


<br />

<?php
if (isset($_POST['job'])) {
echo $_POST['job'];
}
?>

<br />

<?php
// Ekstraksi nilai
if (isset($_POST['hobby'])) {
foreach ($_POST['hobby'] as $key => $val) {
echo $key . ' -> ' .$val . '<br />';
}
}
?>




  </div>

  </div>
<nav class="navbar navbar-default navbar-static-bottom" role="navigation">
<p class="navbar-text">&copy Copyright 2013, Galih Praz.</p>
<p class="navbar-text navbar-right"><a href="http://pendtiumpraz.binnervis.com">PENDTIUMPRAZ</a></p>
<p class="navbar-text navbar-right"><a href="http://binnervis.com">BINNERVIS</a></p>
</nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
	
	
  </body>
</html>



