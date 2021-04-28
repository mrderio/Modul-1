<html>
<head>
	<title>Variabel Static</title>
</head>
<body>
<h1>Variabel Static</h1>
<?php

// Nama : Muhammad Derio
// Kelas : 06TPLE012

function test() {
static $a=0; // dengan static
echo "Nilai a : ";
echo $a;
echo "<br>";
$a++;
}
test();
test();
test();
test();
test();
?>
</body>
</html>