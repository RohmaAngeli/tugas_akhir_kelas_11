<?php session_start();?>
<?php
if(isset($_GET['id_gambar']))
{
    include('koneksi.php');
    $id_gambar = $_GET['id_gambar'];
    $query = mysqli_query($db_koneksi,"delete from tbl_post where id_gambar='$id_gambar'");
}
header('location:?page=postingan');
?>