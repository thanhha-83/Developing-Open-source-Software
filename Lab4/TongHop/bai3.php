<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3</title>
    <style>
        table {
            width: 50%;
            margin: 0 auto;
        }

        table,
        tr,
        td {
            border: 1px solid black;
            text-align: center;
        }

        h1,
        h3 {
            text-align: center;
        }

        #G8,
        #GDB {
            color: red;
        }

        #veCuaBan {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }

        #giai, #return {
            margin-top: 20px;
            text-align: center;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $veso = "";
        $giai8 = [(string) random_int(0, 9) . random_int(0, 9)];

        $giai7 = [(string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9)];

        $giai6 = [];
        for ($i = 0; $i < 3; $i++) {
            $giai6[$i] = (string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
            for ($j = 0; $j < $i; $j++) {
                if ($giai6[$i] == $giai6[$j]) {
                    $giai6[$i] = (string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
                    $j = 0;
                }
            }
        }

        $giai5 = [(string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9)];

        $giai4 = [];
        for ($i = 0; $i < 7; $i++) {
            $giai4[$i] = (string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
            for ($j = 0; $j < $i; $j++) {
                if ($giai4[$i] == $giai4[$j]) {
                    $giai4[$i] = (string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
                    $j = 0;
                }
            }
        }

        $giai3 = [];
        for ($i = 0; $i < 2; $i++) {
            $giai3[$i] = (string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
            for ($j = 0; $j < $i; $j++) {
                if ($giai3[$i] == $giai3[$j]) {
                    $giai3[$i] = (string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) .  random_int(0, 9);
                    $j = 0;
                }
            }
        }

        $giai2 = [(string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9)];

        $giai1 = [(string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9)];

        $giaiDB = [(string) random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9)];

        $kqxs = [
            "G8" => $giai8,
            "G7" => $giai7,
            "G6" => $giai6,
            "G5" => $giai5,
            "G4" => $giai4,
            "G3" => $giai3,
            "G2" => $giai2,
            "G1" => $giai1,
            "GDB" => $giaiDB,
        ];

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo "<h1>XSKH - Kết quả xổ số Khánh Hòa - SXKH</h1>";
        echo "<h3>(Ngày " . date("d-m-Y") . ")</h3>";
        echo "<table>";
        foreach ($kqxs as $key => $kq) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td id='$key'>";
            foreach ($kq as $key => $item) {
                echo $item . "&emsp;";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <div id="veCuaBan">
        <form action="" method="post">
            Nhập vé số: <input type="text" name="veso" value="<?php if (isset($_POST['veso'])) echo $_POST['veso']; else echo "";?>" pattern="[0-9]{6}">
            <input type="submit" value="Kiểm tra vé">
        </form>
    </div>
    <div id="giai">
        <?php
            function kiemtra($giai, $veCuaBan) {
                $count = strlen($giai[0]);
                $check = substr($veCuaBan, strlen($veCuaBan) - $count, $count);
                foreach ($giai as $g) {
                    if($g == $check) {
                        return true;
                    }
                }
                return false;
            }
            if(isset($_POST['veso']) && $_POST['veso'] != "") {
                $flag = false;
                foreach ($kqxs as $key => $kq) {
                    if(kiemtra($kq, $_POST['veso'])) {
                        echo "Bạn đã trúng giải " . $key . "<br>";
                        $flag = true;
                    }
                }
                if(!$flag) {
                    echo "<span style='color:red'>Bạn không trúng giải nào</span>";
                }
            }
        ?>
    </div>
</body>

</html>