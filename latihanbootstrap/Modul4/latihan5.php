
<!DOCTYPE html>
<html>
  <head>
    <title>PENDTIUMPRAZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../bootstrap/css/bignav.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<body background="mcpic.png">
<script src="../../bootstrap/js/jquery.js"></script>
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
        <a class="navbar-brand" href="index.html"><img src="../praz.png" width="120" "height="44"></a>
    </div>
<?php include "../header.php"; ?>
  <div class="well">
  <div class="jumbotron">
  <div class='navbar navbar-inverse'>
<div class='navbar-inner'>
<div class='container'>
<ul class='nav'>
<li><div style='color:white; padding-top:9px; text-align:left;'><h3> Latihan 5 Modul 4 </h3></div></li>
</ul>
</div>
</div>
</div>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table>
<tr>
<td><span class="label label-success">NIM</span></td>
</tr>
<tr>
<td><input type="text" name="nim" class="form-control" placeholder="NIM" size=15></td>
</tr>
<tr>
<td><span class="label label-success">Nama</span></td>
</tr>
<tr>
<td><input type="text" name="nama" class="form-control" placeholder="Nama" size=40 /></td>
</tr>
<tr>
<td><span class="label label-success">Alammat</span></td>
</tr>
<tr>
<td><input type="text" name="alamat" class="form-control" placeholder="Alamat" size=60 /></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><input type="submit" value="Simpan" class="btn btn-primary"> <input type="button" value="Batal" onclick="self.history.back()" class="btn btn-danger">
</tr>
</table>
</form>
<?php
require_once './koneksi.php';
$db = 'myweb';
// Jika field nim dan nama diisi lalu disubmit
if (isset($_POST['nim']) && isset($_POST['nama'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
// Tambahkan data baru ke tabel
$sql = "INSERT INTO mahasiswa
VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "' )";
$res = mysql_query($sql);
if ($res) {
echo 'Data Berhasil Ditambahkan';
//mysql_close($res);
} else {
echo 'Gagal Menambah Data <br />';
echo mysql_error();
}
}
echo '<hr />';
// Memanfaatkan script pengambilan data untuk
// menampilkan hasil
require_once 'seleksi.php';
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
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
	
	
  </body>
</html>

