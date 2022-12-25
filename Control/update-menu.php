<?php

include "../Model/db_connect.php";

$mahang = $_POST['mahang'];
$tenhang = $_POST['tenhang'];
$image = $_POST['image'];
$loaihang = $_POST['loaihang'];
$dongia = $_POST['dongia'];
$soluong = $_POST['soluong'];

if (isset($_POST['update'])) {
    $sql="UPDATE mat_hang SET TENHANG = '$tenhang', 
                              `IMAGE` = '$image', 
                              LOAIHANG = '$loaihang',
                              DONGIA = '$dongia', 
                              SOLUONG = '$soluong' 
          WHERE mat_hang.MAHANG = '$mahang'";

    echo "updated";

} else if (isset($_POST['add'])) {
    $sql="INSERT INTO mat_hang (MAHANG, TENHANG, `IMAGE`, LOAIHANG, DONGIA, SOLUONG) 
          VALUES ('$mahang', '$tenhang', '$image', '$loaihang', '$dongia', '$soluong')";

    echo "added";
} 

$query = $conn->query($sql);
header("Location: ../View/menu.php?Success=Cập nhật thực đơn thành công");

exit();
?>