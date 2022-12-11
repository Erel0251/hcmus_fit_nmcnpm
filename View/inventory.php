<?php
session_start();
include "../Model/db_connect.php";


$sql = "SELECT hang.TENHANG, phieu.NGAYNHAP, ct.SOLUONG, hang.DONGIA, phieu.DIACHIKHO 
        FROM ct_nhap ct 
        JOIN mat_hang hang on ct.MAHANG = hang.MAHANG
        JOIN phieu_nhap_hang phieu on ct.MAPHIEUNHAP = phieu.MAPHIEUNHAP;";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$stt = 0;

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
            <?php include "./header.php" ?>

            <!-- Main -->
            <div class="container" style="height:480px">
                <!-- Header menu -->
                <div class="row h2 mt-3 justify-content-center " style="color: #FD0000">Quản lý hàng tồn</div>

                <div class="row h5" style="margin-left: 120px;">Lịch sử nhập:</div>


                <!-- Body menu -->
                <div class="row overflow-auto" style="width: 80%; height: 350px; margin: auto;">
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
                        <?php while ($row = $query->fetch()) { ?>
                            <tr>
                                <td> <?php echo $stt; ++$stt;?> </td>
                                <td> <?php echo $row['TENHANG']?> </td>
                                <td> <?php echo $row['NGAYNHAP']?> </td>
                                <td> <?php echo $row['SOLUONG']?> </td>
                                <td> <?php echo $row['DONGIA']?> </td>
                                <td> <?php echo $row['DIACHIKHO']?> </td>
                            </tr>
                        <?php } ?>
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