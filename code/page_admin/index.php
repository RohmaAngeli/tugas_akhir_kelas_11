<?php
include "koneksi.php";
if(isset($_GET['page'])){
    @$aksi = $_GET['aksi'];
    switch ($aksi){
        //Menampilkan data kelola
        default:
$query = mysqli_query($db_koneksi,"SELECT * FROM tbl_post");
?>
<div class="halaman" style="background-color:#EFAA52; padding-top:80px; padding-left:auto; ">   
<div><a href="?page=postingan&aksi=tambah" ><img src="img/logocreate.png" alt="create" style="height:90px; width:90px; margin-top:450px; margin-left:569px; position:fixed; border-radius:50%;">  
        </a></div>
<div style="padding-top:30px; background-color:#EFAA52;">

<div style="margin:20px; background-color:white; padding:30px;">   
<h1 style="color: #48120E ;"><u> Manage Data Postingan </u></h1>
        <table border="3px" align="center" style="border-color:blue; border-collapse:collapse; margin-top:20px;">
            <tr style="background-color:yellow;">
                <th style="padding:10px;">No</th>
                <th style="padding:10px;">Gambar</th>
                <th style="padding:10px;">Username</th>
                <th style="padding:10px;">Judul</th>
                <th style="padding:10px;">Deskripsi</th>
                <th style="padding:10px;">Kategori Kelas</th>
                <th style="padding:10px;">Kategori Mapel</th>
                <th style="padding:10px;">Action</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td style="padding:10px; background-color:c7a59b;" width="10px"><?php echo $no++; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;"><img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"/></td>
                    <td style="padding:10px; background-color:c7a59b ;"><?php echo $row['username']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;"><?php echo $row['judul_post']; ?></td>
                    <td style="padding:10px; background-color:c7a59b ;" width="450px"><?php echo $row['deskripsi_post']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;"><?php echo $row['kelas_post']; ?></td>
                    <td style="padding:10px; background-color:c7a59b ;"><?php echo $row['mapel_post']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;">
                    
                    <a href="?page=postingan&aksi=update&id_gambar=<?php echo $row['id_gambar']; ?>">Update</a>  
                    |
                    <a href="?page=postingan&aksi=delete&id_gambar=<?php echo $row['id_gambar']; ?>" onclick="return confirm('Apakah anda yakin menghapus data <?php echo $row['judul_post']; ?>?')">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
    </table>
    
</div>
    <?php
        break; 
        case "tambah":
            include "page_admin/form_upload.php";
            break; 
        // Update data
        case "update":
            include "page_admin/update_gambar.php";
            break;
        // Delete data 
        case "delete":
            include "page_admin/delete_gambar.php";
            break;
        }
    }else{
            include "?page=postingan";
        }
?>
        </table>

        </div>