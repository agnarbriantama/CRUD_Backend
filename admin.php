<?php
  error_reporting(0);
  include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Home</title>
 

</head>

<body id="page-to">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark " >
            <a class="navbar-brand font-weight-bold text-white " href="page-top">Data Kuliner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link js-scroll-trigger text-white" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
    </div>
    </nav>

    <!-- about -->
    <section class="about">
        <h1 style="text-align: center;" class="text-white">Data Produk</h1>
  <br>
  <table border="1" style="margin: auto;" width="1000px" height="200px">
    <thead>
      <tr height="50px">
        <th width="10px">No.</th>
        <th width="100px">Nama Makanan</th>
        <th width="140px">Menu Makanan</th>
        <th width="120px">Alamat</th>
        <th width="100px">Foto</th>
        <th width="100px">Ubah</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=0;
      $result = mysqli_query($koneksi, "SELECT * FROM inputan ORDER BY nama_makanan ASC");
      while($row = mysqli_fetch_array($result)) {
          $no++
    ?>
    <H1>Data Makanan</H1>
      <tr align="center">
        <td><?php echo $no;?></td>  
        <td><?php echo $row['nama_makanan'];?></td>
        <td><?php echo nl2br($row['menu']);?></td>
        <td><?php echo $row['alamat'];?></td>
        <td>
            <center>
                <img src="image/<?php echo $row['foto']; ?>"
                border="0" width ="130px" height = "130px"/>
            </center>
        </td>
        <td>
        <a href="editdata.php?id=<?php echo $row['id_makanan'];?>" class="btn btn-warning">Edit data</a>
          <br><br>
          <a href="hapus.php?id=<?php echo $row['id_makanan'];?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
      </table>
    </section>
    <div>
        <br>
        <a href="inputmakanan.php" class="btn btn-success ">Tambah Data</a>
    </div>













<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>