<?php
	include 'function.php';

	echo "<h1>Bài 1</h1>";

	$n = random_int(10, 1000);
	echo "<h3>Tạo ngẫu nhiên 1 số nguyên có giá trị trong khoảng [10,1000]. Sau đó thực hiện các yêu cầu sau: <span>" . $n . "</span></h3>";

	/*============ Câu a ============*/
	echo "<h4>a. Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo.</h4>";
	for ($i = 2; $i < $n; $i++) {
		if(nguyenTo($i) != 1) {
			echo $i . "&emsp;";
		}
	}
	/*============ Câu b ============*/
	echo "<h4>b. Cho biết số nguyên này có bao nhiêu chữ số.</h4>";
	echo "Số nguyên " . $n . " có số chữ số là: " . soChuSo($n);
	

	/*============ Câu c ============*/
	echo "<h4>c. Cho biết chữ số lớn nhất trong số nguyên này.</h4>";
	echo "Chữ số lớn nhất trong sô nguyên " . $n . " là: " . chuSoMax($n);
 ?>

<style>
	h1 {
		text-align:  center;
	}
	span {
		color:  red;
	}
</style>
