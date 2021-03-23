<!-- 
Nama : Nazhif Hafidz Fauzan
NRP : 203040018
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
$baju = [
    ["nama"     => "Baju Anak 01",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "1.jpg",
    "stok"      => "Tersedia"],

    ["nama"     => "Baju Anak 02",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "2.jpg",
    "stok"      => "Coming Soon"],

    ["nama"     => "Baju Anak 03",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "3.jpg",
    "stok"      => "Tersedia"],

    ["nama"     => "Baju Anak 04",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "4.jpg",
    "stok"      => "Coming Soon"],

    ["nama"     => "Baju Anak 05",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "5.jpg",
    "stok"      => "Tersedia"],

    ["nama"     => "Baju Anak 06",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "6.jpg",
    "stok"      => "Tersedia"],

    ["nama"     => "Baju Anak 07",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "7.jpg",
    "stok"      => "Coming Soon"],

    ["nama"     => "Baju Anak 08",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "8.jpg",
    "stok"      => "Tersedia"],

    ["nama"     => "Baju Anak 09",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "9.jpg",
    "stok"      => "Coming Soon"],

    ["nama"     => "Baju Anak 10",
    "bahan"     => "Katun",
    "harga"     => "Rp 85.000",
    "gambar"    => "10.jpg",
    "stok"      => "Coming Soon"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Latihan3e</title>
    <style>
    h1{
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 50px;
        font-family: 'Roboto', sans-serif;
    }
    table{
        text-align: center;
        font-family: arial;
        font-size: 15px;
        border-bottom: 2px solid #ebebeb;
    }

    img {
        width: 200px;
    }

    </style>
</head>
<body>

<h1 style="text-align: center">Toko Sumber Jaya Makmur</h1>

<div class="table-responsive">
        <table class="table">
            <tr class="table-active">
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Bahan</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ( $baju as $bj ) : ?>
                <tr>
                    <td class="table-active"><?= $i; ?></td>
                    <td><img src="img/<?= $bj["gambar"]; ?>" alt=""></td>
                    <td class="table-active"><?= $bj["nama"]; ?></td>
                    <td><?= $bj["bahan"]; ?></td>
                    <td class="table-active"><?= $bj["harga"]; ?></td>
                    <td><?= $bj["stok"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>