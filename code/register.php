<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
        }
        body{
        /* background: #EFAA52; */
        background-image:url("img/background_login.jpg");
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 2px;
        }
        ::selection{
        background: rgba(26,188,156,0.3);
        }
        .container{
        max-width: 440px;
        /* padding: 0 20px; */
        margin: 100px auto;
        box-shadow: 0 0 10px 5px #ffffff ;
        }
        .wrapper{
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
        }
        .wrapper .title{
        height: 90px;
        background: #48120E;
        border-radius: 5px 5px 0 0;
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .wrapper form{
        padding: 30px 25px 25px 25px;
        }
        .wrapper form .row{
        height: 45px;
        margin-bottom: 15px;
        position: relative;
        }
        .wrapper form .row input{
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 16px;
        transition: all 0.3s ease;
        }
        form .row input:focus{
        border-color: #16a085;
        box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
        }
        form .row input::placeholder{
        color: #999;
        }
        .wrapper form .row i{
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: #AB3E16;
        border: 1px solid #16a085;
        border-radius: 5px 0 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        /* .wrapper form .pass{
        margin: -8px 0 20px 0;
        }
        .wrapper form .pass a{
        color: #16a085;
        font-size: 17px;
        text-decoration: none;
        }
        .wrapper form .pass a:hover{
        text-decoration: underline;
        } */
        .wrapper form .button input{
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #48120E;
        border: 1px solid #16a085;
        cursor: pointer;
        }
        form .button input:hover{
        background: #AB3E16;
        }
        .wrapper form .signup-link{
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
        }
        .wrapper form .signup-link a{
        color: #AB3E16;
        text-decoration: none;
        }
        form .signup-link a:hover{
        text-decoration: underline;
        }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Silahkan Mendaftar</span></div>
        <form method="post" action="submit_register.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Masukkan nama pengguna" name="username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass1" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Ulangi Password" name="pass2" required>
          </div>
          <input type="hidden" name="bio" value="Data Ini Kosong!">
          <div class="row button">
            <input type="submit" value="Daftar" name="submit">
          </div>
          <div class="signup-link">Sudah punya akun? <a href="login.php">Masuk sekarang</a></div>
        </form>
      </div>
    </div>

  </body>
</html>

<!-- 
#F8F3E6 abuabu
#E7CC8F crem
#EFAA52 coklat muda
#AB3E16 coklat
#48120E coklat pekat -->

<!-- <form method="post" action="submit_register.php">
    <table border="0">
        <tr>
            <td>Masukkan Username </td>
            <td><input name="username" type="text"></td>
        </tr>
        <tr>
            <td>Masukkan Password </td>
            <td><input name="pass1" type="password"></td>
        </tr>
        <tr>
            <td>Ulangi Password </td>
            <td><input name="pass2" type="password"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    </table>
</form> -->
