<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 4</title>
    <link rel="stylesheet" href="./css/bai1.css">
</head>

<body>
    <?php
    $n = "";
    $m = "";
    $kq = "";
    $errors = [];
    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        $n = $_POST['n'];
        $m = $_POST['m'];
        if ($_POST['n'] != "" && $_POST['m'] != "") {
            $arr = [];
            $kq .= "- In ra ma trận vừa mới tạo.\n\t";
            $count = 0;
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $m; $j++) {
                    $arr[$i][$j] = rand(-200, 200);
                    $kq .= $arr[$i][$j] . '&emsp;';
                    if($arr[$i][$j] % 2 != 0)
                        $count++;
                }
                $kq .= "\n\t";
            }
            $kq .= "\n- Đếm số phần tử có chữ số cuối là số lẻ.\n\t";
            $kq .= $count . "\n";
            $kq .= "\n- Thay thế các phần tử khác 0 thành 1. In ra ma trận sau khi thay thế.\n\t";
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $m; $j++) {
                    if($arr[$i][$j] != 0) {
                        $arr[$i][$j] = 1;
                    }
                    $kq .= $arr[$i][$j] . '&emsp;';
                }
                $kq .= "\n\t";
            }
        }
        else {
            if($_POST['n'] == "") {
                array_push($errors, "Bạn cần nhập vào số n");
            }
            if($_POST['m'] == "") {
                array_push($errors, "Bạn cần nhập vào số m");
            }
        }
    }
    ?>
    <div id="content">
        <div id="title">BÀI TẬP 4</div>
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
                        <td>Số m:</td>
                        <td>
                            <input type="number" name="m" value="<?php echo $m; ?>" min="1">
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