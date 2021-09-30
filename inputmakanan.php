<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Input Data</title>

    <link href="css/style2.css" rel="stylesheet">
</head>

<body>
    <form action="prosesinputmakanan.php" method="POST" enctype="multipart/form-data">
        <div >
            <h2 class="text-center">Input Data</h2>
        </div>

            <div class="mb-3">
                <label class="form-label">Nama Makanan</label>
                <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" >
            </div>

            <div class="mb-3">
                <label class="form-label">Masukkan Menu Makanan</label>
                <textarea type="text" class="form-control" name="menu" id="menu"  rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" >
            </div>

            <div class="mb-3">
                  <label for="foto" class="form-label">Tambahkan Foto</label>
                  <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <div class="mb-3">
                <button class="btn btn-lg btn-primary btn-block" name="upload" type="submit">Tambahkan</button>
            </div>

            <p class="text-center">&copy; Info Madhang 2021 </p>

    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></scrip>


</body>

</html>