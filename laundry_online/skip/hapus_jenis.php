<?php
if ($_GET['id_jenis']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "delete from jenis where id_jenis='" . $_GET['id_jenis'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus jenis');location.href='jenis.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus jenis');location.href='jenis.php';</script>";
    }
}
