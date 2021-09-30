<?php 
error_reporting(0);
require 'koneksi.php';
if (isset($_GET["id"])) {
    $id = ($_GET["id"]);

    $result = mysqli_query($koneksi, "SELECT * FROM inputan WHERE id_makanan = '$id'");
    while($row = mysqli_fetch_array($result)) {
        $nama_makanan= $row["nama_makanan"];
        $menu= $row["menu"];
        $alamat= $row["alamat"];
        $foto= $row["foto"];
        
        }

    }
    else {
    header("location: admin.php");
}
    
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Edit Data Makanan</title>

    <link href="css/style2.css" rel="stylesheet">
</head>

<body>
    <form action="prosesedit.php" method="POST" enctype="multipart/form-data">

        <div >
            <h2 class="text-center">Edit Data Makanan</h2>
        </div>

            <div class="mb-3">
                <label class="form-label">Nama Makanan</label>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" value="<?php echo $nama_makanan;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Masukkan Menu Makanan</label>
                <textarea type="text" class="form-control" name="menu" id="menu"  rows="3"><?php echo $menu; ?>;</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $alamat;?>" >
            </div>

            <div class="mb-3">
                  <label for="foto" class="form-label">Tambahkan Gambar</label>
                  <input class="form-control" type="file" name="foto" id="foto"><?php echo $foto; ?>
            </div>
            
            <div class="mb-3">
                <button class="btn btn-lg btn-primary btn-block" name="edit" type="submit">Edit data</button>
            </div>

            <p class="text-center">&copy; Info Madhang 2021 </p>

    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></scrip>


</body>

</html>