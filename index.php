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

            <div class="position-absolute h4" style="left: 50px;"><img src="./images/svg/logo.svg"
                style="display: inline-block; width: 80px; height: auto;"  alt="HCMUS"> HCMUS Canteen</div>

            <div class="row bg-light mh-100">

                <div class="col-md-6 p-0 m-0">
                    <img src="./images/svg/background1.svg" class="img-fluid" alt="background 1">
                </div>


                <div class="col-md-6 d-flex align-items-center justify-content-center">

                    <form class="d-flex flex-column justify-content-around h-75" style="width: 80%;">
                        <div class="text-center h1 " style="color: #ED00F2">Đăng nhập</div>

                        <!-- Username input -->
                        <div class="form-outline ">
                            <label class="form-label" for="thêm id vào đây">Tên đăng nhập</label>
                            <input type="email" id="" class="form-control" placeholder="Enter username" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="" class="form-control" placeholder="Enter password" />
                                <button class="btn btn-outline-secondary" type="button" id="button-addon"><img
                                        src="./images/png/icons/002-hide.png" alt=""></button>
                            </div>

                        </div>

                        <!-- Checkbox -->
                        <div class="form-check ">
                            <input class="form-check-input me-2" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">
                                Nhớ mật khẩu
                            </label>
                        </div>

                        <!-- Register -->
                        <div class="text-center ">
                            <!--
                                <button type="button" class="btn text-white"
                                style="border-radius: 8rem; padding-left: 2.5rem; padding-right: 2.5rem; background: #CA9FC8;">Đăng nhập</button>
                            -->

                            <a href="./client/home.php" class="btn text-white"
                                style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #CA9FC8;">Đăng
                                nhập</a>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản? <a href="./register.php"
                                    class="link-primary">Đăng ký</a></p>
                        </div>

                        <!-- Test/ Footer-->
                        <div class="row d-flex justify-content-between">
                            <div class="col text-center"><a href="./admin/home.php" class="link-dark">Test Quản lý</a></div>
                            <div class="col text-center"><a href="./cashier/home.php" class="link-dark">Test Thu ngân</a></div>
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