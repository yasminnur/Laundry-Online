<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION['status_login'] == true) {
    header('location: home.php');
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>login</title>
    </head>

    <body>
        <div class="row" style="margin-top:50px;">
            <div class="col-md"></div>
            <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:10px">
                <form action="proses_login_member.php" method="post" enctype="multipart/form-data">
                    <h3 align="center">LOGIN Laundry Online</h3>
                    Nama Member:
                    <input type="text" name="nama_member" value="" class="form-control">

                    Telepon:
                    <input type="number" name="telepon" class="form-control">

                    <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"> </center>

                    <center>Tidak punya akun? <a href=tambah_user.php>buat disini</a></center>
                </form>
            </div>
            <div class="col-md"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
}
?>