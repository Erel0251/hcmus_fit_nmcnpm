<?php
session_start();
include "../Model/db_connect.php";

$oldpassword = $_POST['oldpassword'];
//$hash = password_hash($oldpassword, PASSWORD_DEFAULT);
//if (password_verify($oldpassword, $hash));
$newpassword = $_POST['newpassword'];
$repassword = $_POST['repassword'];
$username = $_SESSION['username'];


$sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username'";

$query = $conn->query($sql);

$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();

if ($oldpassword != $row['PASSWORD'] && !password_verify($oldpassword, $row['PASSWORD'])){
    echo "Wrong password";
    header("Location: ../View/password.php?Error=Wrong password");

} else if ($oldpassword == $newpassword) {
    echo "Nothing change in your new password";
    header("Location: ../View/password.php?Error=Nothing change in your new password");

} else if ($newpassword != $repassword) {
    echo "Wrong confirm password";
    header("Location: ../View/password.php?Error=Wrong confirm password");

} else {
    $hash = password_hash($newpassword, PASSWORD_BCRYPT);
    $sql = "UPDATE `nguoi_dung` 
                SET `PASSWORD` = '$hash'
                WHERE `nguoi_dung`.`USERNAME` = '$username'";

    $query = $conn->query($sql);

    echo "Update password successfully";
    header("Location: ../View/password.php?Success=Update password successfully");
}

exit();

