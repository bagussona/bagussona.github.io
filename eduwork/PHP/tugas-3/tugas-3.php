<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    $title = "Tugas-3 & 4";

    $dob = $_GET['dob'];
    
    $zodiac = '';
    list($tahun, $bulan, $tanggal) = explode('-', $dob);

    if (($bulan == 3 && $tanggal >= 21) || ($bulan == 4 && $tanggal <= 19)) {
        $zodiac = "Aries";
    }elseif (($bulan == 4 && $tanggal >= 20) || ($bulan == 5 && $tanggal <= 20)) {
        $zodiac = "Taurus";
    }elseif (($bulan == 5 && $tanggal >= 21) || ($bulan == 6 && $tanggal <= 20)) {
        $zodiac = "Gemini";
    }elseif (($bulan == 6 && $tanggal >= 21) || ($bulan == 7 && $tanggal <= 22)) {
        $zodiac = "Cancer";
    }elseif (($bulan == 7 && $tanggal >= 23) || ($bulan == 8 && $tanggal <= 22)) {
        $zodiac = "Leo";
    }elseif (($bulan == 8 && $tanggal >= 23) || ($bulan == 9 && $tanggal <= 22)) {
        $zodiac = "Virgo";
    }elseif (($bulan == 9 && $tanggal >= 23) || ($bulan == 10 && $tanggal <= 22)) {
        $zodiac = "Libra";
    }elseif (($bulan == 10 && $tanggal >= 23) || ($bulan == 11 && $tanggal <= 21)) {
        $zodiac = "Scorpio";
    }elseif (($bulan == 11 && $tanggal >= 22) || ($bulan == 12 && $tanggal <= 21)) {
        $zodiac = "Sagitarius";
    }elseif (($bulan == 12 && $tanggal >= 22) || ($bulan == 1 && $tanggal <= 19)) {
        $zodiac = "Capricorn";
    }elseif (($bulan == 1 && $tanggal >= 20) || ($bulan == 2 && $tanggal <= 18)) {
        $zodiac = "Aquarius";
    }elseif (($bulan == 2 && $tanggal >= 19) || ($bulan == 3 && $tanggal <= 20)) {
        $zodiac = "Pisces";
    }

    $shio = '';
    switch ($tahun) {
        case '1936':
        case '1948':
        case '1960':
        case '1972':
        case '1984':
        case '1996':
        case '2008':
        case '2020':
            $shio = "Tikus";
            break;
            case '1937':
            case '1949':
            case '1961':
            case '1973':
            case '1985':
            case '1997':
            case '2009':
            case '2021':
                $shio = "Kerbau";
                break;
                case '1938':
                case '1951':
                case '1963':
                case '1975':
                case '1987':
                case '1999':
                case '2011':
                case '2022':
                    $shio = "Kelinci";
                    break;
                case '1939':
                case '1950':
                case '1962':
                case '1974':
                case '1986':
                case '1998':
                case '2010':
                    $shio = "Kelinci";
                    break;
                    case '1940':
                    case '1952':
                    case '1964':
                    case '1976':
                    case '1988':
                    case '2000':
                    case '2012':
                        $shio = "Naga";
                        break;
                        case '1941':
                        case '1953':
                        case '1965':
                        case '1977':
                        case '1989':
                        case '2001':
                        case '2013':
                            $shio = "Ular";
                            break;
                            case '1942':
                            case '1954':
                            case '1966':
                            case '1978':
                            case '1990':
                            case '2002':
                            case '2014':
                                $shio = "Kuda";
                                break;
                                case '1943':
                                case '1955':
                                case '1967':
                                case '1979':
                                case '1991':
                                case '2003':
                                case '2015':
                            $shio = "Kambing";
                            break;
                            case '1944':
                            case '1956':
                            case '1968':
                            case '1980':
                            case '1992':
                            case '2004':
                            case '2016':
                                $shio = "Monyet";
                        break;
                        case '1945':
                        case '1957':
                        case '1969':
                        case '1981':
                        case '1993':
                        case '2005':
                        case '2017':
                            $shio = "Ayam";
                    break;
                    case '1946':
                    case '1958':
                    case '1970':
                    case '1982':
                    case '1994':
                    case '2006':
                    case '2018':
                        $shio = "Anjing";
                        break;
                case '1947':
                case '1959':
                case '1971':
                case '1983':
                case '1995':
                case '2007':
                case '2019':
                    $shio = "Babi";
                    break;
            default:
                $shio = "";
                break;
    }

    ?>
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="hal-utama posisi ketinggian">
        <div class="konten">
            <div class="judul m-b-md">
                Zodiac? <?php echo "<u>$zodiac</u> ";?> Shio? <?php echo "<u>$shio</u>"; ?>
            </div>
            <div class="daftar-tugas">
                <form action="" method="get">
                    <input type="date" name="dob" id="dob" style="height: 40px; width: 200px;">
                    <input type="submit" value="GET" style="height: 42px; width: 80px;">
                    
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