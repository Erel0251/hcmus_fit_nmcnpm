<?php
include "../Model/db_connect.php";

$madon = $_POST['madon'];
$username = $_POST['username'];
$date = $_POST['date'];
$mahang = $_POST['mahang'];
$soluong = $_POST['soluong'];
$thanhtien = $_POST['thanhtien'];

print_r($mahang);
echo "<br />";
print_r($soluong);
echo "<br />";
print_r($thanhtien);
echo "<br />";
echo $mahang[1];

$sql = "INSERT INTO don_hang (MADON, MANGUOIDUNG, THOIGIAN) VALUES ('$madon', '$username', '$date');";

for ($i = 0; $i < count($mahang); $i ++){
    $sql = $sql . "INSERT INTO ct_don (MADON, MAHANG, SOLUONG, THANHTIEN) VALUES ('$madon', '$mahang[$i]', '$soluong[$i]', '$thanhtien[$i]');";
}
$query = $conn->query($sql);

header("Location: ../View/purchase.php?Success=Thanh toán thành công!!!");
exit();
?>