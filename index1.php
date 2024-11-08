<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>Hospital Website</title>
  <!-- css  -->
  <link rel="stylesheet" href="css/nav1.css">
  <link rel="stylesheet" href="css/header-index1.css">
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
  <script defer src="js/script.js"></script>
</head>


<body>
  <?php 
  include("include/header1.php");
  ?>


  <div class="container">
    <div class="panel">
      <img src="images/infor.jpg" alt="Image 1">
      <div class="panel-content">
        <h3>Thông tin thêm</h3>
        <p>Nhấp vào nút để biết thêm thông tin</p>
        <a href="#" class="btn">Thông tin thêm</a>
      </div>
    </div>
    <div class="panel">
      <img src="images/patients.jpg" alt="Image 2">
      <div class="panel-content">
        <h3>Tạo tài khoản</h3>
        <p>Tạo tài khoản để chúng tôi có thể chăm sóc tốt cho bạn</p>
        <a href="#" class="btn">Tạo tài khoản!!!</a>
      </div>
    </div>
    <div class="panel">
      <img src="images/doctors.jpg" alt="Image 3">
      <div class="panel-content">
        <h3>Chúng tôi đang tuyển dụng bác sĩ</h3>
        <p>Ứng tuyển ngay tại đây</p>
        <a href="#" class="btn">Ứng tuyển ngay!!!</a>
      </div>
    </div>
  </div>
</body>

</html>