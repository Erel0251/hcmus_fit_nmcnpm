<?php
session_start();
include "./database/db_connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];


    $sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username'";

    $query = $conn->query($sql);

    $query->setFetchMode(PDO::FETCH_ASSOC);
    if ($query->rowCount() == 1){
        header("Location: ./register.php?Error=User already exists");
        exit();
    } else {
        if ($password != $repassword){
            header("Location: ./register.php?Error=Wrong confirm password");
            exit();
        } else {
            $sql = "INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) 
                    VALUES ('$username', '$password', '$role', '$fullname', '$gender', '$sdt', '1999-01-01', '$email')";

            $query = $conn->query($sql);
            header("Location: ./register.php?Success=Account created successfully");
        }
    }
} else {
    header("Location: ./register.php");
    exit();
}
?>