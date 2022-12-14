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
    <script src="./assets/js/script.js"></script>

    <title>Quản lý căn tin</title>
</head>

<body>

    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-auto position-relative">

            <div class="position-absolute h4" style="left: 50px;"><img src="./images/svg/logo.svg"
                style="display: inline-block; width: 80px; height: auto;"  alt="HCMUS"> HCMUS Canteen</div>

            <div class="row bg-light mh-100">

                <div class="col-md-6 p-0 m-0">
                    <img src="./images/svg/background1.svg" class="img-fluid" alt="background 1">
                </div>


                <div class="col-md-6 d-flex align-items-center justify-content-center">

                    <form action="./Control/login.php" method="post" class="d-flex flex-column justify-content-around h-75" style="width: 80%;">
                        <!-- Title -->
                        <div class="text-center h1 " style="color: #ED00F2">Đăng nhập</div>

                        <!-- Error log -->
                        <?php if (isset($_GET['Error'])) { ?>
                            <div class="text-left alert alert-danger p-2">
                            <?php echo $_GET['Error']; ?></div>
                        
                        <?php }?>

                        <!-- Username input -->
                        <div class="form-outline ">
                            <label class="form-label" for="username">Tên đăng nhập</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline ">
                            <label class="form-label" for="password">Mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required/>
                                <button class="btn btn-outline-secondary" type="button" onclick="passwordButton('password', 'button')"><img
                                        src="./images/png/icons/002-hide.png" id="button" alt=""></button>
                            </div>

                        </div>

                        <!-- Checkbox -->
                        <div class="form-check ">
                            <input class="form-check-input me-2" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">
                                Nhớ mật khẩu
                            </label>
                        </div>

                        <!-- Login/Register -->
                        <div class="text-center ">

                            <button type="submit" class="btn text-white"
                                style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #CA9FC8;">Đăng nhập
                            </button>

                            <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản? <a href="./register.php"
                                    class="link-primary">Đăng ký</a></p>
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