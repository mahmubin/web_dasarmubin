<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable dan function php</title>
</head>
<body>
    <?php 
    $nama_mahasiswa = "joni";
    $prodi = "sistem informasi";
    ?>

    <p>
        nama saya adalah <?= $nama_mahasiswa; ?> , saya adalah maahasiswa umsu
        prodi <?= $prodi; ?>
    </p>

    <?php 
    $a = 8;
    $b = 2;
    ?>

    <p>
        hasil penjumlahan dari <?= $a ?> dengan <?= $b ?> adalah <?= $a + $b ?>
</p>
<p>
        sedangkan perkalian dari <?= $a ?> dengan <?= $b ?> adalah <?= $a * $b ?>
</p>
<p> 
        sedangkan pembagian dari <?= $a ?> dengan <?= $b ?> adalah <?= $a / $b ?> 
</p>
<p>
        sedangkan pengurangan dari <?= $a ?> dengan <?= $b ?> adalah <?= $a - $b ?>
    </p>

    <?php
    echo perkalian (5,6);
    $nilai1 = 21;
    $nilai2 = 15;

    function perkalian ($nilai1 , $nilai2){
        return $nilai1 * $nilai2;
    }
    ?>
    <p>
        hasil perkalian dari <?= $nilai1?> dengan <?= $nilai2 ?> adalah <?= perkalian($nilai1,$nilai2) ?>
    </p>
</body>
</html>