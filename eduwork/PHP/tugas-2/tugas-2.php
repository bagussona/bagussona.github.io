<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $title = "Tugas 2";

        //Dik?
        $panjang = 10; $lebar = 5; $tinggi = 5; $alas = 10; $sisi = 10; $jari = 7; $phi = 3.14;

        //Dit? Luas..
        #1. Persegi
        $lp = $sisi * $sisi;
        #2. Persegi Panjang
        $lpp = $panjang * $lebar;
        #3. Segitiga
        $ls = $alas * $tinggi / 2;
        #4. Lingkaran
        $ll = $phi * $jari * $jari;
        #5. Jajar Genjang
        $ljg = $alas * $tinggi;

    ?>
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <a href="/eduwork/index.html">
        <div class="arrow-back">
            &#8592;
        </div>
    </a>
    <div class="container">
        <div class="wrapper">
            <div class="content-1">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Persegi </strong></span>
                </div>
                <div class="bungkusan" style="height: 25rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Diketahui &#8594;</strong></span><br>
                            <?php
                                echo "Sisi Persegi: $sisi <br>";
                            ?>
                        </div>
                        <div class="ditanyakan">
                            <span><strong>Ditanyakan &#8594;</strong></span><br>
                            Luas Persegi?
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil &#8594; <?php echo "$lp"; ?></strong></span>
                </div>
            </div>
            <div class="content-2">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Persegi Panjang </strong></span>
                </div>
                <div class="bungkusan" style="height: 25rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Diketahui &#8594;</strong></span><br>
                            <?php
                                echo "P Persegi Panjang: $panjang <br>";
                                echo "L Persegi Panjang: $lebar <br>";
                            ?>
                        </div>
                        <div class="ditanyakan">
                            <span><strong>Ditanyakan &#8594;</strong></span><br>
                            Luas Persegi Panjang?
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil &#8594; <?php echo "$lp"; ?></strong></span>
                </div>
            </div>
            <div class="content-3">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Segitiga </strong></span>
                </div>
                <div class="bungkusan" style="height: 25rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Diketahui &#8594;</strong></span><br>
                            <?php
                                echo "A Segitiga: $alas <br>";
                                echo "T Segitiga: $tinggi <br>";
                            ?>
                        </div>
                        <div class="ditanyakan">
                            <span><strong>Ditanyakan &#8594;</strong></span><br>
                            Luas Segitiga?
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil &#8594; <?php echo "$ls"; ?></strong></span>
                </div>
            </div>
            <div class="content-4">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Lingkaran </strong></span>
                </div>
                <div class="bungkusan" style="height: 25rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Diketahui &#8594;</strong></span><br>
                            <?php
                                echo "Phi: $phi <br>";
                                echo "r Lingkaran: $jari <br>";
                            ?>
                        </div>
                        <div class="ditanyakan">
                            <span><strong>Ditanyakan &#8594;</strong></span><br>
                            Luas Lingkaran?
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil &#8594; <?php echo "$ll"; ?></strong></span>
                </div>
            </div>
            <div class="content-5">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Jajar Genjang </strong></span>
                </div>
                <div class="bungkusan" style="height: 25rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Diketahui &#8594;</strong></span><br>
                            <?php
                                echo "A Jajar Genjang: $alas <br>";
                                echo "T Jajar Genjang: $tinggi <br>";
                            ?>
                        </div>
                        <div class="ditanyakan">
                            <span><strong>Ditanyakan &#8594;</strong></span><br>
                            Luas Jajar Genjang?
                        </div>
                    </div>
                </div>
                <hr>
            <div class="jawab">
                <span><strong>Hasil &#8594; <?php echo "$ljg"; ?></strong></span>
            </div>
            </div>
        </div>
    </div>
</body>
</html>