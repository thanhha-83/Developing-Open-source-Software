<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền điện</title>
    <link rel="stylesheet" href="./css/bai2.css">
</head>

<body>
    <?php
        $ten = "";
        $csc = "0";
        $csm = "0";
        $gia = "20000";
        $tongtien = "0";
        $errors = [];
        if(isset($_POST['ten'])) {
            $ten = $_POST['ten'];
        }
        if (isset($_POST['csc']) && isset($_POST['csm']) && isset($_POST['gia'])) {
            $csc = trim($_POST['csc']);
            $csm = trim($_POST['csm']);
            $gia = trim($_POST['gia']);
            if($csc == "" || $csm == "" || $gia == "") {
                if($csc == "")
                    array_push($errors, 'Bạn cần nhập chỉ số cũ!');
                if($csm == "")
                    array_push($errors, 'Bạn cần nhập chỉ số mới!');
                if($gia == "")
                    array_push($errors, 'Bạn cần nhập đơn giá!');
            }
            else if(is_numeric($csc) && is_numeric($csm) && is_numeric($gia)) {
                if($csc > 0 && $csm > 0 && $gia > 0 && $csc < $csm)
                    $tongtien = round(($csm - $csc) * $gia, 2);
                else {
                    if ($csc <= 0)
                        array_push($errors, 'Bạn cần nhập chỉ số cũ lớn hơn 0!');
                    if ($csm <= 0)
                        array_push($errors, 'Bạn cần nhập chỉ số mới lớn hơn 0!');
                    if ($gia <= 0)
                        array_push($errors, 'Bạn cần nhập đơn giá lớn hơn 0!');
                    if ($csc >= $csm)
                        array_push($errors, 'Bạn cần nhập chỉ số mới lớn hơn chỉ số cũ!');
                }
            }
            else {
                if(!is_numeric($csc))
                    array_push($errors, 'Bạn cần nhập chỉ số cũ là giá trị kiểu số!');
                if(!is_numeric($csm))
                    array_push($errors, 'Bạn cần nhập chỉ số mới là giá trị kiểu số!');
                if(!is_numeric($gia))
                    array_push($errors, 'Bạn cần nhập chỉ đơn giá là giá trị kiểu số!');
            }
        }
    ?>
    <div id="content">
        <div id="title">THANH TOÁN TIỀN ĐIỆN</div>
        <div id="form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên chủ hộ:</td>
                        <td>
                            <input type="text" name="ten" value="<?php echo $ten?>">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chỉ số cũ:</td>
                        <td>
                            <input type="text" name="csc" value="<?php echo $csc?>">
                        </td>
                        <td>(Kw)</td>
                    </tr>
                    <tr>
                        <td>Chỉ số mới:</td>
                        <td>
                            <input type="text" name="csm"" value="<?php echo $csm?>">
                        </td>
                        <td>(Kw)</td>
                    </tr>
                    <tr>
                        <td>Đơn giá:</td>
                        <td>
                            <input type="text" name="gia" value="<?php echo $gia?>">
                        </td>
                        <td>(VNĐ)</td>
                    </tr>
                    <tr>
                        <td>Số tiền thanh toán:</td>
                        <td>
                            <input type="text" name="tongtien" value="<?php echo $tongtien?>" readonly disabled>
                        </td>
                        <td>(VNĐ)</td>
                    </tr>
                </table>
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