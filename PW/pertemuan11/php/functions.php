<?php
function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw2021_203040052");
}
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya satu data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    // query insert data
    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$gambar', '$nrp', '$nama', '$email', '$jurusan')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $id = $data['id'];
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    // query update data
    $query ="UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
             WHERE id = $id";
                
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function cari($keyword) 
{
    $conn =  koneksi();

    $query = "SELECT * FROM mahasiswa 
                WHERE nama LIKE '%$keyword%'";
    
    $result =  mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}