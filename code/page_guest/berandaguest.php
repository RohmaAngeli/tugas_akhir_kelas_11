<?php
    include('koneksi.php');
    if(isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            default:
    $query = mysqli_query($db_koneksi,"SELECT * FROM tbl_post");
    ?>
<div class="halaman" style="background-color:#EFAA52;padding-top:130px; padding-left:60px; padding-bottom:60px; ">   
        <div style="display: flex; flex-flow: wrap; padding-left:7.5%; padding-right:7.5%;">
            <?php 
            while($row = mysqli_fetch_array($query))
            {
            ?>
                <a href="?page=home&aksi=view&id=<?php echo $row['id_gambar']; ?>"><div style="background-color:#48120E ; height:280px; width:180px; padding-top:15px; border-radius: 10px; cursor: pointer; transition: .3s; margin:15px;" onMouseOver="this.style.backgroundColor='#828079'" onMouseOut="this.style.backgroundColor='#48120E'">
                    <div>
                        <img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" height="220px" width="160px" margin="auto" onMouseOver="this.style.opacity='90%'" onMouseOut="this.style.opacity='100%'"></div>
                    <font color="white" size="3"><div align="center" style="padding-top:8px; padding-left:9px; padding-right:8px; text-color:white; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;"><b><?php echo $row['judul_post']; ?></b></div></font>
                </a>
                <div style="background-color:white; border-radius:10px; margin-bottom:10px; border:2px solid #000000;"><a href="?page=home&aksi=like&id=<?php echo $row['id_gambar']; ?>"><img src="https://w7.pngwing.com/pngs/886/3/png-transparent-white-and-blue-like-icon-facebook-like-button-computer-icons-thumb-signal-thumbs-up-blue-text-hand.png" alt="" height="20px" width="20px">like</a></div>
                </div>
            <?php
            }
            ?>
            <?php
    break;
    case "view":
        include "page_guest/view_post.php";
        break;
    case "like":
        include "page_user/like.php";
        break;
    }
}else{
        include "page_guest/berandaguest.php";
    }
    ?>
            </div>
        </div>
    <script src="main.js"></script>
</div>