<?PHP
SESSION_START();
$nama=$_SESSION['latihan_login'];
unset($_SESSION['latihan_login']);
SESSION_DESTROY();
header('location:index.php');
?>