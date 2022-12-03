<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cantin";
try {
    $conn = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
    // Thiết lập lỗi của PDO cho ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Kết nối thành công";
} catch (PDOException $e){
    echo "Lỗi kết nối: " . $e->getMessage();
}
?>