<?php
session_start();
include "../Model/db_connect.php";

$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$date = $_POST['date'];
$username = $_SESSION['username'];
//$image = $_FILES['imagepath'];
echo "<pre>";
print_r($_FILES['image']);
echo "</pre>";
$image_path = "../assets/images/userImage/" . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

$sql = "UPDATE `nguoi_dung` SET `HOTEN` = '$fullname', 
                                `GIOITINH` = '$gender', 
                                `NGAYSINH` = '$date', 
                                `IMAGE` = '$image_path',
                                `EMAIL` = '$email',
                                `SDT` = '$sdt' 
                            WHERE `nguoi_dung`.`USERNAME` = '$username'";

$query = $conn->query($sql);
echo "done";
//header("Location: ../View/profile.php?Success=Update profile successfully");
//exit();    