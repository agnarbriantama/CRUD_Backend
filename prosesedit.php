<?php 
error_reporting(0);
require 'koneksi.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $menu = $_POST['menu'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" . $foto;

    if (empty($foto)) {

        $query = "UPDATE inputan SET nama_makanan = '$nama_makanan',menu = '$menu',alamat = '$alamat' where id_makanan = '$id' ";

        
    }
    else {
        
        $file = mysqli_query($koneksi, "SELECT foto FROM inputan WHERE id = '$id'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("image/" . $foto_lama);
        

        

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE inputan SET nama_makanan = '$nama_makanan',menu = '$menu',alamat = '$alamat', foto = '$foto' where id_makanan = '$id_makanan' ";
            
            
        }

    }
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Data gagal di ubah; ". mysqli_errno($koneksi).mysqli_error($koneksi));
        
    }
    else {
        
        echo "<script>alert('Data Berhasil Diubah'); window.location.href='admin.php' </script>";
    }
}
 ?>