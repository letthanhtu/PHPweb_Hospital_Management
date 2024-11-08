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
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/input.php" ><button style="background-color: #0b3471;color:#fff" class="btn_info">Nhập kho</button></a>
                    <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/use.php" ><button class="btn_info">Lượt sử dụng</button></a>
                </div>
              
                <div class="table-header-bottom">
                <h3 class="left"><button class="showFormButton" id="showFormButton"><i class="fa-solid fa-plus"></i></button>Lần nhập kho
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
                            <th>Ngày nhập</th>
                            <th>Số lượng nhập</th>
                            <th>Số lượng còn lại</th>
                            <th>HSD</th>
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

       <div  id="container_them" style="display:none">
            <div class="table-container">
                <form>
                    <table class="no-hover-table">
                        <h3 class="new_h3"style="margin-top: 0">Thêm lần nhập hàng mới<button id="showButton" class="x" style="margin:0px 0 0 20px; background-color: #fff;" > <a href="http://localhost/Dashboard1 - Copy/gt - Copy/medicine/input.php"><i class="fa-solid fa-circle-xmark"></i></button></a></h3>
                        
                        <tr  >
                            <td colspan="2" >Mã lô hàng</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="input_new" type="text" name="id_lohang" value="#"></td>
                        </tr>
                        <tr>
                            <td>Nhày nhập</td>
                            <td>Hạn sử dụng</td>
                        </tr>
                        <tr>
                            <td><input type="text"class="input_new"  name="id_lohang" value="#"></td>
                            <td><input type="text" class="input_new" name="id_lohang" value="#"></td>
                        </tr>
                        <tr>
                            <td>Số lượng nhập</td>
                            <td>Số lượng còn lại</td>
                        </tr>
                        <tr>
                            <td><input type="text"class="input_new"  name="id_lohang" value="#"></td>
                            <td><input type="text"class="input_new"  name="id_lohang" value="#"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="td_btnHl">
                                <input class="btn_luu-new"type="submit" value="Luu" />
                                <input class="btn_huy-new"type="reset" value="Huy" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
       </div>

       <script src="../script.js"></script>
       </body>
</html>