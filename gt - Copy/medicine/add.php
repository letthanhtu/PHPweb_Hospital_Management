<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- My CSS -->
    <link rel="stylesheet" href="../style.css">

    <title>AdminHub</title>
</head>

<body >


    <?php
    // Nhúng file header.php
    include '../include/header.php';
    ?>

        <h2>Loại thuốc mới</h2>
        <button class="x"> <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/list.php"><i class="fa-solid fa-circle-xmark"></i></button></a>
        
        <div class="container" id="container">
            <div class="table-container">

                <div class="table-header-new">
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/add.php"><button style="background-color: #0b3471;color:#fff" class="btn_info">Thông tin</button></a>
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/input.php"><button class="btn_info">Nhập kho</button></a>
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/use.php"> <button class="btn_info">Lượt sử dụng</button></a>
                </div>

                <form action="/list.php">
                    Tên<br>
                    <input type="text" name="info" value="Panadol" class="input_info">
                    <br>
                    Hướng dẫn sử dụng <br>
                    <input type="text" name="huongdan"class="input_huongdan">
                    
                <form>
            </div>
        </div>
        <input class="btn_luu"type="submit" value="Luu" />
        <input class="btn_huy"type="reset" value="Huy" />

        <script src="../script.js"></script>
    </body>
</html>