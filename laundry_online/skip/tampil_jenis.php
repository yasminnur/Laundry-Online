<?php
include "header.php";
?>
<h2>Daftar jenis</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_jenis = mysqli_query($conn, "select * from jenis");
    while ($dt_jenis = mysqli_fetch_array($qry_jenis)) {
    ?>
        <div class="col-md-3">
            <div class="card">
                <img src="gambar/<?= $dt_jenis['foto'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $dt_jenis['nama_jenis'] ?></h5>
                    <p class="card-text"><?= $dt_jenis['harga'] ?></p>
                  <td><a href="ubah_jenis.php?id_jenis=<?//= $dt_jenis['id_jenis'] ?>" class="btn btn-success">Ubah</a>
                        <a href="hapus_jenis.php?id_jenis=<?//= $dt_jenis['id_jenis'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td> 
                    
                     <td><a href="pilih_jenis.php" class="btn btn-success">Pilih</a> 
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<a href="tambah_jenis.php?id_jenis" class="btn btn-primary">Tambah jenis</a>
<?php
include "footer.php";
?>