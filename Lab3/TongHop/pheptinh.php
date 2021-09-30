<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính trên 2 số</title>
    <link rel="stylesheet" href="./css/bai3.css">
    <script src="./js/bai3.js"></script>
</head>

<body>
    <div id="content">
        <div id="title">PHÉP TÍNH TRÊN HAI SỐ</div>
        <div id="form">
            <form action="ketquapheptinh.php" method="POST" onsubmit="return validateForm()" name="myForm">
                <table>
                    <tr id="pheptinh">
                        <td>Chọn phép tính:</td>
                        <td>
                            <input type="radio" name="pheptinh" value="+"> Cộng
                            <input type="radio" name="pheptinh" value="-"> Trừ
                            <input type="radio" name="pheptinh" value="*"> Nhân
                            <input type="radio" name="pheptinh" value="/"> Chia
                        </td>
                    </tr>
                    <tr>
                        <td class="number">Số thứ nhất:</td>
                        <td>
                            <input type="text" name="so1">
                        </td>
                    </tr>
                    <tr>
                        <td class="number">Số thứ hai:</td>
                        <td>
                            <input type="text" name="so2">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Tính">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="error">
        </div>
    </div>
</body>

</html>