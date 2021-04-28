<!DOCTYPE html>
<html>
<head>
	<title>Pemograman web 2 - Latihan 1</title>
</head>
<body>
<?php 

// Nama : Muhammad Derio
// Kelas : 06TPLE012

$A = 123 ; // variable global
function Test() {
$A = "Test"; // variable local
echo"Nilai A dalam fungsi = $A \n";
}
Test();
echo "<br/>";
echo"Nilai A luar fungsi = $A \n";
?>


</body>
</html>