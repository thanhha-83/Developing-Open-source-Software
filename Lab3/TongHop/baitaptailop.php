<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập</title>
    <link rel="stylesheet" href="./css/baitaptailop.css">
</head>

<body>
    <?php
        include "./function/function.php";
        $n = "";
        $kq = "";
        $error = "";
        if(isset($_POST['n'])) {
            $n = trim($_POST['n']);
            if(is_numeric($n)) {
                if((int)$n >= 10 && (int)$n <= 1000) {
                    $kq .= "a. Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo.\n\t";
                    for ($i = 2; $i < $n; $i++) {
                        if(nguyenTo($i) != 1) {
                            $kq .= $i . "&emsp;";
                        }
                    }
                    $kq .= "\nb. Cho biết số nguyên này có bao nhiêu chữ số.\n";
	                $kq .= "\tSố nguyên " . $n . " có số chữ số là: " . soChuSo($n);

                    $kq .= "\nc. Cho biết chữ số lớn nhất trong số nguyên này.\n";
	                $kq .= "\tChữ số lớn nhất trong số nguyên " . $n . " là: " . chuSoMax($n);
                }
                else {
                    $error = 'Bạn cần nhập số n trong khoảng [10; 1000]';
                }
            }
            else {
                $error = 'Bạn cần nhập n là giá trị kiểu số!';
            }
        }
    ?>
    <div id="content">
        <div id="title">BÀI TẬP</div>
        <div id="form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Số n:</td>
                        <td>
                            <input type="text" name="n" value="<?php echo $n;?>"> <i>[10;1000]</i>
                        </td>
                    </tr>
                    <tr>
                        <td>Kết quả:</td>
                        <td>
                            <textarea name="kq" cols="90" rows="10" readonly><?php echo $kq ?></textarea>
                        </td>
                    </tr>
                </table>
                <div>
                    <input type="submit" value="Xử lý" id="btn">
                </div>
            </form>
        </div>
        <div id="error">
            <?php echo $error ?>
        </div>
    </div>
</body>

</html>