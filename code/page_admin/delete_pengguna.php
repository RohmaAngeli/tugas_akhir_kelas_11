<?php
if(isset($_GET['username']))
{
    include('koneksi.php');
    $username = $_GET['username'];
    $query = mysqli_query($db_koneksi,"DELETE FROM tbl_user WHERE username = '$username'");
}

header('location:?page=pengguna');
?>