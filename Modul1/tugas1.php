<?php 
$waktu=date("H:i:s",time()+5*3600); 
$t=explode(":",$waktu);
$jam=$t[0]; 
$menit=$t[1]; 

if ($jam > 00 and $jam < 10 )
{ 
	if ($menit >00 and $menit<60)
	{ 
		$ucapan="Selamat Pagi"; 
	}
} else if ($jam >= 10 and $jam < 15 )
	{ 
	if ($menit >00 and $menit<60)
	{ 	
		$ucapan="Selamat Siang"; 
	} 
} else if ($jam >= 15 and $jam < 18 )
	{ 
	if ($menit >00 and $menit<60)
	{
		$ucapan="Selamat Sore"; 
	} 
} else if ($jam >= 18 and $jam <= 24 )
	{ 
	if ($menit >00 and $menit<60)
	{ 
		$ucapan="Selamat Malam"; 
	} 
} else { 
	$ucapan="Error"; 
	} 

echo $ucapan.", Sekarang pukul $waktu WIB"; ?> 

<?php function greetingtime(){ 
	$waktu=date("H:i:s",time() +7*3600); 
	$t=explode(":",$waktu); 
	$jam=$t[0]; 
	$menit=$t[1]; 
	
if ($jam > 00 and $jam < 10 )
{ 
	if ($menit >00 and $menit<60)
	{ 
		$ucapan="Selamat Pagi"; 
	} 
} else if ($jam >= 10 and $jam < 15 )
	{ 
	if ($menit >00 and $menit<60)
	{ 
		$ucapan="Selamat Siang"; 
	} 
} else if ($jam >= 15 and $jam < 18 )
	{
	if ($menit >00 and $menit<60)
	{ 
		$ucapan="Selamat Sore"; 
	} 
} else if ($jam >= 18 and $jam <= 24 )
	{ 
	if ($menit >00 and $menit<60)
	{ 
		$ucapan="Selamat Malam"; 
	} 
} else 
	{
	$ucapan="Error"; 
	} 
	return $ucapan; 
} echo greetingtime(); // menampilkan ucapannya ?>