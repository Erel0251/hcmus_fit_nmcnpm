<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDate = date('Y-m-d H:i:s', time());

$sql = "SELECT USERNAME, HOTEN, GIOITINH
        FROM nguoi_dung";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$nguoi_dung = array();

while ($row = $query->fetch()) {
    array_push($nguoi_dung, $row);
}

$sql = "SELECT MAHANG, TENHANG, DONGIA
        FROM mat_hang";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$mat_hang = array();

while ($row = $query->fetch()) {
    array_push($mat_hang, $row);
}


$sql = "SELECT COUNT(MADON) AS STT
        FROM `don_hang`;";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();

$madon = "MD" . (sprintf("%03d\n", $row['STT'] + 1));
?>