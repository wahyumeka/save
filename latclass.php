<?php
// buat class laptop
class laptop {
   // buat property untuk class laptop
   var $pemilik;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }

   function matikan_laptop() {
     echo "matikan Laptop";
   }
    function kalkulasi() {
    	$x = 2;
    	$y = 3;

     echo  $x + $y;
   }
   function hitung_segitiga($a,$t) {
    	$luas = 1/2 * $a * $t;
    	echo $luas;
   }
   function bmi($berat,$tinggi) {
    	$bmi =$berat/($tinggi*$tinggi);
    	return $bmi;
   }
} 
?>
<?php
// $pribadi = new laptop();
// echo $pribadi ->bmi(70,1.7);
// echo "<br />";
// buat objek dari class laptop (instansiasi)
$pribadi	 = new laptop();
$laptop_anto = new laptop();
$laptop_andi = new laptop();
$laptop_dina = new laptop();

// set property
$laptop_anto->pemilik="Anto";
$laptop_andi->pemilik="Andi";
$laptop_dina->pemilik="Dina";
  
// tampilkan property
echo $laptop_anto->pemilik; // Anto
echo "<br />";
echo $laptop_andi->pemilik; // Andi
echo "<br />";
echo $laptop_dina->pemilik; // Dina
echo "<br />";
echo $laptop_dina->hidupkan_laptop(); // Dina
echo "<br />";
echo $laptop_anto->matikan_laptop(); // Anto
echo "<br />";
echo $laptop_andi->kalkulasi(); // Andi
echo "<br />";
echo $laptop_anto->kalkulasi();
echo "<br />";
echo $laptop_anto->hitung_segitiga(4,6);
echo "<br />";
echo $pribadi ->bmi(70,1.7);
echo "<br />";


?>

