<?php


//* koneksi ke database
require 'functions.php';

//* cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //* apakah query insert data berhasil
    if (tambah($_POST) > 0) {
        echo "
        <script src='https://code.jquery.com/jquery-3.7.1.js' integrity='sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil ditambahkan!',
                    confirmButtonText: 'Tutup'
                }).then(function() {
                    window.location.href = 'index.php?status=berhasil';
                });
            });
            </script>
        ";
    } else {
        echo "
        <script src='https://code.jquery.com/jquery-3.7.1.js' integrity='sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Data gagal ditambahkan!',
                    confirmButtonText: 'Tutup'
                }).then(function() {
                    window.location.href = 'index.php?status=gagal';
                });
            });
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>

    <h1>tambah data mahasiswa</h1>

    <a href="index.php"><button>kembali</button></a>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">nim : </label>
                <input type="number" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">tambah data</button>
            </li>
    </form>
</body>
<script src="js/script.js"></script>

</html>