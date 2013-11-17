<!DOCTYPE HTML>
<html>
<head>
<title>Login sederhana tanpa database</title>
<meta charset="UTF-8"/>
<meta name="Designer" content="www.binnervis.com">
<meta name="Author" content="galih">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">

<SCRIPT TYPE="text/javascript">
<!--
// copyright 1999 Idocs, Inc. http://www.idocs.com
// Distribute this script freely but keep this notice in place
function stringonly(myfield, e, dec)
{
var key;
var keychar;
if (window.event)
key = window.event.keyCode;
else if (e)
key = e.which;
else
return false;
keychar = String.fromCharCode(key);

// control keys
if ((key==null) || (key==0) || (key==8) ||(key==9) || (key==13) || (key==27) )
	return false;

// numbers
else if ((("0123456789").indexOf(keychar) > -1))
return false;

// decimal point jump
else if (dec && (keychar == "."))
{
	myfield.form.elements[dec].focus();
	return true;
}

else
	return true;
}

//-->
</SCRIPT>
</head>
<body>
<form class="box login" onKeyPress="return stringonly(this, event)" action="chklogin.php" method="post">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input type="text" name="username" tabindex="1" placeholder="" required>
	  <label>Password</label>
	  <input type="password" name="password" required tabindex="2" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="3">Biarkan Saya Tetap Masuk</label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>
<footer id="main">
  <a href="http://localhost/PIF456/latihanbootstrap/admin.php">Galih Praz (110533430521)</a> | <a href="http://www.binnervis.com">#BINNERVIS PTI B 2011</a> | <a href="http://www.um.ac.id">Universitas Negeri Malang</a>
</footer>
</body>
</html>
