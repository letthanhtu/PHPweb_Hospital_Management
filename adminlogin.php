<?php
//import database
include("include/config.php");
session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

  // Set the new timezone
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $date = date('Y-m-d H:i:s');

  $_SESSION["date"]=$date;




if($_POST){

    $email=$_POST['useremail'];
    $password=$_POST['userpassword'];
    
    $error='<label for="promter" class="form-label"></label>';

    $result= $database->query("select * from webuser where email='$email'");
    if($result->num_rows==1){
        $utype=$result->fetch_assoc()['usertype'];
     
        if($utype=='a'){
     
            $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
            if ($checker->num_rows==1){

                $_SESSION['user']=$email;
                $_SESSION['usertype']='a';
                
                header('location: admin/index.php');
                exit();
            }else{
                $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
            }
        }
        
    }else{
        $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
    }
    
}else{
    $error='<label for="promter" class="form-label">&nbsp;</label>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Mr.K">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/animations.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/nav1.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/fav-icon.png">
  <!-- Manifest -->
  <link rel="apple-touch-icon" href="images/touch-icon.png" />
  <link rel="manifest" href="css/manifest.webmanifest" />
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
  <title>Admin Login</title>
  <script defer src="js/script.js"></script>


</head>

<body>

  <?php 
  include("include/header1.php");
  ?>
  <center>
    <div class="container">
      <div class="col-lg-6 col-md-5 d-flex login-box box-skew1">

        <table>
          <tr>
            <a class="login-logo" href="">
              <img src="images/logo.jpg" alt="" width="20px">
            </a>
            <td>
              <h3>Welcome!!!!</h3>
              <p class="">Đăng nhập bằng cách nhập thông tin bên dưới</p>
            </td>
          </tr>
          <div class="form-body">

            <tr>
              <form action="" method="POST">
                <td class="label">
                  <label for="useremail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
              <td class="label">
                <input type="email" name="useremail" class="form-control" placeholder="Email Address" required>
              </td>
            </tr>
            <tr>
              <td class="label">
                <label for="userpassword" class="form-label">Mật khẩu: </label>
              </td>
            </tr>



            <tr>
              <td class="label">
                <input type="Password" name="userpassword" class="form-control" placeholder="Password" required>
              </td>
            </tr>



            <tr>
              <td class="label">
                <input type="checkbox" class="form-check-input" id="basic_checkbox_1">

                <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>

              </td>
            </tr>
            <tr>
              <td><br>
                <?php echo $error ?>
              </td>
            </tr>

            <tr>
              <td>
                <input type="submit" value="Đăng nhập" class=" login-btn btn-primary btn">
              </td>
            </tr>
          </div>
          <tr>
            <td>
              <br>
              <label for="" class="sub-text" style="font-weight: 280;">Bạn khôg có tài khoản&#63; </label>
              <a href="signup.php" class="hover-link1 non-style-link">Đăng ký</a>
              <br><br><br>
            </td>
          </tr>

          </form>
        </table>

      </div>
      <div class="col-lg-6 col-md-5 d-flex back">
        <img src="images/background.png" alt="image">
      </div>
    </div>
  </center>
</body>

</html>