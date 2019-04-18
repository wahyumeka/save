<?php
/**
 * 
 */
class ClassTest {
	function test(){
		echo "test";
		echo "<br>";
		$x = 2;
		if ($x==2) {
			echo "Nilai 2";
			echo "<br>";

			for ($i=1; $i <= 5 ; $i++) { 
				echo "for di dalam if $i";
				echo "<br>";
			}

		} else {

			for ($i=1; $i <= 2 ; $i++) { 
				echo "For di dalam else $i";
				echo "<br>";
			}

		 echo "<br>";
		 echo "Nilai Lainnya";
		}
		

	}

	function testo(){

		for ($i=1; $i <=10 ; $i++) {
			if ($i==10) {
				echo "<br>";
				echo "Nilai Terakhir";

			} else {
				echo "<br>";
				echo "Nilai 1-9";
			}
			
		}

	}

	function apel_pagi(){
		echo "<br>";
		$variable_tni = array("Mas Wahyudi","Pak Deni","Pak Ronald" );
		foreach ($variable_tni as $key => $value) {

			echo $value;
			echo "<br>";
		}
		echo "ayo kita apel kumpul di lapangan";

	}

}


$testing = new ClassTest();
$testing->test();
$testing->testo();
$testing->apel_pagi();


?>