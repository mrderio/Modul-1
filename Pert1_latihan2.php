<!DOCTYPE html>
<html>
<head>
	<title>Pemorgaman web 2 - Latihan 2</title>
</head>
<body>
<?php

// nama : Muhammad Derio
// kelas : 06TPLE012

$A = 123 ; // variable global
function Test() {
global $A ; // variable local
echo"Nilai A dalam fungsi = $A \n";
}
Test();
echo "<br/>";
echo"Nilai A luar fungsi = $A \n";
?>
</body>
</html>

