<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1</title>
    <link rel="stylesheet" href="./css/bai1.css">
</head>

<body>
    <?php
    $n = "";
    $m = "";
    $vt = "";
    $kq = "";
    $errors = [];
    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        if ($_POST['n'] != "") {
            $n = $_POST['n'];
            $arr = [];
            $kq .= "a- Hiển thị mảng phát sinh ngẫu nhiên có độ dài $n.\n\t";
            for ($i = 0; $i < $n; $i++) {
                $arr[$i] = rand(-100, 100);
                $kq .= $arr[$i] . '&emsp;';
            }
            sort($arr);
            $kq .= "\nb- Sắp xếp mảng tăng dần theo giá trị.\n\t";
            for ($i = 0; $i < $n; $i++) {
                $kq .= $arr[$i] . '&emsp;';
            }
            if ($_POST['m'] != "" && $_POST['vt'] != "") {
                $m = $_POST['m'];
                $vt = $_POST['vt'];
                if ($vt > count($arr) + 1) {
                    array_push($errors, "Bạn cần nhập vị trí trong khoảng [1;" . (count($arr) + 1) . "]");
                } else {
                    array_splice($arr, $vt - 1, 0, $m);
                    $count = $n + 1;
                    $kq .= "\nc- Chèn $m vị trí $vt trong mảng. In ra mảng sau khi chèn số.\n\t";
                    for ($i = 0; $i < $count; $i++) {
                        $kq .= $arr[$i] . '&emsp;';
                    }
                    $kq .= "\nd- Sắp xếp mảng theo dạng sau: Từ phần tử đầu tiên đến phần tử được chèn vào là tăng dần; từ phần tử được chèn vào đến phần tử cuối là giảm dần.\n\t";
                    $left = array_slice($arr, 0, $vt - 1);
                    $right = array_slice($arr, $vt + 1);
                    sort($left);
                    rsort($right);
                    for ($i = 0; $i < count($left); $i++) {
                        $kq .= $left[$i] . '&emsp;';
                    }
                    $kq .= $m . '&emsp;';
                    for ($i = 0; $i < count($right); $i++) {
                        $kq .= $right[$i] . '&emsp;';
                    }
                }
            }
        }
        else {
            array_push($errors, "Bạn cần nhập vào số n");
        }
    }
    ?>
    <div id="content">
        <div id="title">BÀI TẬP 1</div>
        <div id="form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Số n:</td>
                        <td>
                            <input type="number" name="n" value="<?php echo $n; ?>" min="1">
                        </td>
                    </tr>
                    <tr>
                        <td>Số cần chèn:</td>
                        <td>
                            <input type="number" name="m" value="<?php echo $m; ?>" step="0.01">
                        </td>
                    </tr>
                    <tr>
                        <td>Vị trí chèn:</td>
                        <td>
                            <input type="number" name="vt" value="<?php echo $vt; ?>" min="1">
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
            <?php
            if (count($errors) > 0) {
                foreach ($errors as $er) {
                    echo $er . "<br>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>