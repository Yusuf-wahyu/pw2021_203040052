<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "mahasiswa");

    return $conn;
}

function query ($sql)
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

    
    $img = htmlspecialchars($data['img']);
    $Nama_barang = htmlspecialchars($data['Nama_barang']);
    $Kualitas= htmlspecialchars($data['Kualitas']);
    $Keterangan = htmlspecialchars($data['Keterangan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$img', '$Nama_barang', '$Kualitas', '$Keterangan', '$harga')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $img = htmlspecialchars($data['img']);
    $Nama_barang = htmlspecialchars($data['Nama_barang']);
    $Kualitas = htmlspecialchars($data['Kualitas']);
    $Keterangan = htmlspecialchars($data['Keterangan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE mahasiswa
            SET
            img = '$img',
            Nama_barang = '$Nama_barang',
            Kualitas = '$kualitas',
            Keterangan = '$Keterangan',
            harga = '$harga'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
            WHERE
            Nama_barang LIKE '%$keyword%' OR
            Kualitas LIKE '%$keyword%' OR
            Keterangan LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
    ";
    return query($query);
}