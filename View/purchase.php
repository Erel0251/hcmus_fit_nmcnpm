<?php
session_start();

include "../Model/db_connect.php";
include "../Model/datalist.php";

$success = isset($_GET['Success']) ? $_GET['Success'] : "";

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
    <script>
        let text = '<?php echo $success ?>';
    </script>

    <title>Quản lý căn tin</title>
</head>

<body onload="if (text != '' ) alert(text)">
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">

            <!-- Header -->
            <?php include "./header.php" ?>


            <!-- Body menu -->
            <div class="row overflow-auto " style="height: 460px">

                <div class="row h2 p-0 text-primary justify-content-center ">Đơn thanh toán</div>

                <form class="row justify-content-center" action="../Control/execute-purchase.php" method="POST" id="bill" style="margin: 0 auto;">
                    <div class="col-4">

                        <!-- Mã đơn input -->
                        <input type="hidden" name="madon" value="<?php echo $madon ?>">
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="showmadon">Mã đơn: </label>
                            <input type="text" id="showmadon" class="col form-control" value="<?php echo $madon ?>" disabled/>
                        </div>


                        <!-- Username input -->
                        <div class="row my-3 form-outline d-flex align-items-center">
                            <label class="col form-label" for="username">User: </label>
                            <input list="nguoi_dung" id="username" name="username" class="col form-control" onchange="checkUserList(this)" required />

                        </div>

                        <!-- Họ tên input -->
                        <div class="row my-2 form-outline d-flex align-items-center ">
                            <label class="col form-label" for="fullname">Họ tên</label>
                            <input type="text" id="fullname" class="col form-control" value="" disabled />
                        </div>


                        <!-- Giới tính input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="gender">Giới tính</label>
                            <input type="text" id="gender" class="col form-control" value="" disabled />
                        </div>

                        <!-- Ngày input -->
                        <div class="row my-2 form-outline d-flex align-items-center">
                            <label class="col form-label" for="date">Ngày thanh toán</label>
                            <input type="datetime-local" id="date" name="date" class="col form-control" value="<?php echo $currentDate ?>" />
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

                <div class="row mb-1 align-items-center justify-content-end">
                    <div class="col-4 h4 text-danger" >Thành tiền: <span id="total">0</span> đ</div>
                    <button type="button" form="bill" id="btnSubmit" class="col-2 btn text-white" onclick="purchaseSubmit()"
                            style="border-radius: 8rem; padding: 0.75rem 2rem; background: #80ff80;">Thanh toán</button>
                </div>

            </div>
        </div>

        <datalist id="nguoi_dung">
            <?php foreach ($nguoi_dung as $value) { ?>
                <option value="<?php echo $value['USERNAME']; ?>" data-fullname="<?php echo $value['HOTEN']; ?>" data-gender="<?php echo $value['GIOITINH']; ?>"></option>
            <?php } ?>
        </datalist>

        <datalist id="mat_hang">
            <?php foreach ($mat_hang as $value) { ?>
                <option value="<?php echo $value['TENHANG']; ?>" data-mahang="<?php echo $value['MAHANG']; ?>" data-dongia="<?php echo $value['DONGIA']; ?>"></option>
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