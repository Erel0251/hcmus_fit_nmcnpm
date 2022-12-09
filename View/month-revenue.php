<?php
session_start();
include "../Model/db_connect.php";

date_default_timezone_set('Asia/Hong_Kong');
$currentMonth = date('m', time());
$total = 0;

if (isset($_GET['month'])) {
    $month = $_GET['month'] ?: $currentMonth;
} else {
    $month = $currentMonth;
}

$days = cal_days_in_month(CAL_GREGORIAN, $month, 2022);

$sql = "SELECT SUM(ct.THANHTIEN) as 'THANHTIEN'
        FROM don_hang don 
        JOIN ct_don ct ON don.MADON = ct.MADON 
        WHERE MONTH(don.THOIGIAN) = '$month'
        GROUP BY DATE(don.THOIGIAN)";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
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


            <!-- Main -->
            <div class="container " style="height:490px">
                <!-- Header menu -->
                <div class="row h2 m-1 justify-content-center " style="color: #FD0000">Doanh thu tháng
                </div>

                <form action="./month-revenue.php" method="get" class="mb-3 d-flex flex-row align-items-center" style="margin-left: 120px;">

                    <div class="h5">Tháng: </div>
                    <select class="custom-select mx-2" id="dropdown" name="month">
                        <?php for ($i = 1; $i <=12; $i++) {?>
                            <option value="<?php echo $i ?>" <?php if ($i == $month) echo "selected"?>><?php echo $i ?></option>
                        <?php }?>
                    </select>
                    <button type="submit" class="btn btn-primary">Xem</button>

                </form>

                <!-- Body menu -->
                <div class="row overflow-auto" style="width: 80%; height: 330px; margin: auto;">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Ngày</th>
                                <th>Doanh thu</th>
                                <th>Ngày</th>
                                <th>Doanh thu</th>
                                <th>Ngày</th>
                                <th>Doanh thu</th>
                                <th>Ngày</th>
                                <th>Doanh thu</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php for ($i = 0; $i < $month/ 4; $i++ ) {?>
                            <tr>
                                <?php for ($j = 1; $j <=4; $j++) { ?>
                                <td> <?php echo $j + $i * 4 ?></td>
                                <td><?php echo ""?></td>
                                <?php } ?>
                            </tr>
                            <?php }?>
                            <tr>
                                <td>2</td>
                                <td>199.002.000</td>
                                <td>8</td>
                                <td>199.002.000</td>
                                <td>15</td>
                                <td>199.002.000</td>
                                <td>22</td>
                                <td>199.002.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>165.000.000</td>
                                <td>8</td>
                                <td>165.000.000</td>
                                <td>15</td>
                                <td>165.000.000</td>
                                <td>22</td>
                                <td>165.000.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>187.000.000</td>
                                <td>8</td>
                                <td>187.000.000</td>
                                <td>15</td>
                                <td>187.000.000</td>
                                <td>22</td>
                                <td>187.000.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>190.000.000</td>
                                <td>8</td>
                                <td>190.000.000</td>
                                <td>15</td>
                                <td>190.000.000</td>
                                <td>22</td>
                                <td>190.000.000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>140.000.000</td>
                                <td>8</td>
                                <td>140.000.000</td>
                                <td>15</td>
                                <td>140.000.000</td>
                                <td>22</td>
                                <td>140.000.000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>CN Nghỉ </td>
                                <td>8</td>
                                <td>CN Nghỉ </td>
                                <td>15</td>
                                <td>CN Nghỉ </td>
                                <td>22</td>
                                <td>CN Nghỉ </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row justify-content-between align-items-center" style="width: 80%; margin: auto;">
                    <div class="col-4 h5">Tổng cộng: <span style="color: #FF0000;">198.010.000</span></div>
                    <a href="#" class="col-3 btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #80ff80;">Xác nhận</a>
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