<?php
session_start();
include "../Model/db_connect.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDate = date('Y-m-d', time());
$total = 0;

if (isset($_GET['date'])) {
    $date = $_GET['date'] ?: $currentDate;
} else {
    $date = $currentDate;
}

$sql = "SELECT hang.TENHANG, hang.SOLUONG, hang.LOAIHANG, SUM(ct.SOLUONG) AS 'DABAN', hang.DONGIA, SUM(ct.THANHTIEN) AS 'THANHTIEN', don.THOIGIAN
        FROM ct_don ct 
        INNER JOIN don_hang don ON ct.MADON = don.MADON
        INNER JOIN mat_hang hang ON ct.MAHANG = hang.MAHANG
        WHERE DATE(don.THOIGIAN) = '$date'
        GROUP BY hang.MAHANG;";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$count = 0;
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
                <div class="row h2 m-3  justify-content-center " style="color: #FD0000">Doanh thu và hàng tồn theo ngày
                </div>

                <form action="./day-revenue.php" method="get" class="mb-3 d-flex flex-row align-items-center" style="margin-left: 120px;">

                    <div class="h5">Ngày: </div>
                    <input type="date" id="date" name="date" class="w-25 mx-3 form-control" value="<?php echo $date ?>" />
                    <button type="submit" class="btn btn-primary">Xem</button>


                </form>


                <!-- Body menu -->
                <div class="row overflow-auto" style="width: 80%; height: 270px; margin: auto;">
                    <table class="table table-bordered table-hover text-center ">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Số lượng</th>
                                <th>Đã bán</th>
                                <th>Tồn</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php while ($row = $query->fetch()) { ?>
                                <tr>
                                <td>
                                    <?php echo ++$count?>
                                </td>
                                <td>
                                    <?php echo $row['TENHANG']?>
                                </td>
                                <td>
                                    <?php echo $row['SOLUONG']?>
                                </td>
                                <td>
                                    <?php echo $row['DABAN']?>
                                </td>
                                <td>
                                    <?php echo $row['LOAIHANG'] == 'Đồ ăn' ? 0 : $row['SOLUONG'] - $row['DABAN']?>
                                </td>
                                <td>
                                    <?php echo number_format($row['DONGIA'])?> đ
                                </td>
                                <td>
                                    <?php echo number_format($row['THANHTIEN']); $total += $row['THANHTIEN']?> đ
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="row h5 justify-content-end" style="margin-right: 180px;">
                    <div class="col-2">Tổng cộng:</div>
                    <div class="col-1" style="color: #FF0000;"><?php echo number_format($total)?>đ</div>
                </div>

                <div class="row justify-content-end" style="margin-right: 120px;">
                    <a href="#" class="col-2 btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #80ff80;">Xác nhận</a>
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