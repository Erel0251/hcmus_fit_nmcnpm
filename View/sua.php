<?php
include "../Model/db_connect.php";

?>

<?php

$MAHANG = $_GET['id'];
$edit_sql = "SELECT * FROM `mat_hang` WHERE MAHANG='$MAHANG'";
$result = $conn->query($edit_sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$row = $result->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa món ăn</title>
    <!-- ========== Bootstrap CDN ========== -->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ========== Bootstrap     ========== -->
</head>

<body>
    <div class="container">
        <h1 class="col text-center">
            Form sửa món ăn
        </h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $MAHANG; ?>" id="">

            <div class="form-group">
                <label for="mahang">Mã hàng </label>
                <input type="text" id="mahang" class="form-control" name="mahang" value="<?php echo $row['MAHANG'] ?>">
            </div>
            <div class="form-group">
                <label for="tenhang">Tên hàng </label>
                <input type="text" id="tenhang" class="form-control" name="tenhang" value="<?php echo $row['TENHANG'] ?>">
            </div>
            <div class="form-group">
                <label for="image">Image </label>
                <input type="text" id="image" class="form-control" name="image" value="<?php echo $row['IMAGE'] ?>">
            </div>
            <div class="form-group">
                <label for="loaihang">Loại hàng </label>
                <input type="text" id="loaihang" class="form-control" name="loaihang" value="<?php echo $row['LOAIHANG'] ?>">
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá </label>
                <input type="text" id="dongia" class="form-control" name="dongia" value="<?php echo $row['DONGIA'] ?>">
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng </label>
                <input type="text" id="soluong" class="form-control" name="soluong" value="<?php echo $row['SOLUONG'] ?>">
            </div>
            <br>
            <div class="col text-center">
                <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>

        </form>

    </div>
</body>

</html>