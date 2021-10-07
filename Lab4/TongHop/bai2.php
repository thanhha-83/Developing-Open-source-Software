<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập dãy số và tính</title>
    <link rel="stylesheet" href="./css/bai2.css">
</head>

<body>
    <?php
        $dayso = "";
        $tong = "";
        $error = "";
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            if($_POST['dayso'] != "") {
                $dayso = trim($_POST['dayso']);
                $arr = explode(",", $dayso);
                $tong = array_sum($arr);
            }
            else {
                $error = "Vui lòng nhập dãy số";
            }
            
        }
    ?>
    <div id="content">
        <div id="title">NHẬP VÀ TÍNH TỔNG DÃY SỐ</div>
        <div id="form">
            <form action="" method="POST" name="myForm">
                <div>
                    <label for="dayso">Nhập dãy số:</label>
                    <input type="text" name="dayso" value="<?php echo $dayso;?>">
                </div>
                <div>
                    <label for="tong">Tổng dãy số:</label>
                    <input type="text" name="tong" readonly disabled value="<?php echo $tong;?>">
                </div>
                <div>
                    <input type="submit" value="Tổng dãy số" id="btn">
                </div>
            </form>
        </div>
        <div id="error">
            <?php
                echo $error;
            ?>
        </div>
    </div>
</body>

</html>