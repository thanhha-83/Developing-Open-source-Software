<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính trên 2 số</title>
    <link rel="stylesheet" href="./css/bai3.css">
</head>

<body>
    <?php
    $pheptinh = "";
    $so1 = "";
    $so2 = "";
    $kq = "";
    if (isset($_POST['pheptinh']) && isset($_POST['so1']) && isset($_POST['so2'])) {
        $so1 = trim($_POST['so1']);
        $so2 = trim($_POST['so2']);
        switch ($_POST['pheptinh']) {
            case '+':
                $pheptinh = "Cộng";
                $kq = round($so1 + $so2, 4);
                break;
            case '-':
                $pheptinh = "Trừ";
                $kq = round($so1 - $so2, 4);
                break;
            case '*':
                $pheptinh = "Nhân";
                $kq = round($so1 * $so2, 4);
                break;
            case '/':
                $pheptinh = "Chia";
                $kq = round($so1 / $so2, 4);
                break;
        }
    }
    ?>
    <div id="content">
        <div id="title">PHÉP TÍNH TRÊN HAI SỐ</div>
        <div id="form">
            <form action="bai3_result.php" method="POST">
                <table>
                    <tr id="pheptinh">
                        <td>Chọn phép tính:</td>
                        <td><?php echo $pheptinh ?></td>
                    </tr>
                    <tr>
                        <td class="number">Số thứ nhất:</td>
                        <td>
                            <input type="text" name="so1" value="<?php echo $so1 ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="number">Số thứ hai:</td>
                        <td>
                            <input type="text" name="so2" value="<?php echo $so2 ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="number">Kết quả:</td>
                        <td>
                        <input type="text" name="kq" value="<?php echo $kq ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>
                            <a href="javascript:window.history.back(-1);"><i>Quay lại trang trước</i></a>
                            <!-- <a href="pheptinh.php"><i>Quay lại trang trước</i></a> -->
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>