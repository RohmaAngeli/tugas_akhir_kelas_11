
<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        // if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $kelas_post = $_POST['kelas'];
            $mapel_post = $_POST['mapel'];
            $judul_post = $_POST['judul'];
            $username = $_POST['username'];
            
            $deskripsi_post = $_POST['deskripsi'];
            // $query_insert="INSERT INTO tbl_post VALUES ('', '$image','$file_name','$file_type','$file_size','$kelas_post','$mapel_post', '$judul_post','$deskripsi_post');"; 
            // $hasil=mysqli_query($db_koneksi, $query_insert) or die ("ERROR INSERT DATA");
            //     if ($hasil){
            //         //jika berhasil insert kembali ke halaman kelola
            //         header('Location:index.php');
            //     }
            // $stmt = mysqli_prepare($db_koneksi, "INSERT INTO tbl_post (gambar_post,nama_gambar,tipe_gambar,ukuran_gambar,kelas_post,mapel_post,judul_post,deskripsi_post)VALUES(?,?,?,?,?,?,?,?)");
            // mysqli_stmt_bind_param($stmt, $image, $file_name, $file_type, $file_size, $kelas_post, $mapel_post, $judul_post, $deskripsi_post);
            // mysqli_stmt_execute($stmt);
            mysqli_query($db_koneksi,"insert into tbl_post (username,gambar_post,nama_gambar,tipe_gambar,ukuran_gambar,kelas_post,mapel_post,judul_post,deskripsi_post)values('$username', '$image', '$file_name','$file_type','$file_size','$kelas_post','$mapel_post','$judul_post','$deskripsi_post')");
            header("location: ?page=home");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuran File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>

<div class="halaman" style="background-color:#EFAA52; padding-top:120px; padding-left:auto; ">   
    
<div style="width:800px; height:auto; background-color:#ffffff; padding:auto; margin:20 auto; border-redius:20px; border: 1px solid #000000; padding-bottom:20px; border-radius:20px; ">
    <div style="width:800px; height:auto; background-color:#48120E  ; margin:auto; padding-top:15px; padding-bottom:15px; color:white; border-top-left-radius: 20px; border-top-right-radius: 20px;"><h3>Mau Kirim Catatan Apa?</h3></div>
    <div style="margin-left:15%; padding-top:4%;">
    <form method="POST" action="" enctype='multipart/form-data'>
    <table border="0" align="center">
        <tr><input type="hidden" name="id_post"></tr>
        <tr><input type="hidden" name="username" value="<?php echo $_SESSION['username']?>"></tr>
        <tr>
            <td style=" padding:10px;">Judul</td>
            <td style=" padding:10px;">:</td>
            <td style=" padding:10px;"><input type="text" name="judul" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;" required></td> 
        </tr>
        <tr>
            <td style=" padding:10px;">Deskripsi </td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><textarea name="deskripsi" style="background-color:#c7a59b; height:70px; border-radius:10px; padding-left:20px; font-size:16px; width:400px; height:150px;" required></textarea></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Kategori kelas</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><select name="kelas" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;">
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Kategori mapel</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><select name="mapel" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;">
                <option value="Agama">Agama</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Bahasa Inggris">Bahasa Inggris</option>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="Matematika">Matematika</option>
                <option value="PJOK">PJOK</option>
                <option value="PPKN">PPKN</option>
                <option value="Prakarya">Prakarya</option>
                <option value="Seni Budaya">Seni Budaya</option>
            </select></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Masukkan gambar</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><input type="file" name="gambar" style="background-color:#c7a59b; height:40px; border-radius:10px; padding-left:20px; padding-top:7.5px; font-size:16px;" required></td>
        </tr>
        <tr style="">
            <td colspan="2" style=" padding:10px;"><input type="reset" name="reset" value="RESET" style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold; margin-top:20px;"></td>
            <td colspan="" style=" padding:10px;"><input type="submit" name="tombol" value="UNGGAH" style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold; margin-top:20px;"></td>
        <tr>
    </table>
</form>
</div>
</div>
</div>