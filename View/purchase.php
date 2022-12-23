<?php
session_start();

include "../Model/db_connect.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDate = date('Y-m-d', time());

$sql = "SELECT USERNAME, HOTEN, GIOITINH
        FROM nguoi_dung";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$nguoi_dung = array();

while ($row = $query->fetch()) {
    array_push($nguoi_dung, $row);
}

$sql = "SELECT MAHANG, TENHANG, DONGIA
        FROM mat_hang";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$mat_hang = array();

while ($row = $query->fetch()) {
    array_push($mat_hang, $row);
}


$sql = "SELECT COUNT(MADON) AS STT
        FROM `don_hang`;";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();

$madon = "MD" . (sprintf("%03d\n", $row['STT'] + 1));

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

    <!-- ========== CSS & Javascript ========== -->
    <script src="../assets/js/script.js"></script>

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">

            <!-- Header -->
            <?php include "./header.php" ?>


            <!-- Body menu -->
            <div class="row overflow-auto " style="height: 450px">

                <div class="row h2 mt-1 p-0  justify-content-center " style="color: #FD0000; height: 0rem;">Đơn thanh toán</div>

                <form class="row justify-content-center" action="./bill.php" method="POST" style="margin: 0 auto;">
                    <div class="col-4">

                        <!-- Mã đơn input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="madon">Mã đơn: </label>
                            <input type="text" id="madon" name="madon" class="col form-control" value="<?php echo $madon ?>" disabled />
                        </div>


                        <!-- Username input -->
                        <div class="row my-3 form-outline d-flex align-items-center">
                            <label class="col form-label" for="username">User: </label>
                            <input list="nguoi_dung" id="username" name="username" class="col form-control" onchange="checkUserList(this)" required />

                        </div>

                        <!-- Họ tên input -->
                        <div class="row my-2 form-outline d-flex align-items-center ">
                            <label class="col form-label" for="fullname">Họ tên</label>
                            <input type="text" id="fullname" name="fullname" class="col form-control" value="" disabled />
                        </div>


                        <!-- Giới tính input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="gender">Giới tính</label>
                            <input type="text" id="gender" name="gender" class="col form-control" value="" disabled />
                        </div>

                        <!-- Ngày input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="date">Ngày thanh toán</label>
                            <input type="date" id="date" name="date" class="col form-control" value="<?php echo $currentDate ?>" />
                        </div>

                    </div>


                    <div class="col-8">
                        <div class="overflow-auto" style="width: 90%; height: 320px; margin: auto;">
                            <table class="table table-bordered table-hover text-center m-0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mặt hàng</th>
                                        <th>Số lượng</th>
                                        <th>Số tiền</th>
                                        <th class="w-25">Cập nhật</th>
                                    </tr>
                                </thead>
                                <tbody id="body_table">
                                    <tr style="height: 2rem;" onclick="addRow()">
                                        <td colspan="5" style="margin: auto">
                                            <img src="../assets/images/png/icons/more.png" style="width: 18px; height: 18px" alt="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <datalist id="nguoi_dung">
            <?php foreach ($nguoi_dung as $value) { ?>
                <option value="<?php echo $value['USERNAME']; ?>" 
                        data-fullname="<?php echo $value['HOTEN']; ?>" 
                        data-gender="<?php echo $value['GIOITINH']; ?>"></option>
            <?php } ?>
        </datalist>

        <datalist id="mat_hang">
            <?php foreach ($mat_hang as $value) { ?>
                <option value="<?php echo $value['TENHANG']; ?>" 
                        data-mahang="<?php echo $value['MAHANG']; ?>" 
                        data-dongia="<?php echo $value['DONGIA']; ?>"></option>
            <?php } ?>
        </datalist>


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