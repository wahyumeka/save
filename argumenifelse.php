<?php



$nilai = 22;

if ($nilai == 20){
	echo " Nilainya adalah 20 ";}

else {
	echo "bukan 20";
}


?>

<html>
<head>
<title>.:: Contoh Seleksi Kondisi
::.</title>
</head>
<body>
<font face=verdana size=2>
Modul Pemrograman Web
32
<form action=nilai.php method=post>Masukkan Nilai :
<input type=text name=nilai size=2><p>
<input type=submit value=Proses>
</form>
</body>
</html>
Untuk memproses file diatas, buat script berikut dan simpan dengan nama
nilai.php
File nilai.php
<html>
<head>
<title>.:: Contoh Seleksi Kondisi
::.</title>
</head>
<body>
<font face=verdana size=2>
<?
echo "Nilai Ujian anda : $nilai<br>";
if ($nilai>70)
{
 echo "Anda Kompeten<br>";
}
?>
</body>
</html>



<html>
<head>
<title>.:: Contoh Seleksi Kondisi ::.</title>
</head>
<body>
<font face=verdana size=2>
<form action=nilai2.php
method=post>
Masukkan Nilai :
<input type=text name=nilai
size=2><p>
<input type=submit
value=Proses>
Mulai
Input Nilai
Lulus dan Tidak
Kompeten
Selesai
Tidak Lulus
T
Y
Apakah nilai < 50
Apakah nilai < 70
Lulus dan
Kompeten
T
Y
Modul Pemrograman Web
34
</form>
</body>
</html>
File nilai2.php:
<html>
<head>
<title>.:: Contoh Seleksi Kondisi ::.</title>
</head>
<body>
<font face=verdana size=2>
<?
echo "Nilai Ujian anda : $nilai<br>";
if ($nilai<50)
{
echo "Anda Tidak Lulus<br>";
}
elseif ($nilai<70)
{
echo "Anda Lulus Tapi Tidak Kompeten<br>";
}
else
{
echo "Selamat Anda Lulus dan
Kompeten";
}
?>
</body>
</html>
Hasilnya adalah 


<head>
<title>.:: Program Menghitung Discount ::.</title>
</head>
<body>
<font face=verdana size=2>
<form>Jumlah Bayar
<input type=text name=totalbeli><br><br>
<input type=submit value="Hitung Diskon">
</form>
<?php
if (isset($totalbeli))
{
$toyar=intval($totalbeli);
$diskon=0;
if ($toyar>=500000)
$diskon=(0.5*$toyar);
else
if ($toyar>=100000)
$diskon=(0.1*$toyar);
else
if ($toyar>=50000)
$diskon=(0.05*$toyar);
else
print("Maaf Tidak Ada Diskon <br>\n");
printf("Jumlah Bayar = %d<br>\n",$toyar);
printf("Diskon = %d<br>\n",$diskon);
$totalbayar=$toyar-$diskon;
printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);
}
?>
</body>
</html>


