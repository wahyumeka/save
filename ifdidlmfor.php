<!-- <!-<?php

for ($i=0; $i <= 10; $i++) { 

	if ($i == 5) {

		echo "Nilainya adalah ".$i;
		echo "<br>";
	}else {

		echo "Selain Lima";
		echo "<br>";
	}
}

?> --> 


<!-- <!- <?php
// if inside for

for ($i=1; $i <= 10; $i++) { 

//looping sebanyak i = 1 hingga i <= 10
// artinya looping sebanyak 10 kali

if ($i == 5) {
// ketika looping menemui angka 5 maka cetak angka lima

echo "Nilainya adalah".$i;
}else {

// kondisi ini tidak mencetak anggka 5
// artinya yang di cetak 1-4 dan 6-10
echo "Nilainya diluar itu";
}
}

?>


<?php
// for inside if

$x=6; // x adalah 6
if ($x==6) { // jika x sebanding dengan 6 maka
// maka x sama dengan 6

for ($i=1; $i <= $x ; $i++) { 
// ulang sebanyak i=1 hingga i <= 6
// artinya for di looping sebanyak 6 kali

echo "Ulang sebanyak 6 kali"; // cetak 6 kali
echo "<br>"; // spasi enter
}

} else {
// x tidak sama dengan 6
echo "tidak tercetak";
}

?> --> 

<!-- <?php

				// index 1 //index 2  //index 3
$bulan= array ('Januari', 'Februari','Maret'); 

foreach ($bulan as $index => $value) {
if ($value=='Maret') { 
// cetak bulan 2 maret
	echo "Bulan".$value;

} else {
// //bulan bulan maret yaitu bulan januari
	// //bulan bulan maret yaitu bulan januari
echo "Bulan Bulan Maret yaitu Bulan".$value;
echo "<br>";
}
}
?>

<?php
$variable_bulan =array("Januari","Februari","Maret");
ECHO "Cetak Nama Bulan :".$variable_bulan[0].",".$variable_bulan[1].",".$variable_bulan[2].",";
?>
 -->
exs.  table => membuat contaoh table.
<!-- <!DOCTYPE>
<html>
<head>
<title></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body>
<table class="blueTable" id="tab">
<thead>
<tr>
<th>head1</th>
<th>head2</th>
<th>head3</th>
<th>head4</th>
</tr>
</thead>
<tbody>
<tr>
<td>cell1_1</td>
<td>cell2_1</td>
<td>cell3_1</td>
<td>cell4_1</td>
</tr>
<tr>
<td>cell1_2</td>
<td>cell2_2</td>
<td>cell3_2</td>
<td>cell4_2</td>
</tr>
<tr>
<td>cell1_3</td>
<td>cell2_3</td>
<td>cell3_3</td>
<td>cell4_3</td>
</tr>
<tr>
<td>cell1_4</td>
<td>cell2_4</td>
<td>cell3_4</td>
<td>cell4_4</td>
</tr>
<tr>
<td>cell1_5</td>
<td>cell2_5</td>
<td>cell3_5</td>
<td>cell4_5</td>
</tr>
<tr>
<td>cell1_6</td>
<td>cell2_6</td>
<td>cell3_6</td>
<td>cell4_6</td>
</tr>
<tr>
<td>cell1_7</td>
<td>cell2_7</td>
<td>cell3_7</td>
<td>cell4_7</td>
</tr>
<tr>
<td>cell1_8</td>
<td>cell2_8</td>
<td>cell3_8</td>
<td>cell4_8</td>
</tr>
<tr>
<td>cell1_9</td>
<td>cell2_9</td>
<td>cell3_9</td>
<td>cell4_9</td>
</tr>
<tr>
<td>cell1_10</td>
<td>cell2_10</td>
<td>cell3_10</td>
<td>cell4_10</td>
</tr>
<tr>
<td>cell1_11</td>
<td>cell2_11</td>
<td>cell3_11</td>
<td>cell4_11</td>
</tr>
<tr>
<td>cell1_12</td>
<td>cell2_12</td>
<td>cell3_12</td>
<td>cell4_12</td>
</tr>
</tbody>
</table>
<script>
$(document).ready( function () {
$('#tab').DataTable();
} );
</script>
</body>
</html>
 -->

guna function dlm program..constant utk memanggil data dari data base.
<!-- <?php
function writeMsg() {
    echo "Hello world!";
}
writeMsg(); // call the function
cetakmabes();

Function cetakmabes() {
    echo "MABES TNI";
}
?> -->
function dgn for

<!-- <?php


function writeMsg() {
    echo "Hello world!";
    echo"<br>";
}
for ($i=1; $i <=5 ; $i++) { 
	writeMsg();
	
}

?> -->


<?php

for($i=1; $i <=5 ; $i++) { 
        writeMsg();
}

function writeMsg() {
    echo "Hello world!";
    echo "<br>";
}

?>




