<html>
<head>
<title>Generate Tabel</title>
</head>
<body>

<div align = "left">

<?php 
$baris = 1;
$kolom = 1;
$sel = 1;

$baris = (int) $_POST["JumlahBaris"];
$kolom = (int) $_POST["JumlahKolom"];
$sel = (int) $_POST["JumlahSel"];

echo $baris . "<em> baris, </em><br>";
echo $kolom . "<em> kolom, </em><br>";
echo $sel . "<em> sel, </em><br>";

echo "<br><br>";

	$width = $kolom * 75;
	echo "<table width = ".$width." border = 1>";
	
	$flag_baris = 0;
	$flag_sel = 1;
	while ($flag_baris < $baris && $flag_sel <= $sel)
	{
		echo "<tr>";
		$flag_kolom = 0;
		while ($flag_kolom < $kolom)
		{
			if ($flag_sel <= $sel)
			{
				echo "<td><div align = left>".$flag_sel."</div></td>";
				$flag_sel++;
			}
			$flag_kolom++;
		}
		echo "</tr>";
		$flag_baris++;
	}
	echo "</table>";
?> 
	
</div>
</body>
</html>