<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prak4_pw_203040018");

    return $conn;
}

function query($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama_barang = htmlspecialchars($data['nama_barang']);
    $foto = htmlspecialchars($data['foto']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $stok_barang = htmlspecialchars($data['stok_barang']);

    $query = "INSERT INTO novel
                    VALUES
                    ('', '$nama_barang', '$foto', '$deskripsi', '$warna', '$harga', '$stok_barang')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) 
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM novel WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $foto = htmlspecialchars($data['foto']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $stok_barang = htmlspecialchars($data['stok_barang']);

    $query = "UPDATE novel 
                    SET 
                    nama_barang='$nama_barang',
                    foto='$foto',
                    deskripsi='$deskripsi',
                    warna='$warna' 
                    harga='$harga',
                    stok_barang='$stok_barang',
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>