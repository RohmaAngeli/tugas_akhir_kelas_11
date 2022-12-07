<?php session_start();?>
<div class="halaman">
<!-- isi halaman Lihat Data -->
    <?php
    include "koneksi.php";
    //$id=$_GET['id_post']; 
    $query_lihat="SELECT * FROM tbl_post"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array ($hasil);
    $no=1;
    $no++
    ?>
    <h3>Lihat data</h3>

    <!DOCTYPE html>
    <html>
    <head>
    <style>
    div.gallery {
        border: 1px solid #ccc;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }

    @media only screen and (max-width: 700px){
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px){
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
    </style>
    </head>
    <body>

    <h2>Responsive Image Gallery</h2>
    <h4>Suckittrees.com</h4>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="">
        <!-- <img src='images/".$data['nama']."' width='100' height='100' -->
        <?php echo "<img src='image/$data[gambar]'  width='600' height='400' />";?>
        <!-- <img src="img_fjords.jpg"  width="600" height="400"> -->
        </a>
        <div class="desc"><?php echo $data['judul']?> </div>
    </div>
    </div>
<table>
    <tr>
        <td>judul</td>
        <td>deskripsi</td>
        <td>kelas</td>
        <td>mapel</td>
        <td>gambar</td>
    </tr>
    <tr>
        <td><?php echo $data['judul']?></td>
        <td><?php echo $data['deskripsi']?></td>
        <td><?php echo $data['kelas']?></td>
        <td><?php echo $data['mapel']?></td>
        <td><?php echo "<img src='images/$data[gambar]'  width='600' height='400' />";?></td>
    </tr>
</table>

    <!-- <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_forest.jpg">
        <img src="img_forest.jpg"  width="600" height="400">
        </a>
        <div class="desc">foto 2</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
        <img src="img_lights.jpg"  width="600" height="400">
        </a>
        <div class="desc">Foto 3</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
        <img src="img_mountains.jpg"  width="600" height="400">
        </a>
        <div class="desc">Foto 4</div>
    </div>
    </div> -->

    <!-- <div class="clearfix"></div>

    </body>
    </html>

    <table border="1" align="center">
        <tr>
            <td>Kategori : </td>
        </tr>
        <tr>
            <td>Judul : </td>
        </tr>
        <tr>
            <td>Isi : </td>
        </tr>
    </table>
    <a href="?page=kelola">Kembali Kelola</a>
</div> -->