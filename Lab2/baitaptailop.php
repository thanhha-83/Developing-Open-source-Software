<?php
	echo "<h1>Bài tập tại lớp</h1>";

    // Tạo ngẫu nhiên 2 số a, b
	$a = random_int(1, 5);
    $b = random_int(10, 100);

    // In 2 số a, b ra màn hình
	echo "<p>Số a được tạo: " . $a . "</p>";
    echo "<p>Số b được tạo: " . $b . "</p>";
    switch ($a) {
        // a = 1: Tính chu vi, diện tích hình vuông cạnh bằng b
        case 1:
            $cv = $b * 4;
            $dt = $b * $b;
            echo "<p>Chu vi hình vuông cạnh bằng $b là $cv</p>";
            echo "<p>Diện tích hình vuông cạnh bằng $b là $dt</p>";
        break;
        // a = 2: Tính chu vi, diện tích hình tròn bán kính bằng b
        case 2:
            $cv = 2 * $b * 3.14;
            $dt = round(3.14 * $b * $b, 2);
            echo "<p>Chu vi hình tròn bán kính bằng $b là $cv</p>";
            echo "<p>Diện tích hình tròn bán kính bằng $b là $dt</p>";
        break;
        // a = 3: Tính chu vi, diện tích hình tam giác đều cạnh bằng b
        case 3:
            $cv = 3 * $b;
            $dt = round(($b * $b * sqrt(3)) / 4, 2);
            echo "<p>Chu vi hình tam giác đều cạnh bằng $b là $cv</p>";
            echo "<p>Diện tích hình tam giác đều cạnh bằng $b là $dt</p>";
        break;
        // a = 4: Tính chu vi, diện tích hình chữ nhật có 2 cạnh a, b
        case 4:
            $cv = ($a + $b) * 2;
            $dt = $a * $b;
            echo "<p>Chu vi hình chữ nhật có 2 cạnh a = $a và b = $b là $cv</p>";
            echo "<p>Diện tích hình chữ nhật có 2 cạnh a = $a và b = $b là $dt</p>";
            break;
        // a != {1,2,3,4}: Không thỏa
        default:
            echo "<p>Không thỏa trường hợp nào.</p>";
            break;
    }
 ?>

<style>
	h1 {
		text-align:  center;
	}
</style>