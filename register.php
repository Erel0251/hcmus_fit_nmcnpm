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

    <!-- ========== Bootstrap     ========== -->

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-auto position-relative">

            <div class="position-absolute h4" style="left: 50px;"><img src="./images/svg/logo.svg" style="display: inline-block; width: 80px; height: auto;" alt="HCMUS"> HCMUS Canteen</div>

            <div class="row bg-light mh-100">
                <div class="col-md-6 p-0 m-0">
                    <img src="./images/svg/background1.svg" class="img-fluid" alt="background 1">
                </div>


                <div class="col-md-6 d-flex align-items-center justify-content-center">

                    <form action="signup.php" method="post" id="register" class="d-flex flex-column justify-content-around h-100" style="width: 80%;">
                        <!-- Title -->
                        <div class="text-center h1 " style="color: #ED00F2">Đăng ký</div>

                        <!-- Error log -->
                        <?php if (isset($_GET['Error'])) { ?>
                            <div class="text-left alert alert-danger p-2">
                            <?php echo $_GET['Error']; ?></div>
                        
                        <?php } else?>

                        <!-- Success log -->
                        <?php if (isset($_GET['Success'])) { ?>
                            <div class="text-left alert alert-success p-2">
                            <?php echo $_GET['Success']; ?></div>
                        
                        <?php }?>

                        <!-- Họ tên input -->
                        <div class="form-outline ">
                            <label class="form-label" for="fullname">Họ và tên</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Username" required/>
                        </div>


                        <!-- Username input -->
                        <div class="form-outline ">
                            <label class="form-label" for="username">Tên đăng nhập (MSSV/ Mã CBNV-GV)</label>
                            <input type="text" id="username" name="username" class="form-control" value="20120485" required/>
                        </div>


                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <!-- Gender input -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="Nam" checked>
                                <label class="form-check-label" for="gender1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="Nữ">
                                <label class="form-check-label" for="gender2">Nữ</label>
                            </div>

                            <!-- Role input -->
                            <select class="form-select w-50" id="role" name="role" form="register">
                                <option value="Khách hàng" selected>Khách hàng</option>
                                <option value="Thu ngân">Thu ngân</option>
                                <option value="Quản lý">Quản lý</option>
                            </select>
                        </div>


                        <!-- Email input -->
                        <div class="form-outline ">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="20120485@gmail.com" required/>
                        </div>


                        <!-- Phonenumber input -->
                        <div class="form-outline ">
                            <label class="form-label" for="sdt">Số điện thoại</label>
                            <input type="tel" id="sdt" name="sdt" class="form-control" value="0123456789" required/>
                        </div>


                        <!-- Password input -->
                        <div class="form-outline ">
                            <label class="form-label" for="password">Mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" value="admin" required/>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><img src="./images/png/icons/002-hide.png" alt=""></button>
                            </div>
                        </div>

                        <!-- Re-Enter Password input -->
                        <div class="form-outline ">
                            <label class="form-label" for="repassword">Nhập lại mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="repassword" name="repassword" class="form-control" required/>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><img src="./images/png/icons/002-hide.png" alt=""></button>
                            </div>
                        </div>

                        <!-- Login -->
                        <div class="text-center ">

                            <button type="submit" class="btn btn-lg text-white" style="border-radius: 8rem; padding-left: 2.5rem; padding-right: 2.5rem; background: #CA9FC8;">Đăng ký</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản? <a href="./index.php" class="link-primary">Đăng nhập</a></p>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
    <!--
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a
            href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a>
        from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/th-studio" title="th studio">th studio</a> from <a
            href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>

-->

</body>

</html>