<?php session_start();?>

<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $query = mysqli_query($db_koneksi,"select * from tbl_post where id_gambar='".$_GET['id_gambar']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar_post"];
}
else
{
    header('location:index.php');
}
?>