<?php
session_start();
include "../Model/db_connect.php";


if (isset($_GET['keyword'])) {
    $min = $_GET['min'] ?: 0;
    $max = $_GET['max'] ?: 100000;
    $minmax = " WHERE `DONGIA` >= " . $min . " AND `DONGIA` <= " . $max;
    $keyword = $_GET['keyword'] ? " AND `TENHANG` LIKE '%" . $_GET['keyword'] . "%'": '';
    $type = " AND LOAIHANG LIKE ''";

    if (filter_has_var(INPUT_GET, 'type')){
        $temp = array_map(fn ($value) =>'\'' . $value . '\'',$_GET['type']);
        
        $type = " AND `LOAIHANG` IN (" . implode(", ", $temp) . ")";
          
    }

    $search = $minmax . $keyword . $type;
} else {
    $search = "";
}

$sql = "SELECT * FROM `mat_hang`" . $search;
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

            <?php include "./header.php" ?>


            <!-- Header menu 
                    <div class="row ">
                <a href="#" class="col h3 p-1 rounded-top bg-white text-center text-decoration-none text-danger">
                    Đồ ăn
                </a>
                <a href="./home-drink.php" class="col h3 p-1 rounded-top bg-secondary text-center text-decoration-none text-dark">
                    Thức uống
                </a>
            </div>
            -->


            <!-- Body menu -->
            <div class="row overflow-auto mt-1 border border-black justify-content-center align-items-center" style="height: 500px; border-width: 20px;">
                <?php while ($row = $query->fetch()) { $count++;?>
                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="<?php echo $row['IMAGE'] ?>" class="align-self-center" style="width: 350px; height: 200px;" alt="">
                    <div class="h4 text-center text-dark">
                    <?php echo $row['TENHANG'] ?>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: <?php echo number_format($row['DONGIA']) . "đ" ?></div>
                        <div class="h6 text-primary">Còn:  <?php echo number_format($row['SOLUONG']) ?></div>
                    </div>
                </div>
                <?php } ?>
                <?php if ($count == 0) {?>
                    <div class="h3 text-center align-itenms-center">
                        <i> Không tìm thấy mặt hàng bạn cần </i>
                    </div>
                <?php } ?>
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