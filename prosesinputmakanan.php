<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['upload'])) {

    $nama_makanan = $_POST['nama_makanan'];
    $menu = $_POST['menu'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" . $foto;
    
    if(move_uploaded_file($tmp, $path)) {

    
        $query = "INSERT INTO inputan (nama_makanan,menu,alamat,foto) VALUES('$nama_makanan', '$menu', '$alamat', '$foto') ";

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Gagal Input data " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else 
        {
            echo "<script>alert('Data berhasil ditambahkan');document.location.href= 'admin.php'</script> ";
        }
    }
}

?>