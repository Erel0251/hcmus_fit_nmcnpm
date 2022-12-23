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
            <a  class= "btn btn-success" style="margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#ModalThem">
                <img  src="../assets/images/png/icons/them.png"  width= 50px; height= 50px>
             </a>

            <div class="row overflow-auto mt-1 border border-black justify-content-center align-items-center" style="height: 500px; border-width: 20px;">
                <?php while ($row = $query->fetch()) { ?>
                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="<?php echo $row['IMAGE'] ?>" class="align-self-center" style="margin-top: 18px; width: 350px; height: 200px;" alt="">
                    <div class="h4 text-center text-dark">
                    <?php echo $row['TENHANG'] ?>
                    </div>
                    <div style="margin-bottom: 10px;"class="d-flex flex-row justify-content-between">
                        <div class="h6 text-primary">Mã hàng:  <?php echo $row['MAHANG'] ?></div>
                        <div class="h6 text-secondary">Giá: <?php echo number_format($row['DONGIA']) . "đ" ?></div>
                        <div class="h6 text-primary">Còn:  <?php echo $row['SOLUONG'] ?></div>
                        

                       
                        
                    </div>
                    <div class="d-flex justify-content-end " style="margin-bottom: 7px;" >
                            
                            <a style="margin-right:7px"   class= "btn btn-warning"  href="sua.php?id=<?php echo $row['MAHANG'];?> ">
                            <img src="../assets/images/png/icons/editing.png" width= 18x; height= 18px>
                             </a>
                            <a class= "btn btn-danger" onclick="return confirm('Bạn có muốn xóa món ăn này không?');" href="xoa.php?id=<?php echo $row['MAHANG'];?> ">
                            <img  src="../assets/images/png/icons/delete.png" width= 18px; height= 18px>
                            </a>
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

<!-- Modal  Them-->
<div class="modal fade" id="ModalThem" tabindex="-1" role="dialog" aria-labelledby="ModalThemLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title col text-center" id="ModalThemLabel">Thêm món ăn</h2>
       
      </div>
      <div class="modal-body">
      <div class="container">
        
        <form action="them.php" method="post" id="formthem">
            <div class="form-group">
                 <label for="mahang">Mã hàng </label>
                 <input type="text" id ="mahang" class="form-control" name="mahang">
                 </div>
            <div class="form-group">
                <label for="tenhang">Tên hàng </label>
                 <input type="text" id ="tenhang" class="form-control" name="tenhang">
            </div>
            <div class="form-group">
                <label for="image">Image </label>
                 <input type="text" id ="image" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="loaihang">Loại hàng </label>
                 <input type="text" id ="loaihang" class="form-control" name="loaihang">
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá </label>
                 <input type="text" id ="dongia" class="form-control" name="dongia">
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng </label>
                 <input type="text" id ="soluong" class="form-control" name="soluong">
            </div>
            <br>
           
           
        </form>

    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" form ="formthem" class="btn btn-success">Thêm</button>
      </div>
    </div>
  </div>
</div>



</body>

</html>