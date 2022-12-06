<?php
session_start();
include "../Model/db_connect.php";
$username = $_SESSION['username'];
$sql = "SELECT * FROM `nguoi_dung` WHERE `USERNAME` LIKE '$username'";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();
$imagepath = $row['IMAGE'] ?? '../images/png/profile.png';

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

            <?php include "./header.php" ?>


            <!-- Body menu -->
            <form action="../Control/update-profile.php" method="post" enctype="multipart/form-data" class="row overflow-auto" style="height: 500px">
                <div class="col-md-6 p-0 m-0 d-flex flex-column justify-content-center align-items-center">
                    <img src="<?php echo $imagepath ?>" class="img rounded" style="width: 300px; height: auto;" alt="profile">
                    <div class="row mt-3 align-items-center">
                    <input class="col" type="file" name="image" accept="image/*"/>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center align-items-center">

                    <div class="w-75">
                        <div class="row h2 justify-content-center " style="color: #FD0000">Thông tin cá nhân</div>

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


                        <!-- Họ tên input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="fullname">Họ và tên:</label>
                            <input type="text" id="fullname" name="fullname" class="col form-control" value="<?php echo $row['HOTEN'] ?>" required />
                        </div>


                        <!-- Username input -->
                        <div class="row my-3 ">
                            <div class="col">Tên đăng nhập:</div>
                            <div class="col h6"><?php echo $row['USERNAME'] ?></div>
                        </div>


                        <!-- Email input -->
                        <div class="row my-2 form-outline d-flex align-items-center ">
                            <label class="col form-label" for="email">Email:</label>
                            <input type="email" id="email" name="email" class="col form-control" value="<?php echo $row['EMAIL'] ?>" />
                        </div>


                        <!-- Phonenumber input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="sdt">Số điện thoại:</label>
                            <input type="tel" id="sdt" name="sdt" class="col form-control" value="<?php echo $row['SDT'] ?>" />
                        </div>

                        <!-- Role input -->
                        <div class="row my-3 ">
                            <div class="col">Chức vụ:</div>
                            <div class="col h6"><?php echo $row['ROLE'] ?></div>
                        </div>

                        <!-- Gender input -->
                        <div class="row my-2 align-items-center ">

                            <label class="col-6 form-check-label" for="">Giới tính:</label>

                            <div class="col form-outline">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="Nam" <?php if ($row['GIOITINH'] == 'Nam') echo 'checked' ?>>
                                <label class="form-check-label" for="gender1">Nam</label>
                            </div>
                            <div class="col form-outline">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="Nữ" <?php if ($row['GIOITINH'] == 'Nữ') echo 'checked' ?>>
                                <label class="form-check-label" for="gender2">Nữ</label>
                            </div>
                        </div>

                        <!-- Date input -->
                        <div class="row my-2 form-outline d-flex align-items-center ">
                            <label class="col form-label" for="date">Ngày sinh:</label>
                            <input type="date" id="date" name="date" class="col form-control" value="<?php echo $row['NGAYSINH'] ?>" required />
                        </div>

                        <!-- Change Profile -->
                        <div class="text-center my-2 ">
                            <button type="submit" class="btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #CA9FC8;">Lưu</button>
                        </div>

                    </div>
            </form>
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