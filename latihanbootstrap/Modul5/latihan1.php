
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
	<style type="text/css">
.even {
background: #ddd;
}
</style>
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
<li><div style='color:white; padding-top:9px; text-align:left;'><h3> Latihan 1 Modul 5 </h3></div></li>
</ul>
</div>
</div>
</div>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Nama <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php
		echo isset($_GET['nama']) ? $_GET['nama'] : '';
		?>" size=40 />
		<button type="submit" class='btn btn-success'><i class="glyphicon-search glyphicon"></i>  CARI</button>
	</form>

	<?php
		if(isset($_GET['nama'])){
			require_once './koneksi.php';

			// Kata kunci pencarian
			$key = $_GET['nama'];

			// Variabel $sql berisi pernyataan SQL pencarian
			$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$key%' OR alamat LIKE '%$key%'";

			$res = mysql_query($sql);

			if($res){
				$num = mysql_num_rows($res);
				if($num){
					echo 'Ditemukan ' . $num . ' row(s)'; ?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabel Mahasiswa</div>


		<table class="table" cellspacing=1 cellpadding=5>
						<tr>
							<th width=50>#</th>
							<th width=200>NIM</th>
							<th width=300>Nama</th>
							<th width=200>Alamat</th>
						</tr>

						<?php
							$i = 1;

							while($row = mysql_fetch_row($res)) {
						?>

						<tr>
							<td>
								<?php echo $i;?>
							</td>
							<td>
								<?php echo $row[0];?>
							</td>
							<td>
								<?php echo $row[1];?>
							</td>
							<td>
								<?php echo $row[2];?>
							</td>
						</tr>
						<?php
								$i++;
							}
						?>
					</table>
					</div>
		    	<?php
				}else{
					echo 'Data Tidak Ditemukan';
				}
			}
		}else{
			echo 'Masukkan kata kunci pencarian';
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
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
	
	
  </body>
</html>