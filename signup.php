<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Mayuri K">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/animations.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/signup.css">

  <title>Sign Up</title>

</head>

<body>
  <?php

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d H:i:s');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );


    print_r($_SESSION["personal"]);
    header("location: apply.php");

}

?>


  <center>
    <div class="container">
      <table border="0">
        <tr>
          <td colspan="2">
            <p class="header-text">Hãy bắt đầu</p>
            <p class="sub-text">Thêm thông tin cá nhân của bạn để tiếp tục</p>
          </td>
        </tr>
        <tr>
          <form action="" method="POST">
            <td class="label-td" colspan="2">
              <label for="name" class="form-label">Name: </label>
            </td>
        </tr>
        <tr>
          <td class="label-td">
            <input type="text" name="fname" class="input-text" placeholder="First Name" required>
          </td>
          <td class="label-td">
            <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <label for="address" class="form-label">Address: </label>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <input type="text" name="address" class="input-text" placeholder="Address" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <label for="nic" class="form-label">NIC: </label>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <input type="text" name="nic" class="input-text" placeholder="NIC Number" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <label for="dob" class="form-label">Date of Birth: </label>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <input type="date" name="dob" class="input-text" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
          </td>
        </tr>

        <tr>
          <td>
            <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
          </td>
          <td>
            <input type="submit" value="Next" class="login-btn btn-primary btn">
          </td>

        </tr>
        <tr>
          <td colspan="2">
            <br>
            <label for="" class="sub-text" style="font-weight: 280;">Bạn đã có tài khoản&#63; </label>
            <a href="login.php" class="hover-link1 non-style-link">Đăng nhập</a>
            <br><br><br>
          </td>
        </tr>

        </form>
        </tr>
      </table>

    </div>
  </center>
</body>

</html>