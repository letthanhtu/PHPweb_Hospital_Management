<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Mayuri K">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/animations.css">

  <link rel="icon" href="../images/fav-icon.png">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>Dashboard</title>



</head>
<style>
.dashbord-tables {
  animation: transitionIn-Y-over 0.5s;
}

.filter-container {
  animation: transitionIn-Y-bottom 0.5s;
}

.sub-table {
  animation: transitionIn-Y-bottom 0.5s;
}
</style>

<body>
  <?php
    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../adminlogin.php");
        }

    }else{
        header("location: ../adminlogin.php");
    }
    

    //import database
    include("../include/config.php");

    include("../include/header_layout.php");
    ?>


  <td colspan="4">

    <center>
      <table class="filter-container" style="border: none; width: 100%" border="0">


        <div class="card">
          <div class="body">

            <div class="cards" style="float:left;">
              <img src="../images/card.png" alt="">
            </div>

            <div class="head">
              <h4 class="font-20 weight-500 mb-2">
                Xin Chào

                <div class="colage">
                  Ms.ThanhTu
                </div>
              </h4>
              <p>HealthCare là nền tảng công nghệ trực tuyến cung cấp cho người dùng những dịch vụ chăm sóc sức
                khỏe.
                “Kiến tạo nền tảng công nghệ y tế cực kỳ đơn giản, phụng sự sức khỏe con người nhanh nhất trên mọi
                miền đất nước”
              </p>

            </div>
          </div>
        </div>
        <tr>
          <td style="width: 25%; margin-bottom: 20px">
            <div class="dashboard-items bg-danger" style="padding:20px;margin:7.2px;width:95%;display: flex">
              <div>
                <div class="h3-dashboard">
                  Tổng các bác sĩ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $doctorrow->num_rows  ?>
                </div>

              </div>
              <div class=" dashboard-icons">
                <i class="fa fa-user-md"></i>
              </div>
            </div>
          </td>

          <td style="width: 25%; margin-bottom: 20px">
            <div class="dashboard-items bg-secondary" style="padding:10px;margin:7.2px;width:95%;display: flex;">
              <div>
                <div class="h3-dashboard">
                  Tổng bệnh nhân &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $patientrow->num_rows  ?>
                </div>
              </div>
              <div class="dashboard-icons">
                <i class="fa fa-wheelchair"></i>
              </div>
            </div>
          </td>
          <td style="width: 25%;">
            <div class="dashboard-items bg-info" style="padding:20px;margin:auto;width:95%;display: flex;">
              <div>
                <div class="h3-dashboard">
                  Đặt lịch hẹn khám &nbsp;&nbsp;
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $appointmentrow ->num_rows  ?>
                </div>

              </div>
              <div class="dashboard-icons">
                <i class="fa fa-calendar-alt"></i>
              </div>
            </div>
          </td>

          <td style="width: 25%;">
            <div class="dashboard-items bg-secondary "
              style="padding:20px;margin:auto;width:95%;display: flex;padding-top:26px;padding-bottom:26px;">
              <div>

                <div class="h3-dashboard">
                  Buổi hẹn hôm nay
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $schedulerow ->num_rows  ?>
                </div>
              </div>
              <div class="dashboard-icons">
                <i class="fa fa-heartbeat"></i>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td style=" width: 25%;">
            <div class="dashboard-items bg-report" style="padding:20px;margin:7.2px;width:95%;display: flex">
              <div>
                <div class="h3-dashboard">
                  Tổng báo cáo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $doctorrow->num_rows  ?>
                </div>

              </div>
              <div class=" dashboard-icons">
                <i class="fa-solid fa-flag"></i>
              </div>
            </div>
          </td>

          <td style="width: 25%;">
            <div class="dashboard-items bg-request" style="padding:20px;margin:7.2px;width:95%;display: flex;">
              <div>
                <div class="h3-dashboard">
                  Yêu cầu công việc &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $patientrow->num_rows  ?>
                </div>

              </div>
              <div class="dashboard-icons">
                <i class="fa-solid fa-book-open"></i>
              </div>
            </div>
          </td>
          <td style="width: 25%;">
            <div class="dashboard-items bg-success" style="padding:20px;margin:7.2px;width:95%;display: flex;">
              <div>
                <div class="h3-dashboard">
                  Tổng doanh thu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div><br>
                <div class="h1-dashboard">
                  <?php    echo $patientrow->num_rows  ?>
                </div>

              </div>
              <div class="dashboard-icons">
                <i class="fa-regular fa-credit-card"></i>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </center>
  </td>


  <tr>
    <td colspan="4">
      <table width="100%" border="0" class="dashbord-tables">
        <tr>
          <td>
            <p
              style="padding:10px;padding-left:48px;padding-bottom:0;font-size:23px;font-weight:700;color:var(--primarycolor);">
              Cuộc hẹn sắp tới: <?php  
                        // Tạo mảng chứa tên các thứ trong tuần 
$daysOfWeek = [
  "Monday" => "Thứ Hai",
  "Tuesday" => "Thứ Ba",
  "Wednesday" => "Thứ Tư",
  "Thursday" => "Thứ Năm",
  "Friday" => "Thứ Sáu",
  "Saturday" => "Thứ Bảy",
  "Sunday" => "Chủ Nhật"
];

// Lấy ngày của tuần kế tiếp
$dayInEnglish = date("l", strtotime("+1 week"));

// Chuyển đổi sang tiếng Việt
$dayInVietnamese = $daysOfWeek[$dayInEnglish];

echo $dayInVietnamese;
                        ?>
            </p>
            <p
              style="padding-bottom:19px;padding-left:50px;font-size:15px;font-weight:500;color:#212529e3;line-height: 20px;">
              Đây là quyền truy cập nhanh vào các cuộc hẹn sắp tới cho đến 7 ngày<br>
              Thông tin chi tiết có sẵn trong phần "Cuộc hẹn".
            </p>

          </td>
          <td>
            <p
              style="padding:10px;padding-left:48px;padding-bottom:0;font-size:23px;font-weight:700;color:var(--primarycolor);">
              Các buổi hẹn sắp tới: <?php  
                        // Tạo mảng chứa tên các thứ trong tuần
$daysOfWeek = [
  "Monday" => "Thứ Hai",
  "Tuesday" => "Thứ Ba",
  "Wednesday" => "Thứ Tư",
  "Thursday" => "Thứ Năm",
  "Friday" => "Thứ Sáu",
  "Saturday" => "Thứ Bảy",
  "Sunday" => "Chủ Nhật"
];

// Lấy ngày của tuần kế tiếp
$dayInEnglish = date("l", strtotime("+1 week"));

// Chuyển đổi sang tiếng Việt
$dayInVietnamese = $daysOfWeek[$dayInEnglish];

echo $dayInVietnamese;
                        ?>
            </p>
            <p
              style="padding-bottom:19px;padding-left:50px;font-size:15px;font-weight:500;color:#212529e3;line-height: 20px;">
              Đây là quyền truy cập nhanh vào các Phiên sắp tới được lên lịch cho đến 7 ngày<br>
              Thêm, Xóa và Nhiều tính năng có sẵn trong phần "Lịch khám".
            </p>
          </td>
        </tr>
        <tr>
          <td width="50%">
            <center>
              <div class="abc scroll" style="height: 200px;">
                <table width="85%" class="sub-table scrolldown" border="0">
                  <thead>
                    <tr>
                      <th class="table-headin">

                        Số cuộc hẹn

                      </th>
                      <th class="table-headin">
                        Tên bệnh nhân
                      </th>
                      <th class="table-headin">


                        Bác sĩ

                      </th>
                      <th class="table-headin">
                        Buổi hẹn

                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                $nextweek=date("Y-m-d",strtotime("+1 week"));
                $sqlmain= "select appointment.appoid,schedule.scheduleid,schedule.title,doctor.docname,patient.pname,schedule.scheduledate,schedule.scheduletime,appointment.apponum,appointment.appodate from schedule inner join appointment on schedule.scheduleid=appointment.scheduleid inner join patient on patient.pid=appointment.pid inner join doctor on schedule.docid=doctor.docid  where schedule.scheduledate>='$today'  and schedule.scheduledate<='$nextweek' order by schedule.scheduledate desc";

                    $result= $database->query($sqlmain);

                    if($result->num_rows==0){
                        echo '<tr>
                        <td colspan="3">
                        <br><br><br><br>
                        <center>
                        <img src="../images/notfound.png" width="25%">
                        
                        <br>
                        <p class="heading-main12" style="margin-left: 45px; margin-top: 64px; font-size:14px;color:rgb(49, 49, 49)">Chúng tôi không thể tìm thấy bất cứ điều gì liên quan đến từ khóa của bạn!</p>
                        <a class="non-style-link" href="appointment.php"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Hiển thị tất cả các cuộc hẹn &nbsp;</font></button>
                        </a>
                        </center>
                        <br><br><br><br>
                        </td>
                        </tr>';
                        
                    }
                    else{
                    for ( $x=0; $x<$result->num_rows;$x++){
                        $row=$result->fetch_assoc();
                        $appoid=$row["appoid"];
                        $scheduleid=$row["scheduleid"];
                        $title=$row["title"];
                        $docname=$row["docname"];
                        $scheduledate=$row["scheduledate"];
                        $scheduletime=$row["scheduletime"];
                        $pname=$row["pname"];
                        $apponum=$row["apponum"];
                        $appodate=$row["appodate"];
                        echo '<tr>


                            <td style="text-align:center;font-size:23px;font-weight:500; color: var(--btnnicetext);padding:20px;">
                                '.$apponum.'
                                
                            </td>

                            <td style="font-weight:600;"> &nbsp;'.
                            
                            substr($pname,0,25)
                            .'</td >
                            <td style="font-weight:600;"> &nbsp;'.
                            
                                substr($docname,0,25)
                                .'</td >
                               
                            
                            <td>
                            '.substr($title,0,15).'
                            </td>

                        </tr>';
                        
                    }
                }
                     
                ?>

                  </tbody>

                </table>
              </div>
            </center>
          </td>
          <td width="50%" style="padding: 0;">
            <center>
              <div class="abc scroll" style="height: 200px;padding: 0;margin: 0;">
                <table width="85%" class="sub-table scrolldown" border="0">
                  <thead>
                    <tr>
                      <th class="table-headin">

                        Tên buổi hẹn

                      </th>

                      <th class="table-headin">
                        Bác sĩ
                      </th>
                      <th class="table-headin">

                        Ngày và giờ

                      </th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php
                        $nextweek=date("Y-m-d",strtotime("+1 week"));
                        $sqlmain= "select schedule.scheduleid,schedule.title,doctor.docname,schedule.scheduledate,schedule.scheduletime,schedule.nop from schedule inner join doctor on schedule.docid=doctor.docid  where schedule.scheduledate>='$today' and schedule.scheduledate<='$nextweek' order by schedule.scheduledate desc"; 
                            $result= $database->query($sqlmain);

                            if($result->num_rows==0){
                              echo '<tr>
                              <td colspan="3">
                              <br><br><br><br>
                              <center>
                              <img src="../images/notfound.png" width="25%">
                              
                              <br>
                              <p class="heading-main12" style="margin-left: 45px; margin-top: 45px; font-size:14px;color:rgb(49, 49, 49)">Chúng tôi không thể tìm thấy bất cứ điều gì liên quan đến từ khóa của bạn!</p>
                              <a class="non-style-link" href="appointment.php"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Hiển thị tất cả các buổi hẹn &nbsp;</font></button>
                              </a>
                              </center>
                              <br><br><br><br>
                              </td>
                              </tr>';
                              
                          }
                            else{
                            for ( $x=0; $x<$result->num_rows;$x++){
                                $row=$result->fetch_assoc();
                                $scheduleid=$row["scheduleid"];
                                $title=$row["title"];
                                $docname=$row["docname"];
                                $scheduledate=$row["scheduledate"];
                                $scheduletime=$row["scheduletime"];
                                $nop=$row["nop"];
                                echo '<tr>
                                    <td style="padding:20px;"> &nbsp;'.
                                    substr($title,0,30)
                                    .'</td>
                                    <td>
                                    '.substr($docname,0,20).'
                                    </td>
                                    <td style="text-align:center;">
                                        '.substr($scheduledate,0,10).' '.substr($scheduletime,0,5).'
                                    </td>


                                   
                                </tr>';
                                
                            }
                        }
                             
                        ?>

                  </tbody>

                </table>
              </div>
            </center>
          </td>
        </tr>
        <tr>
          <td>
            <center>
              <a href="appointment.php" class="non-style-link"><button class="btn-primary btn" style="width:85%">Hiển
                  thị tất cả các cuộc hẹn
                </button></a>
            </center>
          </td>
          <td>
            <center>
              <a href="schedule.php" class="non-style-link"><button class="btn-primary btn" style="width:85%">Hiển thị
                  các cả các buổi hẹn
                </button></a>
            </center>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  </table>
  </div>
  </div>

</body>

</html>