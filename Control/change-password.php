<?php
session_start();
include "../Model/db_connect.php";

$oldpassword = $_POST['oldpassword'];
//$hash = password_hash($oldpassword, PASSWORD_DEFAULT);
//if (password_verify($oldpassword, $hash));
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$username = $_SESSION['username'];


$sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username'";

$query = $conn->query($sql);

$query->setFetchMode(PDO::FETCH_ASSOC);
if ($query->rowCount() == 1) {
    $row = $query->fetch();
    if ($oldpassword == $password) {
        header("Location: ../View/password.php?Error=Nothing change in your new password");

    } else if ($password != $repassword) {
        header("Location: ../View/password.php?Error=Wrong confirm password");
        exit();

    } else if ($password == $repassword || password_verify($oldpassword, $row['PASSWORD'])){
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "UPDATE `nguoi_dung` 
                SET `PASSWORD` = '$hash'
                WHERE `nguoi_dung`.`USERNAME` = '$username'";

        $query = $conn->query($sql);
        header("Location: ../View/password.php?Success=Update password successfully");
        exit();
    }



} else {
    header("Location: ../View/password.php?Error=Wrong password");
    exit();
}
