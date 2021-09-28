<?php
	include 'function.php';

	echo "<h1>Bài 5</h1>";
	echo "<h3>Tạo ngẫu nhiên 1 số nguyên có giá trị trong khoảng [-100,100]</h3>";
	echo "<h3>Kiểm tra số nguyên này có phải là số nguyên tố. Nếu là số nguyên tố thì đưa vào lưu trữ trong tập tin có tên là soNT.txt</h3>";

	$n = random_int(-100, 100);
	if(nguyenTo($n) != 1 and $n >= 2) {
		echo $n . " là số nguyên tố. (Có thể ghi vào file).<br />";
		$path = "soNT.txt";
		$fp = @fopen($path, "a");
		if(!$fp)
			echo "Mở file không thành công.";
		else {
			echo "Mở file thành công.<br />";
			$content = $n . " ";
			fwrite($fp, $content);
			echo "Đã lưu " . $n . " vào file.<br />";
			fclose($fp);
		}
	}
	else
		echo $n . " không là số nguyên tố. (Không thể ghi vào file)<br />";
 ?>

<style>
	h1 {
		text-align:  center;
	}
	span {
		color:  red;
	}
</style>