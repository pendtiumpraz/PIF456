<?PHP
SESSION_START();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username=="galih"){ #jika username yang di kirimkan == galih maka lanjutkan proses loginnya
if ($password=="praz"){ #jika password yang di kirimkan == praz maka alihkan ke home.php
$_SESSION['latihan_login'] = "galih";
header("location:home.php?pesan=berhasil");
}
else{ #jika passwordnya != praz maka
echo "Passwordya salah .. yang benar <font color='green'>praz</font> bukan <font color='red'>$password</font></br>
<a href='index.php'>Back</a>";
}
}
else{ #jika username != galih maka 
echo "usernamenya salah .. yang benar <font color='green'>galih</font> bukan <font color='red'>$username</font></br>
<a href='index.php'>Back</a>";
}
?>