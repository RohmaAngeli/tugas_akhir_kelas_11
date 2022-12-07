<?php session_start();?>

<?php
if(isset($_GET['page'])){
    @$aksi = $_GET['aksi'];
    switch ($aksi){
        //Menampilkan data profil
        default:
        
include "koneksi.php";
// @$id=$_GET['id']; 
    // $query_lihat="SELECT * FROM tbl_like WHERE username='$id';"; 
    // $query_lihat="SELECT * FROM tbl_like join tbl_user on tbl_user.username = tbl_like.username join tbl_post on tbl_post.id_post = tbl_like.id_post WHERE id_like='$id';"; 
    $id_autor = $_SESSION["username"];
    $query_lihat="SELECT * FROM tbl_like WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query_lihat);
    ?>
<div class="halaman" style="background-color:#EFAA52; padding-top:30px;padding-left:auto; ">   

<div style="display: flex; flex-flow: wrap; padding-left:7.5%; padding-right:7.5%;">
<?php
// if ($_SESSION['username'] == $data['username'])
while($data=mysqli_fetch_array($hasil))
    { ?>
    
<a href="?page=favorit&aksi=view&id=<?php echo $data['id_gambar']; ?>"><div style="background-color:#48120E ; height:280px; width:180px; padding-top:15px; border-radius: 10px; cursor: pointer; transition: .3s; margin:10px;" onMouseOver="this.style.backgroundColor='#828079'" onMouseOut="this.style.backgroundColor='#48120E'">
    <div>
        <img src="image_view.php?id_gambar=<?php echo $data['id_gambar']; ?>" height="220px" width="160px" margin="auto" onMouseOver="this.style.opacity='90%'" onMouseOut="this.style.opacity='100%'"></div>

    <font size="3"><div align="center" style="padding-top:8px; padding-left:9px; padding-right:8px; text-color:white; text-overflow:ellipsis; overflow:hidden; white-space:nowrap; color:white;"></a>
    <div style="color:white;"><a href="?page=favorit&aksi=unlike&id=<?php echo $data['id_gambar']; ?>"><b>unlike this</b></a></div></font></a>
    </div></div>
    <?php
    }
    
break;
    case "view":
        include "page_user/view_post_favorit.php";
        break;
    case "unlike":
        include "page_user/unlike.php";
        break;
    }
}else{
        include "?page=favorit";
    }
    ?>

</div>
</div>
</div>