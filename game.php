<!-- <html>
<head>
<title>Semua Calculator</title>
</head>
<body>

<form action=game.php method=post>
<h2>
Semua Calculator
</h2>

<div>
<input type="text" name="a" placeholder="Nilai A" value="<?php if(!empty($_POST['a'])){ echo $_POST['a']; }?>" required>
</div>

<div>
<input type="text" name="b" placeholder="Nilai B" value="<?php if(!empty($_POST['b'])){ echo $_POST['b']; }?>" required>
</div>

<div>
<button type="submit" name="submit" value="submit">
Hitung
</button>
</div>
</form>

<?php 
class perhitungan{
function luas_segitiga($a,$t){
$luas_segi = 1/2 * $a * $t;
return $luas_segi;
} 

function luas_lingkaran($r1,$r2){
$luas_ling = 3.14 * $r1 * $r2;
return $luas_ling;
}

function bmi($berat,$tinggi) {
$bmi = $berat/($tinggi*$tinggi);
return $bmi;
} 
}

if(!empty($_POST['submit'])){

$a = $_POST['a'];
$b = $_POST['b'];

$segitiga = new perhitungan();
$lingkaran = new perhitungan();
$bmi = new perhitungan();

echo "luas segitiga adalah ";
echo $segitiga->luas_segitiga($a,$b);
echo "<br>";
echo "luas lingkaran adalah ";
echo $lingkaran->luas_lingkaran($a,$b);
echo "<br>";
echo "bmi adalah ";
echo $bmi->bmi($a,$b);
echo "<br>";


}
?> -->

</body>
</html>

<?php
// buat class laptop
class laptop {
// buat property untuk class laptop
public $pemilik="Andi";
public $x = 4;
public $y = 6;
// buat method untuk class laptop
function hidupkan_laptop() {
return "Hidupkan Laptop $this->pemilik";
}

function perkalian(){
$z= $this->x * $this->y;
echo $z;
}

function pembagian($x,$y){
$z= $x / $y;
echo $z;
}

}


$laptop_baru = new laptop();
echo $laptop_baru->perkalian();
echo "<br>";
echo $laptop_baru->pembagian(8,4);
echo "<br>";
echo $laptop_baru->hidupkan_laptop();
echo "<br>";

?>