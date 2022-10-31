<?php
if ($_POST) {
    $id_jenis = $_POST['id_jenis'];
    $nama_jenis = $_POST['nama_jenis'];
    $harga = $_POST['harga2'];
    $foto = $_POST['foto'];

    $ekstensi = array('png', 'jpg', 'jpeg');
    $namafile = $_FILES['file']['name'];


    if (empty($nama_jenis)) {
        echo "<script>alert('nama jenis tidak boleh kosong');location.href='ubah_jenis.php?id_jenis=" . $id_jenis . "';
        </script>";
    } elseif (empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='ubah_jenis.php?id_jenis=" . $id_jenis . "';
        </script>";
    }else {
        include "koneksi.php";
    
            $update = mysqli_query($conn, "update jenis set nama_jenis='" . $nama_jenis . "', harga2='" . $harga . "', foto = '".$namafile."' where id_jenis = '" . $id_jenis . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update jenis');location.href='jenis.php?id_jenis=" . $id_jenis . "';
                </script>";
            } else {
                echo "<script>alert('Gagal update jenis');location.href='ubah_jenis.php?id_jenis=" . $id_jenis . "';
                </script>";
            }
        }
    }

