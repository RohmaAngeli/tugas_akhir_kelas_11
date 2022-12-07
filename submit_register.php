<?php
$username=$_POST['username']; 
$password1= $_POST['pass1'];
$password2 = $_POST['pass2'];
$bio=$_POST['bio']; 


$level = "user"; //otomatis setiap register dianggap level user

// cek kesamaan password
if ($password1 == $password2){
    include "koneksi.php";
    
    // perlu dibuat sebarang pengacak 
    $pengacak = "p3ng4c4k";
    
    // mengenkripsi password dengan md5() dan pengacak 
    $passmd = md5 ($pengacak. md5 ($pass));
    
    // menyimpan username dan password terenkripsi ke database 
    $query = "INSERT INTO tbl_user VALUES ('$username', '$passmd', '$level', '$bio')";
    $hasil = mysqli_query($db_koneksi, $query);

    // menampilkan status pendaftaran
    if ($hasil) header('location: register_berhasil.php');
    else echo "Username sudah ada yang memiliki";
}
else echo "Password yang dimasukkan tidak sama";
?>