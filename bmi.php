
<form name="bmi" method="GET" action="bmi.php">
Berat kilogram (kg):
  <input type="text" name="berat" id="berat" size="15">
  <br> 

 Tinggi meter (m):
  <input type="text" name="tinggi" id="tinggi" size="15">
  <br>

  <input type="submit" name="submit" id="submit" value="submit">
</form>

<?php
if(isset($_GET['submit'])) { 
    $berat = $_GET['berat'];
    $tinggi = $_GET['tinggi'];

    function bmi($berat,$tinggi) {
        $bmi = $berat/($tinggi*$tinggi);
        return $bmi;
    }   

    $bmi = bmi($berat,$tinggi); //<--- this is critical

    if ($bmi <= 18.5) {
        $output = "ANDA KEKURANGAN BERAT BADAN";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "BERAT BADAN ANDA NORMAL";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "ANDA KELEBIHAN BERAT BADAN";

        } else if ($bmi > 30.0) {
        $output = "BERAT BADAN ANDA SANGAT BERLEBIHAN";
    }
    echo "Jumlah BMI Anda adalah  " . $bmi . "  dan : "; 
    echo "$output";
}
?>
