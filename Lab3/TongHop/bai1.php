<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình tròn</title>
    <link rel="stylesheet" href="./css/bai1.css">
</head>

<body>
    <?php
        $chieudai = "0";
        $chieurong = "0";
        $dientich = "0";
        $errors = [];
        if (isset($_POST['cDai']) && isset($_POST['cRong'])) {
            $chieudai = trim($_POST['cDai']);
            $chieurong = trim($_POST['cRong']);
            if($chieudai == "" || $chieurong == "") {
                if($chieudai == "")
                    array_push($errors, 'Bạn cần nhập chiều dài!');
                if($chieurong == "")
                    array_push($errors, 'Bạn cần nhập chiều rộng!');
            }
            else if(is_numeric($chieudai) && is_numeric($chieurong) ) {
                if($chieudai > 0 && $chieurong > 0)
                    $dientich = round($chieudai * $chieurong, 2);
                else {
                    if ($chieudai <= 0)
                        array_push($errors, 'Bạn cần nhập chiều dài lớn hơn 0!');
                    if ($chieurong <= 0)
                        array_push($errors, 'Bạn cần nhập chiều rộng lớn hơn 0!');
                }
            }
            else {
                if(!is_numeric($chieudai))
                    array_push($errors, 'Bạn cần nhập chiều dài là giá trị kiểu số!');
                if(!is_numeric($chieurong))
                    array_push($errors, 'Bạn cần nhập chiều rộng là giá trị kiểu số!');
            }
        }
    ?>
    <div id="content">
        <div id="title">DIỆN TÍCH HÌNH CHỮ NHẬT</div>
        <div id="form">
            <form action="" method="POST" name="myForm">
                <div>
                    <label for="cDai">Chiều dài:</label>
                    <input type="text" name="cDai" value="<?php echo $chieudai;?>">
                </div>
                <div>
                    <label for="cRong">Chiều rộng:</label>
                    <input type="text" name="cRong" value="<?php echo $chieurong;?>">
                </div>
                <div>
                    <label for="dt">Diện tích:</label>
                    <input type="text" name="dt" readonly disabled value="<?php echo $dientich;?>">
                </div>
                <div>
                    <input type="submit" value="Tính" id="btn">
                </div>
            </form>
        </div>
        <div id="error">
            <?php
                foreach($errors as $error)
                    echo $error."<br>";
            ?>
        </div>
    </div>
</body>

</html>