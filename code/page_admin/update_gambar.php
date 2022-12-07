<div class="halaman" style="padding-top:80px; justify-content:center; ">
<?php 
    include "koneksi.php";
    $id=$_GET['id_gambar'];
    $query="SELECT * FROM tbl_post WHERE id_gambar='$id';";
    $hasil=mysqli_query($db_koneksi, $query);
    $data=mysqli_fetch_array($hasil);
    ?>


    
<div style="width:800px; height:auto; background-color:#ffffff; padding:auto; margin:20 auto; border-redius:20px; border: 1px solid #000000; padding-bottom:20px; border-radius:20px; ">
    <div style="width:800px; height:auto; background-color:#48120E  ; margin:auto; padding-top:15px; padding-bottom:15px; color:white; border-top-left-radius: 20px; border-top-right-radius: 20px;"><h3>Mau Kirim Catatan Apa?</h3></div>
    <div style="margin-left:15%; padding-top:4%;">
    <form method="POST" action="" enctype='multipart/form-data'>
    <table border="0" align="center">
        <tr><input type="hidden" name="id_gambar" value="<?php echo $data['id_gambar']?>"></tr>
        <tr><input type="hidden" name="username" value="<?php echo $_SESSION['username']?>"></tr>
        <tr>
            <td style=" padding:10px;">Judul</td>
            <td style=" padding:10px;">:</td>
            <td style=" padding:10px;"><input type="text" name="judul" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" value="<?php echo $data['judul_post']?>"></td> 
        </tr>
        <tr>
            <td style=" padding:10px;">Deskripsi </td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><textarea name="deskripsi" style="background-color:#c7a59b; height:70px; border-radius:10px; padding-left:20px; font-size:16px; width:400px; height:150px;" ><?php echo $data['deskripsi_post']?></textarea></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Kategori kelas</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><select name="kelas" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;">
                <option value="7" <?php if ($data['kelas_post']=="7") {echo "selected";}?>>7</option>
                <option value="8" <?php if ($data['kelas_post']=="8") {echo "selected";}?>>8</option>
                <option value="9" <?php if ($data['kelas_post']=="9") {echo "selected";}?>>9</option>
                <option value="10" <?php if ($data['kelas_post']=="10") {echo "selected";}?>>10</option>
                <option value="11" <?php if ($data['kelas_post']=="11") {echo "selected";}?>>11</option>
                <option value="12" <?php if ($data['kelas_post']=="12") {echo "selected";}?>>12</option>
            </select></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Kategori mapel</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><select name="mapel" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;">
                <option value="Agama" <?php if ($data['mapel_post']=="Agama") {echo "selected";}?>>Agama</option>
                <option value="Bahasa Indonesia" <?php if ($data['mapel_post']=="Bahasa Indonesia") {echo "selected";}?>>Bahasa Indonesia</option>
                <option value="Bahasa Inggris" <?php if ($data['mapel_post']=="Bahasa Inggris") {echo "selected";}?>>Bahasa Inggris</option>
                <option value="Bahasa Jawa" <?php if ($data['mapel_post']=="Bahasa Jawa") {echo "selected";}?>>Bahasa Jawa</option>
                <option value="IPA" <?php if ($data['mapel_post']=="IPA") {echo "selected";}?>>IPA</option>
                <option value="IPS" <?php if ($data['mapel_post']=="IPS") {echo "selected";}?>>IPS</option>
                <option value="Matematika" <?php if ($data['mapel_post']=="Matematika") {echo "selected";}?>>Matematika</option>
                <option value="PJOK" <?php if ($data['mapel_post']=="PJOK") {echo "selected";}?>>PJOK</option>
                <option value="PPKN" <?php if ($data['mapel_post']=="PPKN7") {echo "selected";}?>>PPKN</option>
                <option value="Prakarya" <?php if ($data['mapel_post']=="Prakarya") {echo "selected";}?>>Prakarya</option>
                <option value="Seni Budaya" <?php if ($data['mapel_post']=="Seni Budaya") {echo "selected";}?>>Seni Budaya</option>
            </select></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Gambar Catatan</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><img src="image_view.php?id_gambar=<?php echo $data['id_gambar']; ?>" width="380px" border="1px solid #000000"></td>
        </tr>
        <tr style="">
            <td colspan="2" style=" padding:10px;"><input type="reset" name="reset" value="RESET" style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold; margin-top:20px;"></td>
            <td colspan="" style=" padding:10px;"><input type="submit" name="tombol" value="UBAH" style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold; margin-top:20px;"></td>
        <tr>
        
    </table>
</form>
</div>
</div>
</div>

<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    // if(!isset($_FILES['gambar']['tmp_name'])){
    //     echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    // }
    // else
    // {
        // $file_name = $_FILES['gambar']['name'];
        // $file_size = $_FILES['gambar']['size'];
        // $file_type = $_FILES['gambar']['type'];
        // // if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        // if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        // {
        //     $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            @$kelas_post = $_POST['kelas'];
            @$mapel_post = $_POST['mapel'];
            @$judul_post = $_POST['judul'];
            @$username = $_POST['username'];
            @$deskripsi_post = $_POST['deskripsi'];
            @$id_gambar = $_POST['id_gambar'];
            $query_update="UPDATE tbl_post SET username='$username',kelas_post='$kelas_post',mapel_post='$mapel_post',judul_post='$judul_post',deskripsi_post='$deskripsi_post' WHERE id_gambar='$id_gambar';";
            $hasil=mysqli_query($db_koneksi, $query_update) or die ("ERROR UPDATE DATA");
                if ($hasil) {
                //jika berhasil update kembali ke halaman [postingan] 
                // header('Location:index.php');
                echo "<script> alert('data terupdate!');</script>";
                echo '<span style="color:blue"><a href="?page=postingan"><b><u><i>Kembali ke halaman manage data postingan</i></u></b></a></span>';
                }
            // mysqli_query($db_koneksi,"UPDATE tbl_post SET username='$username',kelas_post='$kelas_post',mapel_post='$mapel_post',judul_post='$judul_post',deskripsi_post='$deskripsi_post' WHERE id_gambar='$id_gambar'");
            // // mysqli_query($db_koneksi,"UPDATE tbl_post SET (username='$username',gambar_post,nama_gambar,tipe_gambar,ukuran_gambar,kelas_post,mapel_post,judul_post,deskripsi_post)values('$username', '$image', '$file_name','$file_type','$file_size','$kelas_post','$mapel_post','$judul_post','$deskripsi_post') WHERE id_gambar='$id_gambar'");
            // $hasil=mysqli_query($db_koneksi, "") or die ("ERROR UPDATE DATA");
            // if ($hasil) {
            // //jika berhasil update kembali ke halaman kelola 
            // header('Location: ?page=postingan');
            // }
            // header('Location: index.php');
                else
                {
                    echo '<span style="color:red"><b><u><i>Gagal update data!</i></u></b></span>';
                }
            }
    // }
// }
?>