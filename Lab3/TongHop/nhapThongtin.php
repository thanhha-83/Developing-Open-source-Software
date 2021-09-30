<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận thông tin</title>
    <link rel="stylesheet" href="./css/bai4.css">
</head>

<body>
    <form action="xulyThongtin.php" method="post">
        <fieldset>
            <legend>Enter your information</legend>
            <table>
                <tr>
                    <td>Họ tên:</td>
                    <td>
                        <input type="text" name="hoten">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td>
                        <input type="tel" name="sdt" pattern="[0-9]{10}">
                    </td>
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>
                        <input type="radio" name="gt" value="1" checked> Nam
                        <input type="radio" name="gt" value="0"> Nữ
                    </td>
                </tr>
                <tr>
                    <td>Quốc tịch:</td>
                    <td>
                        <select name="qt">
                            <option value="Việt Nam">Việt Nam</option>
                            <option value="Hàn Quốc">Hàn Quốc</option>
                            <option value="Nhật Bản">Nhật Bản</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Các môn đã học:</td>
                    <td>
                        <input type="checkbox" name="monhoc[]" value="PHP & MySQL">PHP & MySQL
                        <input type="checkbox" name="monhoc[]" value="C#">C#
                        <input type="checkbox" name="monhoc[]" value="XML">XML
                        <input type="checkbox" name="monhoc[]" value="Python">Python
                    </td>
                </tr>
                <tr>
                    <td>Ghi chú:</td>
                    <td>
                        <textarea name="ghichu" cols="45" rows="4"></textarea>
                    </td>
                </tr>
                <tr id="btn">
                    <td colspan="2">
                        <input type="submit" value="Gửi">
                        <input type="reset" value="Hủy">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>