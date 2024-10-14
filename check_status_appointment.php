<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>Medical Website</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/check_status.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/fav-icon.png">
  <!-- Manifest -->
  <link rel="apple-touch-icon" href="images/touch-icon.png" />
  <link rel="manifest" href="css/manifest.webmanifest" />
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- Link Swiper's CSS -->
  <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>

  <script defer src="js/script.js"></script>


</head>

<body>
  <!-- header section-->
  <?php require_once 'include/header.php'?>

  <div class="container">
    <div class="success-animation">
      <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
        <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none" />
        <path />
      </svg>
    </div>
  </div>

  <!-- Footer Section  -->
  <footer style="margin-top: 100px; height: 100px">
    <?php 
    include("include/footer.php")
     ?> </footer>
</body>

</html>