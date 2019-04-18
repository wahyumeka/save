<html>
<head>
		<title>::: Operasi Aritmatika :::</title>
</head>
<body>
<form action=x.php method=post>
<center><h3>Operasi Aritmatik A dan B</h3></center>
<table align=center bgcolor=#cedadc bordercolor=#cfdbdd>
		<tr>
			<td>Masukkan Nilai A </td>
			<td><input type=text name=a size=10></td>
		</tr>
		<tr>
			<td>Masukkan Nilai B </td>
			<td><input type=text name=b size=10></td>
		</tr>
		<tr>
			<td>Operasi</td>
			<td>
				<select name=operasi>
	    			<option value=1>Penjumlahan [a+b]</option>
	    			<option value=2>Pengurangan [a-b]</option>
  <option value=3>
       Perkalian [a*b]</option>
<option value=4>
Pembagian 	[a/b]</option>
</select>
</td>
</tr>
<tr>
<td colspan=2 align=center>
<input type=submit value=hitung name=submit></td>
</tr>
</table>
</form>
</body>
</html>



<html>
<head>
		<title>Hasil Operasi Aritmatika</title>
</head>
<body>
<?
if(isset($_POST['submit'])){
				$a = $_POST['a'];
				$b = $_POST['b'];
				$oprasi = $_POST['operasi'];}
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
		$oper='[a / b]';
	}
	echo "Nilai A adalah = $a dan Nilai B adalah = $b<br>";
	echo "Hasil Operasi $oper adalah = $c<br>";
?>
</body>
</html>
