<?php
session_start();
include "../Model/db_connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // PDO
    $sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username'";

    $query = $conn->query($sql);

    $query->setFetchMode(PDO::FETCH_ASSOC);
    if ($query->rowCount() == 1){
        $row = $query->fetch();
        if (password_verify($password, $row['PASSWORD']) || $password == $row['PASSWORD']) {
            $_SESSION['username'] = $row['USERNAME'];
            $_SESSION['fullname'] = $row['HOTEN'];
            $_SESSION['role'] = $row['ROLE'];
            $_SESSION['image'] = $row['IMAGE'] ?: '../images/png/icons/004-user.png';
            header("Location: ../View/home.php");
            exit();
        } else {
            header("Location: ../index.php?Error=Incorrect password");
            exit();
        }
    } else {
        header("Location: ../index.php?Error=User does not exists");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
