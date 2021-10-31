<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    
    $judul = "File PHP Saya";
    $paragraf_satu = "Disini saya belajar pemanggilan variable";
    ?>

    <title><?php echo "$judul"; ?></title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="hal-utama posisi ketinggian">
        <div class="konten">
            <div class="judul m-b-md">
                <?php echo "$paragraf_satu"; ?>
        </div>
        <a href="/eduwork/index.html">
            <div class="arrow-back">
                &#8592;
            </div>
        </a>
    </div>
</div>
</body>
</html>