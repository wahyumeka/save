<html>
<head>
	<title>variabel dalam php</titel>
</head>
<body>
<?php
	$a="5";

	$b="2.5";

	$komentar="Selamat Datang di PHP";
	
echo ("Nillai Variabel a adalah = $a <br>");
echo ("Nillai Variabel b adalah = $b <br>");
echo ("Nillai Variabel komentar adalah = $komentar <br>");
$hasil = $a+$b;
echo ("Hasil Jumlah a dan b adalah = $hasil <br>");
$tgl = date("d f y");
$nama = "Mabes TNI";
$garis = "===================";

echo "<p>" ;
echo $garis."<br>";
echo $komentar. "dikelas programan".$nama."<br>Belajar dengan giat ya....<br>";
echo $garis."<br>";
echo "Tanggal".$tgl;

?>
</body>
</html>
