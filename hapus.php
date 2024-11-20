<?php


require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
    <script src='https://code.jquery.com/jquery-3.7.1.js' integrity='sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    $(document).ready(function(){
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data berhasil dihapus!',
            confirmButtonText: 'Tutup'
        }).then(function() {
            window.location.href = 'index.php';
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
            title: 'Gagal',
            text: 'Data gagal dihapus!',
            confirmButtonText: 'Tutup'
        }).then(function() {
            window.location.href = 'index.php';
        });
    });
    </script>
    ";
}

