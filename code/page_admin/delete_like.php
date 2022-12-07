<?php session_start();?>
<?php
if(isset($_GET['id_like']))
{
    include('koneksi.php');
    $id_like = $_GET['id_like'];
    $query = mysqli_query($db_koneksi,"delete from tbl_like where id_like='$id_like'");
}

header('location:?page=likes');
?>