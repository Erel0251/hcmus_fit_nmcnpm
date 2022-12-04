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

        <button class="btn btn-outline-secondary" type="button" id="button-addon"><img src="./images/png/icons/001-loupe.png" alt=""></button>
    </div>


    <!-- Logo -->
    <div class="">
        <a href="./home.php" class="h2 text-dark text-decoration-none">
            <img src="./images/svg/logo.svg" style="display: inline-block; width: 80px; height: auto;" alt="HCMUS"> HCMUS Canteen
        </a>
    </div>


    <!-- Thẻ này để đẩy logo ra giữa, ko để làm gì cả -->
    <div class="w25"></div>


    <!-- Profile -->
    <div class="dropdown">
        <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./images/png/icons/004-user.png" alt="">
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
            <li>
                <h3 class="dropdown-header text-end">Xin chào <span class="text-primary"><?php echo $_SESSION['fullname'] ?></span>
                </h3>
            </li>
            <li><a class="dropdown-item text-end" href="./Control/logout.php">Đăng xuất</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <h4 class="dropdown-header">Bạn là <span class="text-warning"> <?php echo $_SESSION['role'] ?></span></h4>
            </li>
            <li><a class="dropdown-item" href="./profile.php">Thông tin cá nhân</a></li>
            <li><a class="dropdown-item" href="./password.php">Đổi mật khẩu</a></li>
        </ul>
    </div>

</div>

<!-- Image -->
<div class="row position-relative">
    <img src="./images/svg/background2.svg" class="img p-0" style="filter: brightness(70%)" alt="">
    <div class="text-white position-absolute" style="left: 25px; top: 10px;">
        <div class="h4">Cần 1 bữa ăn ngon bổ rẻ?</div>
        <div class="h5">Đừng lo</div>
        <div class="h5">Căn tin tự nhiên bao no</div>
    </div>
</div>