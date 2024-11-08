<div class="container">

  <div class="menu">
    <table class="menu-container" border="0">
      <tr>
        <td>
          <table border="0" class="profile-container">
            <tr>
              <td>
                <img src="../images/logo.jpg" alt="">
              </td>

            </tr>

          </table>
        </td>
      </tr>
      <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">

          <a href="index.php" class="non-style-link-menu non-style-link-menu-active">
            <div>
              <p class="menu-text">
                <i class="material-symbols-outlined"> dashboard</i>
                Tổng quát
              </p>
          </a>
  </div></a>
  </td>
  </tr>
  <tr class="menu-row">
    <td class="menu-btn menu-icon-doctor ">
      <a href="doctors.php" class="non-style-link-menu ">
        <div>
          <p class="menu-text">
            <i class="material-symbols-outlined">supervised_user_circle</i>Bác sĩ
          </p>
      </a>
</div>
</td>
</tr>
<tr class="menu-row">
  <td class="menu-btn menu-icon-schedule">
    <a href="schedule.php" class="non-style-link-menu">
      <div>
        <p class="menu-text"><i class="material-symbols-outlined">calendar_month</i>Lịch khám</p>
      </div>
    </a>
  </td>
</tr>

<tr class="menu-row">
  <td class="menu-btn menu-icon-appoinment">
    <a href="appointment.php" class="non-style-link-menu">
      <div>
        <p class="menu-text"><i class="material-symbols-outlined">description</i>Cuộc hẹn</p>
    </a>
    </div>
  </td>
</tr>
<tr class="menu-row">
  <td class="menu-btn menu-icon-patient">
    <a href="patient.php" class="non-style-link-menu">
      <div>
        <p class="menu-text"><i class="material-symbols-outlined">face</i>Bệnh nhân</p>
    </a>
    </div>
  </td>
</tr>

<tr class="menu-row">
  <td class="menu-btn menu-icon-settings">
    <a href="../logout.php" class="non-style-link-menu">
      <div>
        <p class="menu-text"><i class="material-symbols-outlined">power_settings_new</i>Đăng xuất</p>
    </a></div>
  </td>
</tr>

</table>
</div>

<div class="dash-body">
  <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;">

    <tr>
      <td>
        <marquee behavior="scroll" direction="left" scrollamount="4">
          <p style="color: red; font-size: 20px;">Công ty cổ phần công nghệ sức khỏe HealthCare Việt Nam
          </p>
        </marquee>
      </td>

      <td colspan="2" class="nav" style="float: right;">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="dashboard_bar" style="text-transform: capitalize;"></div>
              </div>
              <ul class="navbar-nav header-right">
                <li>
                  <i class="fa-regular fa-bell"></i>
                </li>
                <li> <i class="fa-regular fa-message"></i></li>
                <li>
                  <i class="fa-solid fa-gift"></i>
                </li>


                <li>
                  <div class="profile dropdown">
                    <img src="../images/profile.png" width="45px">

                    <div class="toggel">
                      <span style="">ThanhTu</span><br>
                      <span style="">
                        admin@gmail.com
                      </span>
                    </div>

                    <div class="dropdown-content">
                      <a href="../admin/logout.php" class="drop dropdown-item logout">
                        <i class="fa fa-sign-out-alt"></i>
                        Đăng xuất</a>
                    </div>
                  </div>

                </li>

              </ul>
            </div>
          </nav>
        </div>
        <?php
                    echo '<datalist id="doctors">';
                    $list11 = $database->query("select  docname,docemail from  doctor;");

                    for ($y=0;$y<$list11->num_rows;$y++){
                        $row00=$list11->fetch_assoc();
                        $d=$row00["docname"];
                        $c=$row00["docemail"];
                        echo "<option value='$d'><br/>";
                        echo "<option value='$c'><br/>";
                    };

                echo ' </datalist>';
                ?>
      </td>
      <?php 
                                 date_default_timezone_set('Asia/Ho_Chi_Minh');
                                 $today = date('Y-m-d H:i:s');
                                


                                $patientrow = $database->query("select  * from  patient;");
                                $doctorrow = $database->query("select  * from  doctor;");
                                $appointmentrow = $database->query("select  * from  appointment where appodate>='$today';");
                                $schedulerow = $database->query("select  * from  schedule where scheduledate='$today';");


                                ?>


    </tr>