<?php

@include 'config.php';

session_start();
$id = $_GET['id'];
$select_id = mysqli_query($conn, " SELECT * FROM user_form WHERE id = '$id'");
$rs = mysqli_fetch_array($select_id);
if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $name = $_POST['username'];
    $year = $_POST['year'];


    if ($pass != $cpass) {
        $error[] = 'password not mathched!';
    } else {
        $insert = "UPDATE user_form SET email = '$email', password='$pass', username='$name', year='$year' WHERE id='$id'";
        mysqli_query($conn, $insert);
        header('location:ManageUser.php');
    }
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h3 class="title">Sua thong tin người dùng</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                }
            }
            ?>
            <input type="email" name="usermail" value="<?php echo $rs['email'] ?>" class="box" required>
            <input type="password" name="password" value="<?php echo $rs['password'] ?>" class="box" required>
            <input type="password" name="cpassword" value="<?php echo $rs['password'] ?>" class="box" required>
            <input type="username" name="username" value="<?php echo $rs['username'] ?>" class="box" required>
            <input type="year" name="year" value="<?php echo $rs['year'] ?>" class="box" required>
            <input type="submit" value="Lưu thay đổi" class="form-btn" name="submit">
        </form>

    </div>

</body>

</html>