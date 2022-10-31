<?php
include "koneksi.php";
if ($_POST) {

	$nama_jenis = $_POST['nama_jenis'];
	$harga = $_POST['harga2'];
	$foto = $_POST['foto'];

	$ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'JPG');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if (empty($nama_jenis)) {
		echo "<script>alert('nama jenis tidak boleh kosong');location.href='tambah_jenis.php';</script>";
	} elseif (empty($harga)) {
		echo "<script>alert('harga tidak boleh kosong');location.href='tambah_jenis.php';</script>";
	} elseif (empty($filename)) {
		echo "<script>alert('foto tidak boleh kosong');location.href='tambah_jenis.php';</script>";
	} else {
		if (!in_array($ext, $ekstensi)) {
			header("location:tambah_jenis.php?alert=gagal_ekstensi");
		} else {
			if ($ukuran < 1044070) {
				$xx = $filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . '' . $filename);
				$insert = mysqli_query($conn, "insert into jenis (nama_jenis, harga2, foto) value ('" . $nama_jenis . "','" . $harga . "','" . $xx. "')") or die(mysqli_error($conn));
				if ($insert) {
				echo "<script>alert('Sukses menambahkan jenis');location.href='jenis.php';</script>";
			} else {
				echo "<script>alert('File melebihi kapasitas yang ditentukan');location.href='tambah_jenis.php';</script>";
			}
		}
		
       
        
	}
}
}