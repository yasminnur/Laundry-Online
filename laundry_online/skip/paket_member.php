<?php
include "header.php";
?>
<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h2>Daftar paket</h2>
    </div>
  </div>
  <div class="row">
    <?php
    include "toko_online1.php";
    $qry_paket = mysqli_query($conn, "select * from paket");
    while ($dt_paket = mysqli_fetch_array($qry_paket)) {
    ?>
      <div class="col-md-3">
        <div class="card">
          <img src="gambar/<?= $dt_paket['foto'] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $dt_paket['nama_paket'] ?></h5>
            <h5 class="card-title"><?= $dt_paket['harga'] ?></h5>
            <a href="pilih_paket.php?id_paket=<?= $dt_paket['id_paket'] ?>" class="btn btn-primary">Pilih</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <?php
  include "footer.php";
  ?>