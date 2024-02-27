<?php
// definisikan variables
$nama = 'Siti Komariah Hoirunnisa';
$umur = 18;
$berat = 34.2;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur. ' Tahun';
echo '<br/>Berat : ' .$berat. 'Kg';

echo "<br/>Hello $nama Apakabar";


// variable konstansta
define ('PHI',3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $JARI * $jari;
$kll = 2 * PHI * $jari;

echo ' Luas Lingkaran dengan Jari ' .$jari. ' : ' .$luas;
echo '<br/>Kelilingnya : ' .$kll;
?>
<?php
echo ' Nama databasenya : ' .DBNAME;
echo '<br/>Lokasi databasenya ada di ' .DBSERVER;