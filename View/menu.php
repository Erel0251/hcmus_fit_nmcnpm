<?php
session_start();
include "../Model/db_connect.php";

$sql = "SELECT COUNT(MAHANG) AS STT
        FROM mat_hang;";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();

$index = 0;

$mahang = "MH" . (sprintf("%03d\n", $row['STT'] + 1));

$sql = "SELECT * FROM `mat_hang`";
// WHERE `LOAIHANG` LIKE 'Đồ ăn'
$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

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

    <!-- ========== CSS and Javascript  ========== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
    <script>
        let text = '<?php echo $success ?>';
    </script>

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">


            <!-- Header -->
            <?php include "./header.php" ?>

            <!-- Body -->


            <div class="row overflow-auto mt-1 border border-black justify-content-center align-items-center" 
                 style="height: 500px; border-width: 20px;" >
                <?php while ($row = $query->fetch()) { $index++;?>
                    <div class="col-12 col-md-6 col-xl-4 px-3 border border-secondary btn btn-light d-flex flex-column justify-content-center" 
                    style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#Modal" onclick="updateModal(<?php echo $index ?>)">
                        <img src="<?php echo $row['IMAGE'] ?>" id="<?php echo "img" . $index ?>" data-src="<?php echo $row['IMAGE'] ?>" class="align-self-center mt-2" style="width: 350px; height: 200px;" alt="">
                        <div class="h4 text-center text-dark" id="<?php echo "tenhang" . $index ?>">
                            <?php echo $row['TENHANG'] ?>
                        </div>
                        <div style="margin-bottom: 10px;" class="d-flex flex-row justify-content-between" 
                             id="<?php echo "mahang" . $index ?>" 
                             data-mahang="<?php echo $row['MAHANG'] ?>"
                             data-loaihang="<?php echo $row['LOAIHANG'] ?>">
                            <div class="h6 text-secondary" >Giá: <span id="<?php echo "dongia" . $index ?>"><?php echo number_format($row['DONGIA']) ?></span> đ</div>
                            <div class="h6 text-primary" >Còn: <span id="<?php echo "soluong" . $index ?>"><?php echo $row['SOLUONG'] ?></span></div>
                        </div>

                        <!--
                        <div class="d-flex justify-content-end " style="margin-bottom: 7px;" >
                                
                                <a style="margin-right:7px"   class= "btn btn-warning"  href="sua.php?id=<?php echo $row['MAHANG']; ?> ">
                                <img src="../assets/images/png/icons/editing.png" width= 18x; height= 18px>
                                </a>
                                <a class= "btn btn-danger" onclick="return confirm('Bạn có muốn xóa món ăn này không?');" href="xoa.php?id=<?php echo $row['MAHANG']; ?> ">
                                <img  src="../assets/images/png/icons/delete.png" width= 18px; height= 18px>
                                </a>
                            </div>
                -->
                    </div>
                <?php } ?>

                <div class="col-4 align-items-center justify-content-center p-0 text-center">
                    <a class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#Modal" 
                        onclick="addModal(`<?php echo $mahang ?>`)">
                        <img src="../assets/images/png/icons/button.png" >
                    </a>
                </div>
            </div>




        </div>

        <!-- Modal  Them-->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalThemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title col text-center" id="ModalThemLabel">Thêm món ăn</h2>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <form action="../Control/update-menu.php" method="post" id="formthem">
                                <div class="form-group">
                                    <label for="mahang">Mã hàng </label>
                                    <input type="hidden" id="id" name="mahang" value="">
                                    <input type="text" id="mahang" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tenhang">Tên hàng </label>
                                    <input type="text" id="tenhang" class="form-control" name="tenhang" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image </label>
                                    <input type="text" id="image" class="form-control" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label for="loaihang">Loại hàng </label>
                                    <input list="loai_hang" id="loaihang" class="form-control" name="loaihang" required>
                                </div>
                                <div class="form-group">
                                    <label for="dongia">Đơn giá </label>
                                    <input type="nunber" id="dongia" class="form-control" name="dongia" required>
                                </div>
                                <div class="form-group">
                                    <label for="soluong">Số lượng </label>
                                    <input type="number" id="soluong" class="form-control" name="soluong" required>
                                </div>
                                <br>


                            </form>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" id="submit" name="add" value="" form="formthem" class="btn btn-success" onclick="submitButton()">Thêm</button>
                    </div>
                </div>
            </div>
        </div>

        <datalist id="loai_hang">
            <option value="Đồ ăn"></option>
            <option value="Thức uống"></option>
        </datalist>

</body>

</html>