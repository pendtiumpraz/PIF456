<?PHP
require_once './koneksi.php';
SESSION_START();
$username = $_POST['username'];
$password = $_POST['password'];

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  header('location:index.php?msg=1');
}

if ($username=="galih"){ #jika username yang di kirimkan == galih maka lanjutkan proses loginnya
	if ($password=="praz"){ #jika password yang di kirimkan == praz maka alihkan ke home.php
		$_SESSION['login'] = "galih";
		header("location:admin.php");
	}
	else{ #jika passwordnya != praz maka
		header('location:index.php?msg=2');
	}
}

elseif ($username=="admin"){ #jika username yang di kirimkan == galih maka lanjutkan proses loginnya
	if ($password=="admin"){ #jika password yang di kirimkan == praz maka alihkan ke home.php
		$_SESSION['login'] = "administrator";
		header("location:admin.php");
	}
	else{ #jika passwordnya != praz maka
		header('location:index.php?msg=2');
	}
}

else{ #jika username != galih maka 
	header('location:index.php?msg=2');
}
?>