<?php session_start();?>

<?php
include('koneksi.php');
include "koneksi.php"; 
if(isset($_GET['page'])){
    @$aksi = $_GET['aksi'];
    switch ($aksi){
        //Menampilkan data kelola
        default:
$query = mysqli_query($db_koneksi,"SELECT * FROM tbl_like");
?>
<!-- <div><a href="?page=postingan&aksi=tambah" ><img src="img/logocreate.png" alt="create" style="height:90px; width:90px; margin:30px; margin-top:440px; margin-left:1230px; position:fixed; border-radius:50%;">  
        </a></div> -->
<div style="padding-top:30px; background-color:#EFAA52;">

<div style="margin:20px; background-color:white; padding:30px;">   
<h1 style="color: #48120E ;"><u> Manage Data Like </u></h1>
        <table border="3px" align="center" style="border-color:blue; border-collapse:collapse; margin-top:20px;">
            <tr style="background-color:yellow;">
                <th style="padding:10px;" width="50px">No</th>
                <th style="padding:10px;">ID like</th>
                <th style="padding:10px;" width="500px">Username</th>
                <th style="padding:10px;">ID Post</th>
                <th style="padding:10px;">Action</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td style="padding:10px; background-color:F8F3E6;" width="10px"><?php echo $no++; ?></td>
                    <td style="padding:10px; background-color:c7a59b ;"><?php echo $row['id_like']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;"><?php echo $row['username']; ?></td>
                    <td style="padding:10px; background-color:c7a59b ;" ><?php echo $row['id_gambar']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;">
                
                    <a href="?page=likes&aksi=delete&id_like=<?php echo $row['id_like']; ?>" onclick="return confirm('Apakah anda yakin menghapus data <?php echo $row['id_like']; ?>?')">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
    </table>
    
</div>
    <?php
        break; 
        // Delete data 
        case "delete":
            include "page_admin/delete_like.php";
            break;
        }
    }else{
            include "?page=likes";
        }
?>
        </table>
</div>