<?php
if ($_POST) {
    $id_member = $_POST['id_member'];
    $id_user = $_POST['id_user'];
    $id_paket = $_POST['id_paket'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    if (empty($id_member)) {
        echo "<script>alert('id member tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif (empty($id_user)) {
        echo "<script>alert('id user tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif (empty($id_paket)) {
        echo "<script>alert('id paket tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif (empty($tgl_transaksi)) {
        echo "<script>alert('tanggal transaksi tidak boleh kosong');location.href='transaksi.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn,"insert into transaksi(id_member, tanggal, batas_waktu, status, dibayar, id_user) value('" . $_SESSION['id_member'] . "', '" . date('Y-m-d') . "','" . $batas_waktu . "','" . $status . "', '" . $dibayar . "','" . $_SESSION['id_user'] . "')");
         //insert into transaksi (id_member, id_user, id_paket, tanggal) value ('" . $id_member . "','" . $id_user . "','" . $id_paket . "','" . $tgl_transaksi . "')") or die(mysqli_error($conn)); //urutannya hrs sama kyk pas di atas (bagian POST2 an, kl nggak ntar error)
        if ($insert) {
            echo "<script>alert('Sukses melakukan transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan transaksi');location.href='transaksi.php';</script>";
        }
    }
}
if (isset($_POST['simpan'])) {
    echo '<table>';
    echo '<tr><td>' . 'Nama member : ' . '</td><td>' . $_POST['nama_member'] . '</td></tr>';
    echo '<tr><td>' . 'paket : ' . '</td><td>' . $_POST['nama_paket'] . '</td></tr>';
    echo '<tr><td>' . 'Harga : ' . '</td><td>' . $_POST['harga'] . '</td></tr>';
    echo '<tr><td>' . 'Nama user : ' . '</td><td>' . $_POST['nama_user'] . '</td></tr>';
    echo '</table>';
}
