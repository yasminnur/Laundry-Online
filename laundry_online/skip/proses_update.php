<?php
if($_POST){
    $status=$_POST['status'];
    $pembayaran=$_POST['dibayar'];
    $id_transaksi=$_POST['id_transaksi'];
    $tgl=date('Y-m-d');

    
    if(empty($status)){
        echo "<script>alert('status tidak boleh kosong');location.href='update.php';</script>";
    } elseif(empty($pembayaran)){
        echo "<script>alert('pembayaran tidak boleh kosong');location.href='update.php';</script>";
    } else {
        include "koneksi.php";
        if($pembayaran=="dibayar"){
            $update=mysqli_query($conn,"update transaksi set status='".$status."', dibayar='".$pembayaran."', tanggal_bayar='".$tgl."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($conn));
        }
        else{
            $update=mysqli_query($conn,"update transaksi set status='".$status."', dibayar='".$pembayaran."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($conn));
        }
            if($update){
                echo "<script>alert('Sukses update');location.href='histori.php';</script>";
            } else {
                echo "<script>alert('Gagal update');location.href='update.php?id_transaksi=".$id_transaksi."';</script>";
            }
        
        
    } 
}
?>