<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- ========== Bootstrap CDN ========== -->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ========== Javascript   ========== -->
    <script src="../script.js"></script>

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">

            <?php include "./header.php" ?>


            <!-- Body menu -->
            <div class="row h2 mt-4 justify-content-center " style="color: #FD0000">Đổi mật khẩu</div>

            <div class="row overflow-auto" style="height: 425px">
                


                <div class="col-md-6 p-0 m-0 d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/png/reset-password.png" class="img" style="width: 50%; height: auto;"
                        alt="profile">
                </div>


                <div class="col-md-6 d-flex justify-content-center align-items-center">

                    <form action="../Control/change-password.php" method="post" class="w-75 d-flex flex-column justify-content-around">
                        
                        <!-- Error log -->
                        <?php if (isset($_GET['Error'])) { ?>
                            <div class="text-left alert alert-danger p-2">
                                <?php echo $_GET['Error']; ?></div>

                        <?php } else ?>

                        <!-- Success log -->
                        <?php if (isset($_GET['Success'])) { ?>
                            <div class="text-left alert alert-success p-2">
                                <?php echo $_GET['Success']; ?></div>

                        <?php } ?>

                        <!-- Old Password input -->
                        <div class="row my-2 form-outline ">
                            <label class="form-label" for="oldpassword">Mật khẩu cũ</label>
                            <div class="input-group">
                                <input type="password" id="oldpassword" name="oldpassword" class="form-control" placeholder="Password" required/>
                                <button class="btn btn-outline-secondary" onclick="myFunction('oldpassword', 'button1')" type="button"><img
                                        src="../images/png/icons/002-hide.png" id="button1" alt=""></button>
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="row my-2 form-outline ">
                            <label class="form-label" for="password">Mật khẩu mới</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="New password" required/>
                                <button class="btn btn-outline-secondary" onclick="myFunction('password', 'button2')" type="button"><img
                                        src="../images/png/icons/002-hide.png" id="button2" alt=""></button>
                            </div>
                        </div>

                        <!-- Re-Enter Password input -->
                        <div class="row my-2 form-outline ">
                            <label class="form-label" for="repassword">Nhập lại mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Confirm new password" required/>
                                <button class="btn btn-outline-secondary" onclick="myFunction('repassword', 'button3')" type="button"><img
                                        src="../images/png/icons/002-hide.png" id="button3" alt=""></button>
                            </div>
                        </div>

                        <!-- Login -->
                        <div class="row my-2 text-center justify-content-sm-between">
                            <!--
                            <button type="button" class="btn btn-lg text-white"
                                style="border-radius: 8rem; padding-left: 2.5rem; padding-right: 2.5rem; background: #CA9FC8;">Đăng
                                ký</button>
                            -->
                            <a href="./home.php" class="col-4 btn text-white"
                                style="border-radius: 8rem; padding: 0.75rem 2.0rem; background: #9C9C9C;">Hủy</a>

                            <button type="submit" class="col-4 btn text-white"
                                style="border-radius: 8rem; padding: 0.75rem 2.0rem; background: #80FF80;">Xác nhận</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
