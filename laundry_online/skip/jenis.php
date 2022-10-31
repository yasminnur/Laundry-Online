<?php
include "header.php";
include "koneksi.php";
$qry_detail_jenis = mysqli_query($conn, "select * from jenis");
$dt_jenis = mysqli_fetch_array($qry_detail_jenis);
?>
<h2>Pilih Jenis</h2>
<div class="row">
<div class="card">
    <div class="col-md-4">
        <img src="gambar/<?= $dt_jenis['foto'] ?>" class="card-img-top" width="200px" height="350px">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_jenis=<?= $dt_jenis['id_jenis'] ?>" method="post">

          
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td><?= $dt_jenis['nama_jenis'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?= $dt_jenis['harga2'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td><input type="number" name="jumlah_beli2" value="1"></td>
                    </tr>
                    <tr>

                        <td colspan="2"><input class="btn btn-success" type="submit" value="Beli"></td>
                    </tr>
                </thead>
                


        </form>
    </div>
</div>
</div>
<?php
include "footer.php";
?>