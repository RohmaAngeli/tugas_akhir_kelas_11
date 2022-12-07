
<div class="halaman" style="padding-top:130px; padding-left:80px; ">   
<?php 
// ob_start();
    include "koneksi.php";
    $id_autor = $_SESSION["username"];
    $query="SELECT * FROM tbl_like WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query);
    $data=mysqli_fetch_array($hasil);
    ?>
<form action="" method="post">
<input style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="id_like" value="<?php echo $data['id_like'] ?>">
    <input style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="username" value="<?php echo $data['username'] ?>">
    
<?php
$id_autor = $_SESSION["username"];
$query="SELECT * FROM tbl_like WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query); 
    $data=mysqli_fetch_array($hasil);
?>
    <input style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="id_gambar" value="<?php echo $data['id_gambar']; ?>">

<div style="height:auto; width:500px; background-color:white; padding:20px; margin: 20px auto;">
apakah anda ingin menghapus catatan ini dari daftar like anda?
</div>
    <input type="submit" value="SIMPAN PERUBAHAN" name="submit" style="width:50%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">
</form>


<?php
//proses update  
// $id=$_GET['id_like']; 
@$id_like=$_POST['id_like'];
@$submit=$_POST['submit'];
if($submit){
    $query_delete="DELETE FROM tbl_like WHERE id_like = '$id_like'"; 
    $hasil=mysqli_query($db_koneksi, $query_delete);
        if ($hasil){
            //jika berhasil insert kembali ke halaman kelola
            // header('Location:?page=favorit');
            echo "<script> alert('data terhapus!');</script>";
                echo '<span style="color:blue"><a href="?page=favorit"><b><u><i>Kembali ke halaman favorit</i></u></b></a></span>';
        }
        else{
            echo "Gagal Hapus Data";
        }
    }
// ob_end_flush();

?> 
</div>