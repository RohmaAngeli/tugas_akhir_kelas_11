<div style="width:800px; height:auto; background-color:#ffffff; margin:20 auto; padding:auto; border-redius:20px; border: 1px solid #000000; padding-bottom:20px;">
<?php 
// ob_start();
    include "koneksi.php";
    
    $id_autor = $_SESSION["username"];
    $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query); 
    $data=mysqli_fetch_array($hasil);
    ?>
    <h1 style="color:#AB3E16 ;"><br>Edit data profil pengguna</h1>
    
    <form action="" method="post">
        <div style="padding-left:20%;">
        <table border="0px" align="center">
            <tr>
                <td style=" padding:10px;">Username</td>
                <td style=" padding:10px;">:</td>
                <td style=" padding:10px;"><input style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" type="text" name="username" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td style=" padding:10px;">Deskripsi</td>
                <td style=" padding:10px;">:</td>
                <td style=" padding:10px;"><textarea name="bio" id="" cols="30" rows="5" style="background-color:#c7a59b; height:auto; border-radius:10px; padding-left:20px; font-size:16px; padding-top:10px; padding-bottom:10px;"><?php echo $data['bio']; ?></textarea>
            </tr>
        </table>
        </div>
        <input type="submit" value="SIMPAN PERUBAHAN" name="submit" style="width:82%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">
    </form>
</div>
<?php
//proses update

@$username=$_POST['username'];
@$bio=$_POST['bio'];
@$submit=$_POST['submit'];
if($submit) {
$query_update="UPDATE tbl_user SET bio='$bio' WHERE  username='$username'; ";
$hasil=mysqli_query($db_koneksi, $query_update) or die ("ERROR UPDATE DATA");
    if ($hasil) {
    //jika berhasil update kembali ke halaman profil 
    echo "<script> alert('data terupdate!');</script>";
    echo '<span style="color:blue"><a href="?page=profil"><b><u><i>Kembali ke halaman profil</i></u></b></a></span>';
    }
}
// ob_end_flush();
?> 
