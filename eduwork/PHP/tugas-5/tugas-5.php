<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $title = "Tugas 5";

        $tanggalDari = $_GET['tanggalDari'];
        $tanggalSampai = $_GET['tanggalSampai']; 

        list($tahun1, $bulan1, $tanggal1) = explode('-', $tanggalDari);
        list($tahun2, $bulan2, $tanggal2) = explode('-', $tanggalSampai);

        if (empty($tanggal1) && empty($tanggal2)) {
            echo "Input tanggal!";
        }elseif ($tanggal1 < $tanggal2) {
            echo "Looping dari $tanggal1 / $bulan1 / $tahun1 - $tanggal2 / $bulan2 / $tahun2 <br><br>";
            for ($i=$tanggal1; $i <= $tanggal2; $i++) { 
                echo "Data Tanggal : $i / $bulan1 / $tahun1 <br>";
            }
        }else {
            echo "Looping dari $tanggal1 / $bulan1 / $tahun1 - $tanggal2 / $bulan2 / $tahun2 <br><br>";
            for ($i=$tanggal1; $i >= $tanggal2; $i--) { 
                echo "Data Tanggal : $i / $bulan2 / $tahun2 <br>";
            }
        }
    ?>
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<div class="hal-utama posisi ketinggian">
        <div class="konten">
            <div class="judul m-b-md" style="position: relative;">
                Tanggal?
            </div>
            <div class="daftar-tugas">
            <form action="" method="get">
                <input type="date" name="tanggalDari" required id="tanggalDari">
                <input type="date" name="tanggalSampai" required id="tanggalSampai">
                <input type="submit" value="GET">
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