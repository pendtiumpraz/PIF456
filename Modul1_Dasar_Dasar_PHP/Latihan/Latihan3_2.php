<html>
<head>
<title>Casting Tipe</title>
</head>
<Body>

<?php 
$str = '123abc';

//Casting nilai variabel $str ke integer
$bil = (int) $str; //$bil = 123

echo gettype($str)."<br>";
//output : string
echo gettype($bil);
//output : integer

?> 

</body>
</html>
