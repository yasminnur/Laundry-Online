<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Jenis</title>
</head>

<body>
<div class="back">
        <a href="jenis.php" target="">
            <img src="gambar/left-arrow.png" width="15px">
        </a>
    </div>
    <h3>Tambah jenis</h3>
    <form action="proses_tambah_jenis.php" method="post" enctype="multipart/form-data">
        Nama jenis :
        <input type="text" name="nama_jenis" value="" class="form-control">
        Harga:
        <input type="number" name="harga2" value="" class="form-control">
        Foto jenis:
        <input type="file" name="foto" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah jenis" class="btn btn-primary">
    </form>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>