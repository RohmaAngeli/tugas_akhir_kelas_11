<?php session_start();?>

<div class="halaman" style="background-color:#EFAA52; padding-top:50px; padding-left:auto; ">   
    <?php 
    include "koneksi.php";
    if(isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            //Menampilkan data profil
            default:
    // @$id=$_GET['id']; 
    $id_autor = $_SESSION["username"];
    $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query); 
    
    while($data=mysqli_fetch_array($hasil)){
        ?>

<div class="main" style="width:800px; height:350px; background-color:#ffffff; margin:0 auto; padding-top:40px; border-redius:20px; border: 1px solid #000000">
        <div class="img" style="background-image: url(data:image/png;base64,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);
    background-color: #eaeaea;
    background-size: cover;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    margin: 0 auto;
    border: 1px solid #eaeaea;" ></div>
        <h1 style="text-align: center; font-size: 30px; margin: 0; font-weight: bold; color: #48120E ;">Selamat datang!  <?php echo $_SESSION['username']?></h1>
        <div class="text">Selamat datang di StudyNotes nikmatilah fitur-fitur yang tersedia dan selamat belajar! <br> jadilah generasi penerus bangsa yang punya banyak pengetahuan.</div>
    </div>
        <div style="width:800px; height:auto; background-color:#ffffff; margin:20 auto; padding:auto; border-redius:20px; border: 1px solid #000000; padding-bottom:20px;">
            <div style="padding:auto; padding-top:20px; display: flex; flex-flow: wrap; width:100%;  justify-content:center; margin-bottom:30px;">
                <div style="height:15%; background-color:#c7a59b; margin-right: 50px; border-radius:10px; padding:10px;">
                <?php
                
                ?>
                    <h2 style="text-align: center; font-size: 20px; margin:0; font-weight: bold; color: #48120E;">Deskripsi:</h2>
                    <div style="width:330px; word-wrap: break-word;">
                        <?php echo $data['bio']?>
                    </div>
                </div>
                <div style="height:15%; background-color:#c7a59b; border-radius:10px; padding:10px;">
                    <h2 style="text-align: center; font-size: 20px; margin: auto; font-weight: bold; color: #48120E;">Username:</h2>
                    <div style="width:230px; word-wrap: break-word;">
                        <?php echo $_SESSION['username'];?>
                    </div>
                </div>
            </div>
            <a href="?page=profil&aksi=edit&id=<?php echo $data['username']; ?>"><button style="width:82%; background-color:#48120E ; border-radius:10px; padding:10px; margin:4px; font-size:20px; cursor: pointer;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">
                <b style="letter-spacing:5px; color:white;">EDIT PROFIL</b>
            </button></a>
            <a href="?page=profil&aksi=logout&id=<?php echo $data['username']; ?>"><button style="width:82%; background-color:#48120E ; border-radius:10px; padding:10px; margin: auto; font-size:20px; cursor: pointer;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">
                <b style="letter-spacing:5px; color:white;">LOGOUT</b>
            </button></a>
        </div>
        <div style="width:800px; height:120px; background-color:#ffffff; margin:20 auto; padding:auto; border-redius:20px; border: 1px solid #000000">
            <div class="text" style="padding-left:60px; padding-right:60px;">
            <br><b>“Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, kamu dapat mengubah dunia” <br> – Nelson Mandela <br></b>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    break;
    case "edit":
        include "page_user/form_editprofil.php";
        break;
    case "logout":
        include "logout.php";
        break;
    }
}else{
        include "page_user/profil.php";
    }
    ?>
    

</div>
    
</body>