<?php
session_start();
include "cek.php";
?>
<html lang="en">
<head>
    <!-- <style>
        div.halaman{ 
            text-align: center;  
            padding: 30px ;  
            margin-top: 10%; 
            background-color: #EFAA52 ;
            } 
    </style> -->
	<meta charset="UTF-8"></meta>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"></meta>
	<title>StudyNotes</title>
	<link href="css/header_style.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="style1.css">
  <!-- <link href="css/style.css" rel="stylesheet"></link> -->
	<link href="https://fonts.gstatic.com" rel="preconnect"></link>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet"></link>
    <style>

	.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    }
    .footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
    }
    .footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
    }
    .socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 1rem 0;
    }


    .footer-bottom{
        background: #000;
        width: 100vw;
        padding: 20px;
        padding-bottom: 40px;
        text-align: center;
    }
    .footer-bottom p{
    float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
    }
    .footer-bottom p a{
    color:#44bae8;
    font-size: 16px;
    text-decoration: none;
    }
    .footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
    }
	</style>
</head>
<body>
	<nav class="nav">
		<div class="nav-area">
			<a class="brand" href="">
				<!-- Text -->
				<span>StudyNotes</span>

				<!-- IMG -->
				<!-- <img src="" alt=""> -->
			</a>

			<svg class="nav-burger" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>

			<div class="nav-menu">
				<a href="user.php?page=home">Beranda</a>
				<a href="user.php?page=favorit">favorit</a>
				<a href="user.php?page=kirim_catatan">Kirim Catatan</a>
				<a href="user.php?page=profil">Profil</a>
			</div>
            
			<!-- Jika ingin 2 menu di navbar, beri komentar script html yang ini -->
			<div class="nav-menu-dekstop">
				<!-- <a href="#">Sign Up</a> -->
				<a href="user.php?page=profil"> Hallo!  <?php echo $_SESSION['username']?> </a>
			</div>
		</div>
    </nav>
    <div></div>
        <div class="badan">
            <?php
            //pemanggilan halaman dengan switch...case..
            if (isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                        include "page_guest/berandaguest.php";
                        break;
                    case 'favorit':
                        include "page_user/favorit.php";
                        break;
                    case 'kirim_catatan':
                        include "page_user/form_upload.php"; 
                        break;
                    case 'profil': 
                        include "page_user/profil.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                    }
            }
            else{
                include "page_guest/berandaguest1.php";
            }
        ?>
        </div>
        
        </div>
        <footer style="background-color:#111; padding:20px;">

		<div class="footer-content" style="">
		<h3 style="color:white;"><b> StudyNotes</b></h3>
		<p>Tempat belajar yang setia mendampingi rasa ambismu!</p>
		<ul class="socials"><img src="img/iconfooter.jpg" alt="" height="40" width="auto"></li>
 </ul>
 <div class="footer-bottom">
   <!-- add all information -->
</div>
<p>copyright &copy;2022 <a href="#">studynotes</a>  </p>
	</div>
	
</footer>
    </body>
</html>