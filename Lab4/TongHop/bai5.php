<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 5</title>
    <link rel="stylesheet" href="./css/bai5.css">
</head>

<body>
    <?php
    session_start();
    $maMH = "";
    $tenMH = "";
    $dvt = "";
    $sl = "";
    $errors = [];
    $listMH = [
        ["maMH" => "A001", "tenMH" => "Sữa tắm Xmen", "dvt" => "Chai 50ml", "sl" => 50],
        ["maMH" => "A002", "tenMH" => "Dầu gội đầu Lifeboy", "dvt" => "Chai 50ml", "sl" => 20],
        ["maMH" => "B001", "tenMH" => "Dầu ăn Cái Lân", "dvt" => "Chai 1 lít", "sl" => 10],
        ["maMH" => "B002", "tenMH" => "Đường cát", "dvt" => "Kg", "sl" => 15],
        ["maMH" => "C001", "tenMH" => "Chén sứ Minh Long", "dvt" => "Bộ 10 cái", "sl" => 2],
    ];
    if(!isset($_SESSION['listMH'])) {
        $_SESSION['listMH'] = $listMH;
    }
    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        $maMH = trim($_POST['maMH']);
        $tenMH = trim($_POST['tenMH']);
        $dvt = trim($_POST['dvt']);
        $sl = $_POST['sl'];
        if ($_POST['maMH'] != "" && $_POST['tenMH'] != "" && $_POST['dvt'] != "" && $_POST['sl'] != "") {
            $flag = true;
            foreach($_SESSION['listMH'] as $mh) {
                if($maMH == $mh['maMH']) {
                    $flag = false;
                    break;
                }
            }
            if($flag == true) {
                array_push($_SESSION['listMH'], [
                    "maMH" => $maMH,
                    "tenMH" => $tenMH,
                    "dvt" => $dvt,
                    "sl" => $sl
                ]);
            }
            else {
                array_push($errors, "Mã mặt hàng này đã tồn tại");
            }
        }
        else {
            if($_POST['maMH'] == "") {
                array_push($errors, "Bạn cần nhập vào mã mặt hàng");
            }
            if($_POST['tenMH'] == "") {
                array_push($errors, "Bạn cần nhập vào tên mặt hàng");
            }
            if($_POST['dvt'] == "") {
                array_push($errors, "Bạn cần nhập vào đơn vị tính");
            }
            if($_POST['sl'] == "") {
                array_push($errors, "Bạn cần nhập vào số lượng");
            }
        }
    }
    ?>
    <div id="content">
        <div id="title">BÀI TẬP 5</div>
        <div id="form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            Mã mặt hàng: <input type="text" name="maMH" value="<?php echo $maMH; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tên mặt hàng: <input type="text" name="tenMH" value="<?php echo $tenMH; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Đơn vị tính: <input type="text" name="dvt" value="<?php echo $dvt; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Số lượng: <input type="number" name="sl" value="<?php echo $sl; ?>" min="1">
                        </td>
                    </tr>
                </table>
                <div>
                    <input type="submit" value="Thêm" id="btn">
                </div>
            </form>
        </div>
        <div id="listMH">
            <div id="tbTitle">Danh sách mặt hàng:</div>
            <table border="1px solid black">
                <tr style="color: red;">
                    <th>Mã mặt hàng</th>
                    <th>Tên mặt hàng</th>
                    <th>Đơn vị tính</th>
                    <th>Số lượng</th>
                </tr>
                <?php
                    foreach($_SESSION['listMH'] as $mh) {
                        echo '<tr>
                            <td>'.$mh['maMH'].'</td>
                            <td>'.$mh['tenMH'].'</td>
                            <td>'.$mh['dvt'].'</td>
                            <td>'.$mh['sl'].'</td>
                        </tr>';
                    } 
                ?>
            </table>
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