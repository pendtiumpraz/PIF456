<?php
defined('VALID') or die('not allowed');

function init_login(){
	//Simulasi data account nama dan password
	$nama = 'admin';
	$pass = 'admin';
	
	if(isset($_POST['nama']) && isset($_POST['pass'])){
	$n = trim($_POST['nama']);
	$p = trim($_POST['pass']);
	
		if(($n === $nama) && ($p === $pass)){
		//Jika sama, set cookie
		setcookie('nlogin',$n);
		setcookie('time', time());
		//redireksi
		?>
		<script type = "text/javascript">
		document.location.href="./";
		</script>
		<?php
		} else {
		echo 'NAMA / PASSWORD TIDAK SESUAI';
		return false;
		}
	}
}

function validate(){
	if(!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time'])){
?>

	<div class="inner">
	<form class="form-signin" method="post" action="../../chklogin.php" method="POST">
<div class="navbar navbar-inverse">
<div class="navbar-inner">
<div class="container">
<div class="nav-collapse collapse">
<ul class="nav">
<li><div style="color:white; padding-top:9px; text-align:left;"><i class="icon-user icon-white"></i> Login Administrator</div></li>
</ul>
</div>
</div>
</div>
</div>
<?php
	if (!empty($_GET['msg'])){
		if($_GET['msg']==1){
			echo '<div class="alert alert-error"><h6>Username dan passowrd tidak boleh kosong</h6></div>';
		}elseif ($_GET['msg']==2){
			echo '<div class="alert alert-error"><h6>Pastikan username dan passowrd benar</h6></div>';
		}
	}
?>
<table width="100%">
<tr><td valign=middle><input type="text" name="nama" style="width:100%;" class="input-teks" placeholder="Username..."/></td></tr>
<tr><td valign=middle><input type="password" name="pass" style="width:100%;" class="input-teks" placeholder="Password..."/></td></tr>
<tr width="100%"><td> <button type="submit"  class="btn btn-block btn-large btn-primary" />Log In</button></td></tr>
<tr><td>
<h6>&copy; <?php $waktu= date("Y"); echo"$waktu "?> by BPPPAKB Tulungagung<br /> Bekerjasama Dengan State University of Malang</h6>
</td></tr>
</table>
</form>
	</div>
	<?php
	exit;
}

if(isset($_GET['m']) && $_GET['m'] == 'logout'){
	//Hapus cookie
	if(isset($_COOKIE['nlogin'])){
		setcookie('nlogin','',time() - 3*3600);
	}
	if(isset($_COOKIE['time'])){
		setcookie('time','',time() - 3*3600);
	}
	
	//redireksi halaman
	?>
	<script type="text/javascript">
	document.location.href="./";
	</script>
	<?php
	}
}
?>





