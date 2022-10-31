<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <div class="back">
        <a href="jenis.php" target="">
            <img src="gambar/left-arrow.png" width="15px">
        </a>
    </div>
    <?php
    include "koneksi.php";
    $qry_get_jenis = mysqli_query($conn, "select * from jenis where id_jenis = '" . $_GET['id_jenis'] . "'");
    $dt_jenis = mysqli_fetch_array($qry_get_jenis);
    ?>
    <h3>Ubah jenis</h3>
    <form action="proses_ubah_jenis.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_jenis" value="<?= $dt_jenis['id_jenis'] ?>">

        Nama jenis
        <input type="text" name="nama_jenis" value="<?= $dt_jenis['nama_jenis'] ?>" class="form-control">
        Harga
        <input type="text" name="harga2" value="<?= $dt_jenis['harga'] ?>" class="form-control">
        Foto
        <input type="file" name="file" value="<?= $dt_jenis['foto'] ?>" class="form-control">
       

        <input type="submit" name="simpan" value="Ubah jenis" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
</body>

</html>