<?php
	echo "<h1>Bài 4</h1>";

	$m = random_int(2, 5);
	$n = random_int(2, 5);
	echo "<h3>Hiển thị ma trận có kích thước mxn, với m và n là 2 số nguyên dương được tạo ngẫu nhiên trong khoảng [2,5], và các phần tử trong ma trận có giá trị thuộc [-100, 100].</h3>";
	echo "Ma trận " . $m . "x" . $n . ":<br />";
	$array = [];
	for ($i = 0; $i < $m; $i++) { 
		for ($j = 0; $j < $n; $j++) { 
			$array[$i][$j] = rand(-100, 100);
		}
	}
	echo "<table>";
	for ($i = 0; $i < $m; $i++) {
		echo "<tr>";
		for ($j = 0; $j < $n; $j++) {
			echo "<td>";
			echo $array[$i][$j];
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
 ?>
<style>

	h1 {
		text-align:  center;
	}
	span {
		color:  red;
	}

	table {
		margin-top: 10px;
		border: 1px solid black;
	}
</style>