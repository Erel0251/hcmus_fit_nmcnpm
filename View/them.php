<?php
include "../Model/db_connect.php";

?>

<?php

$mahang=$_POST['mahang'];
$tenhang=$_POST['tenhang'];
$image=$_POST['image'];
$loaihang=$_POST['loaihang'];
$dongia=$_POST['dongia'];
$soluong=['soluong'];

$sql="INSERT INTO `mat_hang` (`MAHANG`, `TENHANG`, `IMAGE`, `LOAIHANG`, `DONGIA`, `SOLUONG`) VALUES ('$mahang', '$tenhang', '$image', '$loaihang', '$dongia', '$soluong')";
$conn->exec($sql);
header("Location: menu.php")


?>