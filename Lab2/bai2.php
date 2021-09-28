<?php
	echo "<h1>Bài 2</h1>";

	$n = random_int(1, 10);
	echo "<h3>Tạo một số nguyên dương ngẫu nhiên có giá trị trong khoảng [1,10].
	In ra bảng cửu chương tương ứng với giá trị đó: <span>" . $n . "</span></h3>";
	for ($i = 1; $i <= 10; $i++) {
		echo "&emsp;" . $n . " x " . $i . " = " . $n * $i . "<br />";
	}
 ?>

<style>
	h1 {
		text-align:  center;
	}
	span {
		color:  red;
	}
</style>