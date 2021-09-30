<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_GET['id']))
{
    $id_makanan = $_GET['id'];

    $file = mysqli_query($koneksi, "SELECT foto FROM inputan where id_makanan= '$id_makanan' ");
    $hasil = mysqli_fetch_array($file);
    $foto_lama=$hasil['foto'];
    unlink("image/".$foto_lama);

    $query ="DELETE from inputan where id_makanan='$id_makanan'";
    $result = mysqli_query($koneksi, $query);

    if (!$result)
    {
        die("Data gagal di tambahakan; ".mysqli_errno($koneksi). mysqli_error($koenksi));

    }
    else
    {
        echo "<script>
        alert('Data berhasil dihapus');window.location.href='admin.php'</script>";

    }
}
?>