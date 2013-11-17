<html>

<head>
<title>Call By Value & Reference</title>
</head>

<body bgcolor="white">


<h3>CALL BY VALUE</h3>


<? function jumlah($value) {
$value++;
}
$input=4;
jumlah($input);
echo $input;
?>

<h3>CALL BY REFERENCE</h3>


<?
function jumlah_value(&$value){
$value++;
}
$input=4;
jumlah_value($input);
echo $input;
?>

</body>
</html>