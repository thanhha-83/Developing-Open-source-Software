<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý thông tin người dùng</title>
</head>
<body>
    <?php 
        $hoten = isset($_POST['hoten']) && $_POST['hoten'] != "" ? $_POST['hoten'] : "<i>(Chưa nhập)</i>";
        $gt = isset($_POST['gt']) && $_POST['gt'] != "" ? $_POST['gt'] : "<i>(Chưa nhập)</i>";
        $diachi = isset($_POST['diachi']) && $_POST['diachi'] != "" ? $_POST['diachi'] : "<i>(Chưa nhập)</i>";
        $sdt = isset($_POST['sdt']) && $_POST['sdt'] != "" ? $_POST['sdt'] : "<i>(Chưa nhập)</i>";
        $qt = isset($_POST['qt']) && $_POST['qt'] != "" ? $_POST['qt'] : "<i>(Chưa nhập)</i>";
        $monhoc = isset($_POST['monhoc']) ? $_POST['monhoc'] : [];
        $ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : "";
    ?>
    <p style="font-weight: bold;">Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</p>
    <div>
        <span>Họ tên: <?php echo $hoten ?></span><br>
        <span>Giới tính: <?php echo $gt == 1 ? "Nam" : "Nữ" ?></span><br>
        <span>Địa chỉ: <?php echo $diachi ?></span><br>
        <span>Điện thoại: <?php echo $sdt ?></span><br>
        <span>Quốc tịch: <?php echo $qt ?></span><br>
        <span>Môn học: 
            <?php
                if(count($monhoc) > 0)
                    foreach($monhoc as $mh)
                        echo $mh.", ";
                else
                    echo "<i>(Chưa nhập)</i>";
            ?>
        </span><br>
        <span>Ghi chú: <?php echo $ghichu ?></span>
    </div>
    <p>
        <a href="javascript:window.history.back(-1);"><i>Trở về trang trước</i></a>
        <!-- <a href="nhapThongtin.php">Trở về trang trước</a> -->
    </p>
</body>
</html>