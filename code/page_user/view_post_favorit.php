
<?php
    include('koneksi.php');
    @$id=$_GET['id']; 
    $query_lihat="SELECT * FROM tbl_post WHERE id_gambar='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array($hasil);
    ?>
<div class="halaman" style="background-color:#EFAA52; padding-left:auto; ">   
<div style="background-color:white; margin:50px; border:2px solid black; border-radius:10px;">
<div align="left"><a href="?page=home"><img src="img/logoback (2).png" alt="" style="width:220px;height:75px; margin-left:20px;margin-top:20px; font-size:30px;"></a></div>
<table border="0" style="margin-top:10px;">
    <tr>
        <td rowspan="4"><div>
            <img src="image_view.php?id_gambar=<?php echo $data['id_gambar']; ?>"height="800" width="700px" margin="auto" alt="<?php echo $data['judul_post']; ?>"></div></td>
        <td align=left valign=top style="padding-right:20px;">Judul <div style="background-color:#c7a59b; height:auto; border-radius:10px; padding:10px; font-size:25px; word-wrap:break-word; color:#48120E;"><b><?php echo $data['judul_post']; ?></b></div></td>
    </tr>
    <tr>
        <td align=left valign=top style="padding-right:20px;">Kategori kelas <div style="background-color:#c7a59b; height:auto; padding-bottom:10px; width:55px;  border-radius:10px; padding-left:20px;padding-top:10px; font-size:20px; color:#48120E;"><b align="center"><?php echo $data['kelas_post']; ?></b></div></td>
    </tr>
    <tr>
        <td valign=top style="padding-right:20px;">Kategori mapel <div style="background-color:#c7a59b; height:auto; padding:10px; width:auto; margin:auto; border-radius:10px; font-size:20px; color:#48120E;"><b><?php echo $data['mapel_post']; ?></b></div></td>
    </tr>
    <tr>
        <td valign=top style="padding-right:20px;">Deskripsi <div style="background-color:#c7a59b; height:auto; padding-bottom:10px; border-radius:10px; padding-left:20px;padding-top:10px; font-size:20px; color:#48120E;"><b><?php echo $data['deskripsi_post']; ?></b></div></td>
    </tr>
</table>
</div>
</div>
</div>

