   
    <?php
    include('koneksi.php');
    if(isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            //Menampilkan data profil
            default:
    $query = mysqli_query($db_koneksi,"SELECT * FROM tbl_post");
    ?>
<div class="halaman" style="background-color:#EFAA52;padding-top:130px; padding-left:80px; ">   
        <div style="display: flex; flex-flow: wrap; margin-left:auto;">
            <?php 
            //$no = 1;
            while($row = mysqli_fetch_assoc($query))
            {
            ?>
                <a href="?page=home&aksi=view&id=<?php echo $row['id_gambar']; ?>"><div style="background-color:#48120E ; height:280px; width:180px; padding-top:15px; border-radius: 10px; cursor: pointer; transition: .3s; padding:10px; margin:10px;" onMouseOver="this.style.backgroundColor='#828079'" onMouseOut="this.style.backgroundColor='#48120E'">
                    <div>
                        <img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" height="220px" width="160px" margin="auto" onMouseOver="this.style.opacity='90%'" onMouseOut="this.style.opacity='100%'"></div>
                    <font color="white" size="3"><div align="center" style="padding-top:8px; padding-left:9px; padding-right:8px; text-color:white; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;"><b><?php echo $row['judul_post']; ?></b></div></font>
                </a>
                </div>
            <?php
            }
            ?>
            <?php
    break;
    case "view":
        include "page_guest/view_post.php";
        break;
    }
}else{
        include "page_guest/berandaguest_nolikefitur.php";
    }
    ?>
            </div>
        </div>
    <script src="main.js"></script>
</div>