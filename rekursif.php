<?php

$k = 0;
	rekursif1(5);

	function rekursif2($l, $kolom){
		global $k;
		if ($l > $k - $kolom) {
			echo "*";
			rekursif2($l - 1, $kolom);
		}
	}

	function rekursif1($kolom){
		global $k;
		rekursif2($k, $kolom);
		echo "<br>";
		if (--$kolom > $k) {
			rekursif1($kolom);
		}
	}

	echo "/*=============================================*/<br>";

	$n = 5;
	function rekursif($i, $j, $n){
		if ($i <= $n) {
			if ($j <= $i) {
				echo $j;
				$j++;
				rekursif($i, $j, $n);
			}
			else{
				echo "<br>";
			$i++;
			rekursif($i, 1, $n);
			}
		}
	}

	rekursif(1,1,$n);
?>
