<?php
    @include 'config.php';
    $id=$_GET['id'];
    $qer = "DELETE FROM user_form WHERE id = '$id'";
    $result = mysqli_query($conn, $qer);
    if($result){
        header('location:ManageUser.php');
    }
?>
