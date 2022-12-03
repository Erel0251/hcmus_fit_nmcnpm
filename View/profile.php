<?php
session_start();
include "../Model/db_connect.php";
$username = $_SESSION['username'];
$sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username'";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();
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

                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"></button>
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

                    <button class="btn btn-outline-secondary" type="button" id="button-addon"><img src="../images/png/icons/001-loupe.png" alt=""></button>
                </div>


                <!-- Logo -->
                <div class="">
                    <a href="./home.php" class="h2 text-dark text-decoration-none">
                        <img src="../images/svg/logo.svg" style="display: inline-block; width: 80px; height: auto;" alt="HCMUS"> HCMUS Canteen
                    </a>
                </div>


                <!-- Thẻ này để đẩy logo ra giữa, ko để làm gì cả -->
                <div class="w25"></div>


                <!-- Profile -->
                <div class="dropdown">
                    <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../images/png/icons/004-user.png" alt="">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <h3 class="dropdown-header text-end">Xin chào <span class="text-primary">20120485</span>
                            </h3>
                        </li>
                        <li><a class="dropdown-item text-end" href="../index.php">Đăng xuất</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <h4 class="dropdown-header">Bạn là <span class="text-warning">Sinh viên</span></h4>
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


            <!-- Body menu -->
            <div class="row overflow-auto" style="height: 500px">
                <div class="col-md-6 p-0 m-0 d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/png/profile.png" class="img" style="width: 50%; height: auto;" alt="profile">
                    <a href="#" class="btn text-white border-secondary" style="padding: 0.75rem 2.5rem; margin-top: 1rem; background: #00FFE0;">Đổi avatar</a>
                </div>


                <div class="col-md-6 d-flex justify-content-center align-items-center">

                    <form action="../Control/update-profile.php" method="post" class="w-75">
                        <div class="row h2 justify-content-center " style="color: #FD0000">Thông tin cá nhân</div>

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
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="fullname">Họ và tên:</label>
                            <input type="text" id="fullname" name="fullname" class="col form-control" value="<?php echo $row['HOTEN']?>" required/>
                        </div>


                        <!-- Username input -->
                        <div class="row my-3 ">
                            <div class="col">Tên đăng nhập:</div>
                            <div class="col h6"><?php echo $row['USERNAME'] ?></div>
                        </div>


                        <!-- Email input -->
                        <div class="row my-2 form-outline d-flex align-items-center ">
                            <label class="col form-label" for="email">Email:</label>
                            <input type="email" id="email" name="email" class="col form-control" value="<?php echo $row['EMAIL']?>" required/>
                        </div>


                        <!-- Phonenumber input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="sdt">Số điện thoại:</label>
                            <input type="tel" id="sdt" name="sdt" class="col form-control" value="<?php echo $row['SDT']?>" required/>
                        </div>

                        <!-- Role input -->
                        <div class="row my-3 ">
                            <div class="col">Chức vụ:</div>
                            <div class="col h6"><?php echo $row['ROLE']?></div>
                        </div>

                        <!-- Gender input -->
                        <div class="row my-2 align-items-center ">

                            <label class="col-6 form-check-label" for="">Giới tính:</label>

                            <div class="col form-outline">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="Nam" <?php if ($row['GIOITINH'] == 'Nam') echo 'checked' ?> >
                                <label class="form-check-label" for="gender1">Nam</label>
                            </div>
                            <div class="col form-outline">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="Nữ" <?php if ($row['GIOITINH'] == 'Nữ') echo 'checked' ?>>
                                <label class="form-check-label" for="gender2">Nữ</label>
                            </div>
<!--
                            <div class="col form-outline">
                                <input type="checkbox" id="" class="col form-check-input" checked />
                                <label class="form-check-label me-3" for="">Nam</label>

                                <input type="checkbox" id="" class="col form-check-input" />
                                <label class="form-check-label" for="">Nữ</label>
                            </div>
-->
                        </div>

                        <!-- Date input -->
                        <div class="row my-2 form-outline d-flex align-items-center ">
                            <label class="col form-label" for="date">Ngày sinh:</label>
                            <input type="date" id="date" name="date" class="col form-control" value="<?php echo $row['NGAYSINH']?>" required/>
                        </div>

                        <!-- Change Profile -->
                        <div class="text-center my-2 ">
                            <button type="submit" class="btn text-white"
                                style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #CA9FC8;">Lưu</button>
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