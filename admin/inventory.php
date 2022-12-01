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
        <div class="container w-75 bg-light">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center">

                <!-- Search bar -->
                <div class="input-group w-25">

                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="true" aria-expanded="false"></button>
                    <ul class="dropdown-menu">
                        <form class="p-1">

                            <div class=""><strong>Giá</strong></div>
                            <div class="d-flex justify-content-center">
                                <input type="number" placeholder="Từ" class="w-50">
                                <div class="">-</div>
                                <input type="number" placeholder="Đến" class="w-50">
                            </div>

                            <div><strong>Tình trạng</strong></div>
                            <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Con" id="">
                                    <label class="form-check-label">Còn</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Het" id="">
                                    <label class="form-check-label">Hết</label>
                                </div>
                            </div>
                        </form>
                    </ul>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">

                    <button class="btn btn-outline-secondary" type="button" id="button-addon"><img
                            src="../images/png/icons/001-loupe.png" alt=""></button>
                </div>


                <!-- Logo -->
                <div class="">
                    <a href="./home.php" class="h2 text-dark text-decoration-none">
                        <img src="../images/svg/logo.svg" style="display: inline-block; width: 80px; height: auto;"
                            alt="HCMUS"> HCMUS Canteen
                    </a>
                </div>


                <!-- Thẻ này để đẩy logo ra giữa, ko để làm gì cả -->
                <div class="w25"></div>


                <!-- Profile -->
                <div class="dropdown">
                    <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../images/png/icons/004-user.png" alt="">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <h3 class="dropdown-header text-end">Xin chào <span class="text-primary">Admin</span>
                            </h3>
                        </li>
                        <li><a class="dropdown-item text-end" href="../index.php">Đăng xuất</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <h4 class="dropdown-header">Bạn là <span class="text-warning">Quản lý</span></h4>
                        </li>
                        <li><a class="dropdown-item" href="./profile.php">Thông tin cá nhân</a></li>
                        <li><a class="dropdown-item" href="./password.php">Đổi mật khẩu</a></li>
                        <li><a class="dropdown-item" href="./menu.php">Quản lý thực đơn</a></li>
                        <li><a class="dropdown-item" href="./inventory.php">Quản lý hàng tồn</a></li>
                    </ul>
                </div>

            </div>

            <!-- Image -->
            <div class="row position-relative">
                <img src="../images/svg/background2.svg" class="img p-0" style="filter: brightness(70%)" alt="">
                <div class="text-white position-absolute" style="left: 25px; top: 10px;">
                    <div class="h4">Cần 1 bữa ăn ngon bổ rẻ?</div>
                    <div class="h5">Đừng lo</div>
                    <div class="h5">Căn tin tự nhiên bao no</div>
                </div>
            </div>

            <!-- Main -->
            <div class="container" style="height:480px">
                <!-- Header menu -->
                <div class="row h2 mt-3 justify-content-center " style="color: #FD0000">Quản lý hàng tồn</div>

                <div class="row h5" style="margin-left: 120px;">Lịch sử nhập:</div>


                <!-- Body menu -->
                <div class="row overflow-auto" style="width: 80%; margin: auto;">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Ngày nhập</th>
                                <th>Số lượng nhập</th>
                                <th>Đơn giá</th>
                                <th>Nhập từ</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td>1</td>
                                <td>Trà xanh không độ</td>
                                <td>19/11/2022</td>
                                <td>2.000</td>
                                <td>10.000</td>
                                <td>Gò vấp</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>C2</td>
                                <td>19/11/2022</td>
                                <td>2.000</td>
                                <td>10.000</td>
                                <td>Q.10</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nước suối</td>
                                <td>20/11/2022</td>
                                <td>2.000</td>
                                <td>10.000</td>
                                <td>Q.12</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Trà xanh không độ</td>
                                <td>20/11/2022</td>
                                <td>2.000</td>
                                <td>10.000</td>
                                <td>Q.10</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Nước suôi</td>
                                <td>21/11/2022</td>
                                <td>2.000</td>
                                <td>10.000</td>
                                <td>Q.9</td>
                            </tr>
                            <tr>
                                <td>... </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="row justify-content-end" style="margin-right: 120px;">
                    <a href="#" class="col-2 btn text-white"
                        style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #80ff80;">Xác nhận</a>
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