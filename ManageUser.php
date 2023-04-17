<?php
@include 'config.php';
session_start();
// truy van du lieu
$select = " SELECT * FROM user_form";
$qr = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petite soeur</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
                <img src="images/icon.png" alt="site icon">
                <span class="text-uppercase fw-lighter ms-2">Petite soeur</span>
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="index.html">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="index.html">Khuyến mại</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="index.html">Bài viết</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="index.html">Giới thiệu</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="index.html">Phổ biến</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <header class="bg-secondary border p-4 text-white text-center">
        <h1>Danh sách người dùng</h1>
    </header>
    <table class="table table-striped table-bordered table-hover table-condensed table-row">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Email</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Năm sinh</th>
                <th scope="col">Hành Động</th>
                <th scope="col">Sắp xếp năm sinh</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($rc = mysqli_fetch_array($qr)) {
                echo "<tr>";
                echo "<th scope='row'>" . $i . "</th>";
                echo "<td>" . $rc['email'] . "</td>";
                echo "<td>" . $rc['password'] . "</td>";
                echo "<td>" . $rc['username'] . "</td>";
                echo "<td>" . $rc['year'] . "</td>";
                echo "<td><a href='add_user.php'>Thêm</a> | <a href='edit_user.php?id=" . $rc['id'] . "'>Sửa</a> | 
                <a href='delete.php?id=" . $rc['id'] . "'>Xóa</a> </td>";
                echo "<td><a href='asc.php'>Tăng dần</a> | <a href='desc.php'>Giảm dần</a></td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </tbody>
    </table>
    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>