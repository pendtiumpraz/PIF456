<html>
<head>
<title>Fungsi Prosedur</title>
</head>
<body>

<?php 
/**
* Mencetak string
* $teks nilai string
* $bold adalah argumen opsional
*/

function print_teks($teks, $bold = true){
	echo $bold ? '<b>' . $teks . '</b><br>' : $teks;
}

print_teks('Indonesiaku');
//Mencetak dengan huruf tebal

print_teks('Indonesiaku', false);
//Mencetak dengan huruf reguler

?> 

</body>
</html>