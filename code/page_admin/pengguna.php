<?php session_start();?>

<?php
include('koneksi.php');
include "koneksi.php"; 
if(isset($_GET['page'])){
    @$aksi = $_GET['aksi'];
    switch ($aksi){
        //Menampilkan data kelola
        default:
$query = mysqli_query($db_koneksi,"SELECT * FROM tbl_user");
?>
<!-- <div><a href="?page=pengguna&aksi=tambah" ><img src="img/logocreate.png" alt="create" style="height:90px; width:90px; margin:30px; margin-top:440px; margin-left:1230px; position:fixed; border-radius:50%;">  
        </a></div> -->
<div style="padding-top:30px; background-color:#EFAA52;">

<div style="margin:20px; background-color:white; padding:30px;">   
<h1 style="color: #48120E ;"><u> Manage Data Pengguna </u></h1>
        <table border="3px" align="center" style="border-color:blue; border-collapse:collapse; margin-top:20px;">
            <tr style="background-color:yellow;">
                <th style="padding:10px;">No</th>
                <th style="padding:10px;">Username</th>
                <th style="padding:10px;">Password</th>
                <th style="padding:10px;">Level</th>
                <th style="padding:10px;">Bio</th>
                <th style="padding:10px;">Action</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td style="padding:10px; background-color:F8F3E6;" width="10px"><?php echo $no++; ?></td>
                    <td style="padding:10px; background-color:c7a59b ;"><?php echo $row['username']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;"><?php echo $row['password']; ?></td>
                    <td style="padding:10px; background-color:c7a59b ;" ><?php echo $row['level']; ?></td>
                    <td style="padding:10px; background-color:F8F3E6 ;" width="450px"><?php echo $row['bio']; ?></td>
                    
                    <td style="padding:10px; background-color:F8F3E6 ;">
                
                    <a href="?page=pengguna&aksi=delete&username=<?php echo $row['username']; ?>" onclick="return confirm('Apakah anda yakin menghapus data <?php echo $row['username']; ?>?')">Hapus</a></td>
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
            include "page_admin/delete_pengguna.php";
            break;
        }
    }else{
            include "?page=pengguna";
        }
?>
        </table>
</div>