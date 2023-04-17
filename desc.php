<?php
@include 'config.php';
session_start();
// truy van du lieu
$select = " SELECT * FROM user_form ORDER BY year DESC";
$qr = mysqli_query($conn,$select) ;

?>

<h1>Danh sách người dùng</h1>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Email</th>
        <th>Mật khẩu</th>
        <th>Tên người dùng</th>
        <th>Năm sinh</th>
        <th>Hành Động</th>
        <th>Sắp xếp năm sinh</th>
    </tr>
    <?php
        $i = 1;
        while($rc = mysqli_fetch_array($qr)){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$rc['email']."</td>";
            echo "<td>".$rc['password']."</td>";
            echo "<td>".$rc['username']."</td>";
            echo "<td>".$rc['year']."</td>";
            echo "<td><a href='add_user.php'>Thêm</a> | <a href='edit_user.php?id=".$rc['id']."'>Sửa</a> | 
            <a href='delete.php?id=".$rc['id']."'>Xóa</a></td>";
            echo "<td><a href='asc.php'>Tăng dần</a> | <a href='desc.php'>Giảm dần</a></td>";
            echo "<tr>";
            $i++;
        }
    ?>
</table>