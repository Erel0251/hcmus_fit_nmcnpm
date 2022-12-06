<!-- Header -->
<div class="d-flex justify-content-between align-items-center">

    <!-- Search bar -->
    <form action="./home.php" method="get" class="p-1 d-flex flex-row input-group w-25">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"></button>
        <ul class="dropdown-menu p-3">


            <div class=""><strong>Giá</strong></div>
            <div class="d-flex justify-content-center">
                <input type="number" name="min" min="0" max="100000" placeholder="Từ" class="w-50" />
                <div class=""> - </div>
                <input type="number" name="max" min="0" max="100000" placeholder="Đến" class="w-50" />
            </div>

            <div><strong>Loại hàng</strong></div>
            <div class="d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="type[]" value="Đồ ăn" id="food" checked/>
                    <label class="form-check-label" for="food">Đồ ăn</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="type[]" value="Thức uống" id="drink" checked/>
                    <label class="form-check-label" for="drink">Thức uống</label>
                </div>
            </div>

            <div><strong>Tình trạng</strong></div>
            <div class="d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="condition[]" value="Con" id="con" Checked/>
                    <label class="form-check-label" for="con">Còn</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="condition[]" value="Het" id="het" />
                    <label class="form-check-label" for="het">Hết</label>
                </div>
            </div>

        </ul>
        <input type="text" name="keyword" class="form-control" aria-label="Text input with dropdown button" />

        <button class="btn btn-outline-secondary" type="submit" id="button-addon"><img src="../images/png/icons/001-loupe.png" alt=""></button>
    </form>


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
            <img src="<?php echo $_SESSION['image'] ?>" class="img rounded-circle" style="width: 40px; height: auto;" alt="">
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
            <li>
                <h3 class="dropdown-header text-end">Xin chào <span class="text-primary"><?php echo $_SESSION['fullname'] ?></span>
                </h3>
            </li>
            <li><a class="dropdown-item text-end" href="../Control/logout.php">Đăng xuất</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <h4 class="dropdown-header">Bạn là <span class="text-warning"> <?php echo $_SESSION['role'] ?></span></h4>
            </li>
            <li><a class="dropdown-item" href="./profile.php">Thông tin cá nhân</a></li>
            <li><a class="dropdown-item" href="./password.php">Đổi mật khẩu</a></li>
            <?php if ($_SESSION['role'] == 'Quản lý') { ?>
                <li><a class="dropdown-item" href="./menu.php">Quản lý thực đơn</a></li>
                <li><a class="dropdown-item" href="./inventory.php">Quản lý hàng tồn</a></li>
            <?php } ?>
            <?php if ($_SESSION['role'] == 'Thu ngân') { ?>
                <li><a class="dropdown-item" href="./purchase.php">Lập hóa đơn</a></li>
                <li><a class="dropdown-item" href="./day-revenue.php">Tính doanh thu và hàng tồn theo ngày</a></li>
                <li><a class="dropdown-item" href="./month-revenue.php">Tính doanh thu tháng</a></li>
            <?php } ?>
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