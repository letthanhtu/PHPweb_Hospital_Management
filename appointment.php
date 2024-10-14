<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>Medical Website</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
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
  <!-- header -->
  <?php require_once 'include/header.php'?>
  <!-- Footer Section  -->
  <?php require_once 'include/footer.php'?>

  <form action="" method="post" style="margin-left: 50%; margin-top: 20px">
    <h2 style="margin-left: 1.5rem">Form đặt lịch hẹn khám</h2>
    <label for="name">Họ và tên</label><br>
    <input type="text" name="name" id="name" required autocomplete="off" placeholder="Nhập họ và tên của bạn"><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" required autocomplete="off" placeholder="Nhập email của bạn"><br>

    <label for="phone">Số điện thoại</label><br>
    <input type="phone" name="phone" id="phone" required autocomplete="off"
      placeholder="Nhập số điện thoại của bạn"><br>

    <label for="gender">Giới tính</label><br>
    <select name="gender" id="gender" required autocomplete="off" placeholder="Giới tính">
      <option value="Male">Nam</option>
      <option value="Female">Nữ</option>
      <option value="others">Khác</option>
    </select>

    <label for="location">Địa chỉ</label><br>
    <select name="division" id="division" onchange="populateDistrict()">Địa chỉ cụ thể</select><br>


  </form>
</body>

</html>