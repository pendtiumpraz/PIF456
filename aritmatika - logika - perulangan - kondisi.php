<html><head><title>
<?php
$head="Galih Prasetyo 110533430521";
echo $head;
?></title>
</head>
<body  style="color:#000000; margin-left : 50px;" ><Center>
<h1><?php
$nama = "Galih ";
$nim = 110533430521;
$kelas = " pendtium B sebelas";

$no = 1;

if ($no==1) // Kondisi dan Logika
{
	echo $nama;
	$no=2;
}

if ($no==2) // Kondisi dan Logika
{
	echo $nim;
	$no=3; 
}

if ($no==3) // Kondisi dan Logika
{
	echo $kelas;
}
?></h1></center>
<br><br><br>
<p><h3>
<?php 
$matakuliah = "Praktikum Pemrograman Berbasis Web";
echo "Hari ini kuliah " . $matakuliah . " disuruh menulis kata kata terserah yang penting di dalam php, boleh di ulang sebanyak 5x seperti ini<br><br><br><br>" ;
echo "Saya mau ngerap : ";

$file=1;
for ($file=1; $file < 6; $file++) // Perulangan Rap
{
	echo "Rap ";
}

function jumlah ($a, $b, $c, $d, $e, $f, $g, $h, $i){
	return ($a + $b + $c + $d + $e + $f + $g + $h + $i); //Aritmatika
}

echo "<br><br>Karena semester saya menempuh banyak matakuliah bertotal " . jumlah(2,3,3,3,3,2,3,2,2) . " SKS"; //Aritmatika

echo "<br><br><br><br><br>"
?>
</p>
<div style="border: 2px #345d15 solid; padding: 10px; background-color: #FFFFFF; text-align: left; margin-left:230px; margin-right:10px;"><p style="padding: 10px;" align="justify">
<center><b>DATA PRIBADI</b> </center><br><br>
Nama                       : Galih Prasetyo<br><br>
Tempat, Tanggal Lahir : Blitar, 22 Agustus 1993<br><br>
Alamat                     : Jl. Ahmad Yani No. 29 RT. 04 RW. 02 Ds. Kesamben, Kecamatan Kesamben, Kabupaten Blitar<br><br>
Jenis Kelamin         : Laki-laki<br><br>
Status                      : Belum Menikah<br><br>
Kewarganegaraan   : Indonesia<br><br>
Nomor Handphone : 085649125140<br><br>
E-mail                     : pendtiumpraz@gmail.com<br><br><br><br>

<center><b>RIWAYAT PENDIDIKAN</b> </center><br><br>

<table border="3" cellpadding="4">
	<tr>
		<td align="center" width = "10%" padding="4px"><h3>No</h3></td>
		<td align="center" width = "30%" padding="4px"><h3>Tahun</h3></td>
		<td align="center" width = "40%" padding="4px"><h3>Pendidikan</h3></td>
	</tr>
	<tr>
		<td align="center">1</td>
		<td>1999 – 2005</td>
		<td>SD Negeri 5 Kesamben</td>
	</tr>
	<tr>
		<td align="center">2</td>
		<td>2005 – 2008</td>
		<td>SMP Negeri 1 Kesamben</td>
	</tr>
	<tr>
		<td align="center">3</td>
		<td>2008 – 2011</td>
		<td>SMK Negeri 1 Blitar</td>
	</tr>
	<tr>
		<td align="center">4</td>
		<td>2011 – 2014</td>
		<td>Universitas Negeri Malang (Fakultas Teknik - PTI)</td>
	</tr>
</table>
<br><br><br></blockquote></div>
<br></div>

</body></html>