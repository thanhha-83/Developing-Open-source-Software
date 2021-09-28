<?php
	echo "<h1>Bài 3</h1>";

	echo "<h3>In ra trình duyệt các bảng cửu chương từ 1 đến 10.</h3>";
	for ($i = 1; $i <= 10; $i++) {
		echo "<div>";
		for ($j = 1; $j <= 10; $j++) {

			echo $i . " x " . $j . " = " . $i * $j . "<br />";
		}
		echo "</div>";
	}
 ?>

<style>
	h1 {
		text-align:  center;
	}
	span {
		color:  red;
	}
	div {
		float: left;
		margin-bottom: 20px;
		margin-left: 20px;
	}
</style>