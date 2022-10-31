<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Transaksi</h3>
    <form action="proses_transaksi.php" method="post">
        member :
       <!-- <input type="text" name="member" value="" class="form-control">-->
        <select name="id_member" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_member = mysqli_query($conn, "select * from member");
            while ($dt_member = mysqli_fetch_array($qry_member)) {
                echo '<option value="' . $dt_member['id_member'] . '">' . $dt_member['nama_member'] . '</option>';
            }
            ?>
        </select>
        user :
        <select name="id_user" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_user = mysqli_query($conn, "select * from user");
            while ($dt_user = mysqli_fetch_array($qry_user)) {
                echo '<option value="' . $dt_user['id_user'] . '">' . $dt_user['nama'] . '</option>';
            }
            ?>
        </select>
    <!--  paket :
        <select name="id_paket" class="form-control">
            <option></option>
            <?php /*
            include "koneksi.php";
            $qry_paket = mysqli_query($conn, "select * from paket");
            while ($data_paket = mysqli_fetch_array($qry_paket)) {
                echo '<option value="' . $data_paket['id_paket'] . '">' . $data_paket['nama_paket'] . '</option>';
            } */
            ?>
            -->
        </select>
        Tanggal Transaksi :
        <input type="date" name="tgl_transaksi" value="" class="form-control">
        <!--button-->
        <a href="checkout.php" class="btn btn-success btn-xs " data-toggle="modal" data-target="#myModal"><i class="fas fa-search-plus"></i> Detail</a>
        <input type="submit" name="simpan" value="Tambah paket" class="btn btn-primary">
        <div class="modal fade" id="myModal" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <button type="button" class="btn btn-lg cl" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>