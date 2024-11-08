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
                <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/add.php"><button class="btn_info">Thông tin</button></a>
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/input.php" ><button class="btn_info">Nhập kho</button></a>
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/use.php" ><button style="background-color: #0b3471;color:#fff"  class="btn_info">Lượt sử dụng</button></a>
                </div>
              
                <div class="table-header-bottom">
                <h3 class="left">Thông tin lượt sử dụng
                    </h3>
                    <div class="right">
                     <!--Thanh tìm kiếm--> 
                        <div action="" id="search-box">
                            <input type="text" id="search-text" placeholder="Tìm kiếm sản phẩm..." required>
                            <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                      <!--Thanh tìm kiếm--> 

                        <select  name="filter" id="filter">
                            <option value="all">Tất cả</option>
                            <option value="1">Loại thuốc</option>
                        </select>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>STT</th>
                            <th>Mã lô hàng</th>
                            <th>Mã đơn thuốc</th>
                            <th>Mã bệnh nhân</th>
                            <th>Số lượng </th>
                            <th>Ngày kê đơn</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody class="hover-table">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="#"></a></td>
                        </tr>
                      
                    </tbody>
                </table>

            </div>
        </div>
       
        <script src="../script.js"></script>
        </body>
</html>