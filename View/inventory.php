<?php
session_start();
include "../Model/db_connect.php";

$sql = "SELECT ct.MAHANG, ct.MAPHIEUNHAP, ct.SOLUONG, hang.TENHANG, phieu.NGAYNHAP, phieu.DIACHIKHO 
        FROM ct_nhap ct 
        JOIN mat_hang hang on ct.MAHANG = hang.MAHANG
        JOIN phieu_nhap_hang phieu on ct.MAPHIEUNHAP = phieu.MAPHIEUNHAP;";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$listInventory = array();

while ($row = $query->fetch()) {
    array_push($listInventory, $row);
}

$tenPerPage = ceil(count($listInventory) / 10);
$page = isset($_GET['page']) ? $_GET['page'] - 1 : 0;
$prev = $page <= 0 ? "disabled" : "";
$next = $page >= $tenPerPage - 1 ? "disabled" : "";


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

    <!-- ========== CSS ========== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">

            <!-- Header -->
            <?php include "./header.php" ?>

            <!-- Main -->
            <div class="container" style="height:480px">
                <!-- Header -->
                <div class="row h2 mt-1 justify-content-center " style="color: #FD0000">Quản lý hàng tồn</div>

                <div class="row h5" style="margin-left: 120px;">Lịch sử nhập:</div>


                <!-- Body -->
                <div class="row overflow-auto border border-dark" style="width: 90%; height: 320px; margin: auto;">
                    <table class="table table-bordered table-hover text-center m-0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mặt hàng nhập</th>
                                <th>Ngày nhập</th>
                                <th>Số lượng nhập</th>
                                <th>Nhập từ</th>
                                <th class="w-25">Cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = $page * 10; $i < min(($page + 1) * 10, count($listInventory)); $i++) { ?>
                                <tr>
                                    <form action="../Control/update-inventory.php" method="POST">

                                        <!-- KEY để truy vấn trong database-->
                                        <input type="hidden" name="mahang" value="<?php echo $listInventory[$i]['MAHANG'] ?>" />
                                        <input type="hidden" name="maphieu" value="<?php echo $listInventory[$i]['MAPHIEUNHAP'] ?>" />
                                        
                                        <!-- STT -->
                                        <td> <?php echo $i + 1; ?> </td>

                                        <!-- Tên mặt hàng nhập về -->
                                        <td>
                                            <input type="text" id="<?php echo "name" . $i ?>" name="tenhang" class="form-control-plaintext align-center" value="<?php echo $listInventory[$i]['TENHANG'] ?>" readonly/>
                                        </td>

                                        <!-- Ngày nhập hàng -->
                                        <td>
                                            <input type="date" id="<?php echo "date" . $i ?>" name="ngaynhap" class="form-control-plaintext" value="<?php echo $listInventory[$i]['NGAYNHAP'] ?>" readonly/>
                                        </td>

                                        <!-- Số lượng nhập -->
                                        <td>
                                            <input type="text" id="<?php echo "count" . $i ?>" name="soluong" class="form-control-plaintext" value="<?php echo $listInventory[$i]['SOLUONG'] ?>" readonly/>
                                        </td>

                                        <!-- Địa chỉ mặt hàng cung cấp -->
                                        <td>
                                            <input type="text" id="<?php echo "location" . $i ?>" name="diachi" class="form-control-plaintext" value="<?php echo $listInventory[$i]['DIACHIKHO'] ?>" readonly/>
                                        </td>

                                        <!-- các nút chỉnh sửa thông tin -->
                                        <td class="p-0">
                                            <!-- cập nhật dữ liệu lên database -->
                                            <button type="submit" name="update" value="update" class="btn btn-outline-success m-1">
                                                <img src="../assets/images/png/icons/upload.png" style="width: 18px; height: 18px" alt="">
                                            </button>

                                            <!-- cập nhật dữ liệu thuần ở front-end -->
                                            <button type="button" id="<?php echo "button" . $i ?>" onclick="editButton('<?php echo $i ?>')" class="btn btn-outline-warning m-1">
                                                <img src="../assets/images/png/icons/editing.png" id="<?php echo "image" . $i ?>" style="width: 18px; height: 18px" alt="">
                                            </button>

                                            <!-- xóa dữ liệu khỏi database -->
                                            <button type="submit" name="delete" value="delete" class="btn btn-outline-danger m-1">
                                                <img src="../assets/images/png/icons/delete.png" style="width: 18px; height: 18px" alt="">
                                            </button>
                                        </td>

                                    </form>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Footer -->
                <div class="row mt-2 justify-content-spacebetween" style="margin: 0px 120px;">

                    <!-- Pagination -->
                    <nav class="col" aria-label="Page navigation example">
                        <ul class="pagination">

                            <!-- Prev button -->
                            <li class="page-item <?php echo $prev ?>">
                                <a class="page-link" href="./inventory.php?page=<?php echo $page ?>">Previous</a>
                            </li>

                            <!-- Number button -->
                            <?php for ($i = 1; $i <= $tenPerPage; $i++) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="./inventory.php?page=<?php echo $i ?>"> <?php echo $i ?></a>
                                </li>
                            <?php } ?>


                            <!-- Next button -->
                            <li class="page-item <?php echo $next ?>">
                                <a class="page-link" href="./inventory.php?page=<?php echo $page + 2 ?>">Next</a>
                            </li>
                        </ul>
                    </nav>

                    <!--
                    <a href="#" class="col-3 btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #80ff80;">Xác nhận</a>
                            -->
                    <button data-modal-target="#form-modal" class="col-3 btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.5rem; background: #80ff80;"> test</button>
                    <div class="form-modal container" id="form-modal">
                        <form action="">
                            <div class="text-center h1 pb-2" style="color: #ED00F2; border-bottom: 1px solid black">HEADER</div>

                            <div class="form-outline ">
                                <label class="form-label" for="username">Input: </label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" />
                            </div>

                            <div class="form-outline ">
                                <label class="form-label" for="username">Input: </label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" />
                                <div class="form-outline ">
                                    <label class="form-label" for="username">Input: </label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" />
                                </div>


                                <!-- Submit -->
                                <div class="row my-2 text-center justify-content-sm-between">
                                    <!--
                            <button type="button" class="btn btn-lg text-white"
                                style="border-radius: 8rem; padding-left: 2.5rem; padding-right: 2.5rem; background: #CA9FC8;">Đăng
                                ký</button>
                            -->
                                    <button data-close-button class="col-4 btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.0rem; background: #9C9C9C;">Hủy</button>

                                    <button type="submit" class="col-4 btn text-white" style="border-radius: 8rem; padding: 0.75rem 2.0rem; background: #80FF80;">Xác nhận</button>
                                </div>
                        </form>

                    </div>

                </div>
            </div>



        </div>
    </div>

</body>

</html>