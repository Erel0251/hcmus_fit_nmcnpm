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
                style="display: inline-block; width: 80px; height: auto;" alt="HCMUS"> HCMUS Canteen</div>

            <div class="row bg-light mh-100">
                <div class="col-md-6 p-0 m-0">
                    <img src="./images/svg/background1.svg" class="img-fluid" alt="background 1">
                </div>


                <div class="col-md-6 d-flex align-items-center justify-content-center">

                    <form class="d-flex flex-column justify-content-around h-100" style="width: 80%;">
                        <div class="text-center h1 " style="color: #ED00F2">Đăng ký</div>

                        <!-- Họ tên input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Họ và tên</label>
                            <input type="text" id="" class="form-control" value="Lê Văn Hùng" />
                        </div>


                        <!-- Username input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Tên đăng nhập (MSSV/ Mã CBNV-GV)</label>
                            <input type="text" id="" class="form-control" value="20120485" />
                        </div>


                        <!-- Email input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Email</label>
                            <input type="email" id="" class="form-control" value="20120485@gmail.com" />
                        </div>


                        <!-- Phonenumber input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Số điện thoại</label>
                            <input type="tel" id="" class="form-control" value="0123456789" />
                        </div>


                        <!-- Password input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="" class="form-control" value="admin" />
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><img
                                        src="./images/png/icons/002-hide.png" alt=""></button>
                            </div>
                        </div>

                        <!-- Re-Enter Password input -->
                        <div class="form-outline ">
                            <label class="form-label" for="">Nhập lại mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="" class="form-control" value="admin" />
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><img
                                        src="./images/png/icons/002-hide.png" alt=""></button>
                            </div>
                        </div>

                        <!-- Login -->
                        <div class="text-center ">
                            <!--
                            <button type="button" class="btn btn-lg text-white"
                                style="border-radius: 8rem; padding-left: 2.5rem; padding-right: 2.5rem; background: #CA9FC8;">Đăng
                                ký</button>
                            -->
                            <a href="./client/home.php" class="btn text-white"
                                style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #CA9FC8;">Đăng
                                ký</a>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản? <a href="./index.php"
                                    class="link-primary">Đăng nhập</a></p>
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