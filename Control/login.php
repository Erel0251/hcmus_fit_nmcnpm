<?php
session_start();
include "../Model/db_connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // PDO
    $sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username' AND `PASSWORD` LIKE '$password'";

    $query = $conn->query($sql);

    $query->setFetchMode(PDO::FETCH_ASSOC);
    if ($query->rowCount() == 1){
        $row = $query->fetch();
        $_SESSION['username'] = $row['USERNAME'];
        $_SESSION['fullname'] = $row['HOTEN'];
        $_SESSION['role'] = $row['ROLE'];
        header("Location: ../View/home.php");
        exit();
    } else {
        header("Location: ../index.php?Error=Incorrect username or password");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>