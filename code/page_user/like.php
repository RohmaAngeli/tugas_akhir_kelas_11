<?php
session_start();
include "cek.php";
?>
<div class="halaman" style="padding-top:70px; padding-left:80px; ">   
<?php 
// ob_start();
    include "koneksi.php";
    $query="SELECT * FROM tbl_user";
    $hasil=mysqli_query($db_koneksi, $query);
    $data=mysqli_fetch_array($hasil);
    ?>
<form action="" method="post">
    <input style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
    
<?php
@$id=$_GET['id']; 
    $query_lihat="SELECT * FROM tbl_post WHERE id_gambar='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array($hasil);
?>
    <input style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="id_gambar" value="<?php echo $data['id_gambar']; ?>">

<div style="height:auto; width:500px; background-color:white; padding:20px; margin:20px auto; border:1px solid black;">
apakah anda ingin menambahkan catatan "<?php echo $data['judul_post']; ?>" ke daftar like anda?
</div>
    <input type="submit" value="SIMPAN DI HALAMAN FAVORIT" name="submit" style="width:50%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">
</form>

</div>
<?php
//proses update  
@$id_like = $_POST['id_like'];
@$username = $_POST['username'];
@$id_gambar=$_POST['id_gambar'];
@$submit=$_POST['submit'];
if($submit){
    $query_insert="INSERT INTO tbl_like VALUES ('', '$username', '$id_gambar');"; 
    $hasil=mysqli_query($db_koneksi, $query_insert) or die ("ERROR INSERT DATA");
        if ($hasil){
            //jika berhasil insert kembali ke halaman kelola
            header('Location:?page=favorit');
        }
    }
// ob_end_flush();
?>