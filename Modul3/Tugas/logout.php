<?PHP
SESSION_START();
$nama=$_SESSION['login'];
unset($_SESSION['login']);
SESSION_DESTROY();
header('location:index.php');
?>