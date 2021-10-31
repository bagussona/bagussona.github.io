<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../style.css">
</head>
<body>

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
                <div class="bungkusan" style="height: 20rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Masukkan &#8594;</strong></span><br>
                            <form action="" method="post">
                                <input style="height: 40px; width: 16rem; margin: 10px 0;" type="number" placeholder="sisi" name="sisi" id="sisi">
                                <input  type="submit" style="position: absolute; left: -9999px"/>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil <br></strong></span>
                    <?php
                        function hitungLuasPersegi($sisi = 0){
                            $hasil = $sisi * $sisi;
                            echo "$hasil";
                        }
                        hitungLuasPersegi($_POST['sisi']);
                    ?>
                </div>
            </div>
            <div class="content-2">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Persegi Panjang </strong></span>
                </div>
                <div class="bungkusan" style="height: 20rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Masukkan &#8594;</strong></span><br>
                            <form action="" method="post">
                                <input style="height: 40px; width: 16rem; margin: 10px 0;" type="number" placeholder="panjang" name="panjang" id="panjang">
                                <input style="height: 40px; width: 16rem;" type="number" name="lebar" placeholder="lebar" id="lebar">
                                <input type="submit" style="position: absolute; left: -9999px"/>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil <br></strong></span>
                    <?php
                        function hitungLuasPersegiPanjang($p = 0, $l =0){
                            $hasil = $p * $l;
                            echo "$hasil";
                        }
                        hitungLuasPersegiPanjang($_POST['panjang'], $_POST['lebar']);
                    ?>
                </div>
            </div>
            <div class="content-3">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Segitiga </strong></span>
                </div>
                <div class="bungkusan" style="height: 20rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Masukkan &#8594;</strong></span><br>
                            <form action="" method="post">
                                <input style="height: 40px; width: 16rem; margin: 10px 0;" placeholder="alas" type="number" name="alas" id="alas">
                                <input style="height: 40px; width: 16rem;" type="number" placeholder="tinggi" name="tinggi" id="tinggi">
                                <input type="submit" style="position: absolute; left: -9999px"/>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil <br></strong></span>
                    <?php
                        function hitungLuasSegitiga($a = 0, $t =0){
                            $hasil = $a * $t / 2;
                            echo "$hasil";
                        }
                        hitungLuasSegitiga($_POST['alas'], $_POST['tinggi']);
                    ?>
                </div>
            </div>
            <div class="content-4">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Lingkaran </strong></span>
                </div>
                <div class="bungkusan" style="height: 20rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Masukkan &#8594;</strong></span><br>
                            <form action="" method="post">
                                <input style="height: 40px; width: 16rem; margin: 10px 0;" placeholder="phi" readonly value="3.14" name="phi" type="number" id="phi">
                                <input style="height: 40px; width: 16rem;" type="number" placeholder="jari-jari" name="r" id="r">
                                <input type="submit" style="position: absolute; left: -9999px"/>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil <br></strong></span>
                    <?php
                        function hitungLuasLingkaran($phi = 3.14, $r = 0){
                            $hasil = $phi * $r * $r;
                            echo "$hasil";
                        }
                        hitungLuasLingkaran($_POST['phi'], $_POST['r']);
                    ?>
                </div>
            </div>
            <div class="content-5">
                <div class="header_marhabba text-nowrap">
                    <span><strong>Luas &#8594; Jajar Genjang </strong></span>
                </div>
                <div class="bungkusan" style="height: 20rem;">
                    <div class="content-wrapper">
                        <div class="diketahui">
                            <span><strong>Masukkan &#8594;</strong></span><br>
                            <form action="" method="post">
                                <input style="height: 40px; width: 16rem; margin: 10px 0;" placeholder="alas" type="number" name="a" id="a">
                                <input style="height: 40px; width: 16rem;" type="number" placeholder="tinggi" name="t" id="t">
                                <input type="submit" style="position: absolute; left: -9999px"/>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="jawab">
                    <span><strong>Hasil <br></strong></span>
                    <?php
                        function hitungLuasJajaranGenjang($a = 0, $t =0){
                            $hasil = $a * $t;
                            echo "$hasil";
                        }
                        hitungLuasJajaranGenjang($_POST['a'], $_POST['t']);
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>