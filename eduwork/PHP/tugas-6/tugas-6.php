<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    $title = "Tugas 6";

    $arr = ['buku1', 'buku2', 'buku3', 'buku4'];

    if (isset($_GET['foreach'])) {
        foreach ($arr as $a) {
            echo "Ini looping menggunakan foreach, data : $a <br>";
        }
    }

    if (isset($_GET['for'])) {
        for ($i=0; $i < count($arr); $i++) { 
            echo "Ini looping menggunakan for, data : $arr[$i] <br>";
        }
    }

    if (isset($_GET['while'])) {
        $a = 0;
        while ($a < count($arr)) {
            echo "Ini looping menggunakan while, data : $arr[$a] <br>";
            $a++;
        }
    }

    if (isset($_GET['dowhile'])) {
        $a = 0;
        do {
            echo "Ini looping menggunakan dowhile, data : $arr[$a] <br>";
            $a++;
        } while ($a < count($arr));
    }

    ?>
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<div class="hal-utama posisi ketinggian">
        <div class="konten">
            <div class="judul m-b-md" style="position: relative;">
                Array [<?php echo "$arr[0], $arr[1], $arr[2], $arr[3]"; ?>]
            </div>   
            <div class="daftar-tugas" style="display: flex; flex-direction: row;">
                <form action="" method="get">
                    <input style="width: 100px; height: 40px;" type="submit" name="for" value="for">
                </form>
                <form action="" method="get">
                    <input style="width: 100px; height: 40px;" type="submit" name="foreach" value="foreach">
                </form>
                <form action="" method="get">
                    <input style="width: 100px; height: 40px;" type="submit" name="while" value="while">
                </form>
                <form action="" method="get">
                    <input style="width: 100px; height: 40px;" type="submit" name="dowhile" value="dowhile">
                </form>
            </div>
        </div>
    <a href="/eduwork/index.html">
        <div class="arrow-back">
            &#8592;
        </div>
    </a>
</body>
</html>