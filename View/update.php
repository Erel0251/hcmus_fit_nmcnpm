<?php
include "../Model/db_connect.php";

?>

<?php
$id=$_POST['id'];
$MAHANG=$_POST['mahang'];
$tenhang=$_POST['tenhang'];
$image=$_POST['image'];
$loaihang=$_POST['loaihang'];
$dongia=$_POST['dongia'];
$soluong=$_POST['soluong'];

$conn->query("SET FOREIGN_KEY_CHECKS=0");
$sql="UPDATE `mat_hang` SET `MAHANG` = '$MAHANG', `TENHANG` = '$tenhang', `IMAGE` = '$image', `LOAIHANG` = '$loaihang',`DONGIA` = '$dongia', `SOLUONG` = '$soluong' WHERE `mat_hang`.`MAHANG` = '$id'";
$conn->exec($sql);
$conn->query("SET FOREIGN_KEY_CHECKS=1");
header("Location: menu.php")


?>