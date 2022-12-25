<?php
include "../Model/db_connect.php";

$mahang = $_POST['mahang'];
$maphieu = $_POST['maphieu'];
//$tenhang = $_POST['tenhang'];
$ngaynhap = $_POST['ngaynhap'];
$soluong = $_POST['soluong'];
$diachi = $_POST['diachi'];

if (isset($_POST['update'])) {
    /*
        if ($soluong == 0) { // Không nhập số lượng nào đồng nghĩa với việc xóa
            $CtNhap = "DELETE FROM ct_nhap WHERE `ct_nhap`.`MAHANG` = '$mahang' AND `ct_nhap`.`MAPHIEUNHAP` = '$maphieu'";
        } else {
            $CtNhap = "UPDATE `ct_nhap` SET `SOLUONG` = '$soluong' WHERE `ct_nhap`.`MAHANG` = '$mahang' AND `ct_nhap`.`MAPHIEUNHAP` = '$maphieu';";
        }
    */

    $CtNhap = "UPDATE `ct_nhap` SET `SOLUONG` = '$soluong' WHERE `ct_nhap`.`MAHANG` = '$mahang' AND `ct_nhap`.`MAPHIEUNHAP` = '$maphieu';";
    $PhieuNhap = "UPDATE `phieu_nhap_hang` SET `NGAYNHAP` = '$ngaynhap', `DIACHIKHO` = '$diachi' WHERE `phieu_nhap_hang`.`MAPHIEUNHAP` = '$maphieu';";
    
    $query = $conn->query($CtNhap);
    $query = $conn->query($PhieuNhap);

    header("Location: ../View/inventory.php?Success=Update row successfully");

} else if (isset($_POST['delete'])) {
    $CtNhap = "DELETE FROM ct_nhap WHERE `ct_nhap`.`MAHANG` = '$mahang' AND `ct_nhap`.`MAPHIEUNHAP` = '$maphieu'";

    $query = $conn->query($CtNhap);

    header("Location: ../View/inventory.php?Success=Delete row successfully");
    
} 

exit();
?>