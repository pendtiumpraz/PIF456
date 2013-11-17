<?PHP
SESSION_START();
$nama = $_SESSION['login']; #ini untuk cek sessionnya, dia dah login apa belum
if(empty($nama)){ #jika belum login (sessionnya masih kosong maka alihkan ke page login
header("location:index.php");
exit();
}
echo "Welcome <b>$nama</b></br><a href='logout.php'>Logout</a>";
?>