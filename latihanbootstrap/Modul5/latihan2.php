
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
<li><div style='color:white; padding-top:9px; text-align:left;'><h3> Latihan 2 Modul 5 </h3></div></li>
</ul>
</div>
</div>
</div>

<form method="post" action="" name="frm_select">
		Tampilkan

		<?php
			$halaman = array(
	    	"Pilih", 1, 5, 10, 20
	  		);
	  	?>

  		<select name="row_page"
  			onchange="document.frm_select.selectedIndex=0;
  				document.frm_select.submit();">

  				<?php foreach ($halaman as $hal): ?>
  				<?php
  					if ($_POST["row_page"] == $hal) $selected1 = "selected";
  					else $selected1 = "";
  				?>
  				<option value="<?php echo $hal;?>" <?php echo $selected1; ?>>
 					<?php echo strtoupper($hal); ?>
 				</option>
 			<?php endforeach ?>
 		</select> baris per halaman
	</form>

	<?php
		if(isset($_POST['row_page']) && $_POST['row_page']){
			require "koneksi.php";
			$row = $_POST['row_page'];
			$sql = "SELECT * FROM mahasiswa LIMIT $row";
			$res = mysql_query($sql);
			if($res){
				$num = mysql_num_rows($res);
				if($num){ ?>
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
							$i=1;
							while ($row = mysql_fetch_row($res)){
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
					echo 'Data tidak ditemukan';
				}
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
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
	
	
  </body>
</html>
	