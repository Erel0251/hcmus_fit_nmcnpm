<?php
session_start();
include "../Model/db_connect.php";

$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$date = $_POST['date'];

$username = $_SESSION['username'];
$old_image = $_SESSION['image'];

$image_path = NULL;

if ($_FILES['image']['name'] != "") {
    echo $_FILES['image']['size'];
    echo $_FILES['image']['error'];
    $image_path = "../images/userImage/" . $_FILES['image']['name'];
    copy($_FILES['image']['tmp_name'], $image_path);

    if (!unlink($old_image)) {
        echo ('$_SESSION["image"] cannot be deleted due to an error');
    } else {
        echo ('$_SESSION["image"] has been deleted');
    }
}

$_SESSION['image'] = $image_path ?? $_SESSION['image'];

$sql = "UPDATE `nguoi_dung` SET `HOTEN` = '$fullname', 
                                `GIOITINH` = '$gender', 
                                `NGAYSINH` = '$date', 
                                `IMAGE` = '$image_path',
                                `EMAIL` = '$email',
                                `SDT` = '$sdt' 
                            WHERE `nguoi_dung`.`USERNAME` = '$username'";

$query = $conn->query($sql);
header("Location: ../View/profile.php?Success=Update profile successfully");
exit();
