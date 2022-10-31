<?php 
    if($_POST){
        $nama_member=$_POST['nama_member'];
        $telepon=$_POST['telepon'];
        if(empty($nama_member)){
            echo "<script>alert('nama_member tidak boleh kosong');location.href='login_member.php';</script>";
        } elseif(empty($telepon)){
            echo "<script>alert('telepon tidak boleh kosong');location.href='login_member.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from member where nama_member = '".$nama_member."' and telepon = '".$telepon."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_member']=$dt_login['id_member'];
                $_SESSION['nama_member']=$dt_login['nama_member'];
                $_SESSION['telepon']=$dt_login['telepon'];
                $_SESSION['status_login']=true;
                header("location: home_member.php");
            } else {
                echo "<script>alert('nama member dan telepon tidak benar');location.href='login_member.php';</script>";
            }
        }
    }
