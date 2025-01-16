<!DOCTYPE html >
<html lang="em">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="widh=device=width, initial-scale-1.8">
    <title>document</title>
</head>
<body>
    <?php

    // tes
    // constanta
    define ("gajipokok" , 5000000);
    define ("bonus" , 5000000);
    define ("pajak" , 0.12);

    echo "Nama : MAYSHELLA INTAN FEBRIYANI  <br>";
    echo "Absen : 14 <br/>";
    echo "perhitungan gaji karyawan <br/>";


    $jumlahproyek = 3;
    $totalpendapatan = bonus * $jumlahproyek;
    $totalpendapatan = $totalpendapatan + gajipokok;
    $totalpendapatan = $totalpendapatan - ($totalpendapatan*pajak);


    echo "gaji yang anda dapat Rp" . number_format(gajipokok) . "<br>";
    echo "gaji yang anda dapat sepenuhnya adalah  Rp. " . numb` er_format($totalpendapatan);

    ?>

 </body>
 </html>





