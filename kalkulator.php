<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;
        }
    }
    ?>
    <div class="kalkulator">
    <h2 class="judul">Kalkulator</h2>
    <marquee direction="alternate" bgcolor="aqua">Welcome to use calculator</marquee>
    <form method="post" action="kalkulator.php">
    <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
    <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
    <select class="opt" name="operasi">
    <option value="tambah">tambah</option>
    <option value="kurang">kurang</option>
    <option value="kali">kali</option>
    <option value="bagi">bagi</option>
    <input type="submit" name="hitung" value="Hitung" class="tombol">
    </select>
    <?php if(isset($_POST['hitung'])) { ?>
    <input type="text" value="<?php echo number_format ($hasil); ?>" class="bil">
    <?php }else{ ?>
    <input type="text" value="" class="bil">
    <?php } ?>
    <button><a href="index.html">back to menu</a></button>
    </div> 
    <marquee direction="alternate" bgcolor="aqua">Aplikasi Kalkulator Sederhana By Jemi</marquee>
    </form> 
</body>
</html>