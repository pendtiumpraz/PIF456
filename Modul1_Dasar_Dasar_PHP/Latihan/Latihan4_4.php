<html>
<head>
<title>Seleksi Switch</title>
</head>
<Body>

<?php 
$i = 0;

if ($i == 0)
{
	echo "i equals 0<br>";
} else if ($i == 1)
{
    echo "i equals 1<br>";
} else if ($i == 2)
{
    echo "i equals 2<br>";
} 

//Ekuivalen, dengan pendekatan switch
switch ($i)
{
case 0:
	echo "i equals 0<br>";
	break;
case 1:
	echo "i equals 1<br>";
	break;
case 2:
    echo "i equals 2<br>";
	break;
}
?> 

</body>
</html>
