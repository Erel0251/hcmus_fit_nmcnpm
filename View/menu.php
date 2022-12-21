<?php
session_start();
include "../Model/db_connect.php";

$sql = "SELECT * FROM `mat_hang`";
// WHERE `LOAIHANG` LIKE 'Đồ ăn'
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

    <!-- ========== CSS and Javascript  ========== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">


            <!-- Header -->
            <?php include "./header.php" ?>
           
            <!-- Body -->
            <a  class= "btn btn-primary" href="them.html ">Thêm </a>

            <div class="row overflow-auto mt-1 border border-black justify-content-center align-items-center" style="height: 500px; border-width: 20px;">
                <?php while ($row = $query->fetch()) { ?>
                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="<?php echo $row['IMAGE'] ?>" class="align-self-center" style="width: 350px; height: 200px;" alt="">
                    <div class="h4 text-center text-dark">
                    <?php echo $row['TENHANG'] ?>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-primary">Mã hàng:  <?php echo $row['MAHANG'] ?></div>
                        <div class="h6 text-secondary">Giá: <?php echo number_format($row['DONGIA']) . "đ" ?></div>
                        <div class="h6 text-primary">Còn:  <?php echo $row['SOLUONG'] ?></div>
                        <div>
                            
                            <a  href="sua.php?id=<?php echo $row['MAHANG'];?> ">Sửa </a>
                            <a onclick="return confirm('Bạn có muốn xóa món ăn này không?');" href="xoa.php?id=<?php echo $row['MAHANG'];?> ">Xóa </a>
                        </div>

                       
                        
                    </div>
                </div>
                <?php } ?>
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
<script src="../assets/js/script.js"></script>
</body>

</html>