<html>
<head>
		<title>Hasil Operasi Aritmatika</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
				$a = $_POST['a'];
				$b = $_POST['b'];
				$operasi = $_POST['operasi'];
			}
	if ($operasi==1)
	{
		$c=$a+$b;
		$oper='[a + b]';
	}
	elseif ($operasi==2)
	{
		$c=$a-$b;
		$oper='[a - b]';				
	}
	elseif ($operasi==3)
	{
		$c=$a*$b;
		$oper='[a * b]';
	}
	else
	{
		$c=$a/$b;
		$operasi='[a / b]';
	}
	echo "Nilai A adalah = $a dan Nilai B adalah = $b<br>";
	echo "Hasil Operasi $oper adalah = $c<br>";
?>
</body>
</html>