<html>
	<body>

		<?php
			$angka = array(-2, 100, 25, 15, 1, 2, 3, 7, 9 ,11, 24, 42, 96, 69, -8);
			sort($angka);

			$arrlength = count($angka);
			for ($i = 0; $i < $arrlength; $i++) {
				echo $angka[$i] . " , ";
			}

			echo "<br>";
			echo "<br>";

			foreach($angka as $value) {
				if($value<0) {
					echo "$value" . " , " ;
				
				}
			}

			echo "<br>";
			echo "<br>";

			foreach($angka as $value) {
				if($value % 5 == 0) {
					echo "$value" . " , " ;
				}
			}

			echo "<br>";
			echo "<br>";

			foreach($angka as $value) {
				if($value % 2 == 0) {
					echo "$value" . " , " ;
				}
			}
		?>
	</body>
</html>