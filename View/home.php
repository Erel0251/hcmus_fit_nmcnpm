<?php
session_start();

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


            <!-- Header menu -->
            <div class="row ">
                <a href="#" class="col h3 p-1 rounded-top bg-white text-center text-decoration-none text-danger">
                    Đồ ăn
                </a>
                <a href="./home-drink.php" class="col h3 p-1 rounded-top bg-secondary text-center text-decoration-none text-dark">
                    Thức uống
                </a>
            </div>


            <!-- Body menu -->
            <div class="row overflow-auto " style="height: 450px">

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/food/food01.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Nui xào bò
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 30.000 đ</div>
                        <div class="h6 text-primary">Còn 1000</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/food/food02.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Mỳ Ý
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 30.000 đ</div>
                        <div class="h6 text-primary">Còn 1234</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/food/food03.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Bún bò
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 30.000 đ</div>
                        <div class="h6 text-primary">Còn 645</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/food/food04.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Hủ tiếu
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 30.000 đ</div>
                        <div class="h6 text-primary">Còn 466</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/food/food05.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Cơm trưa
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 30.000 đ</div>
                        <div class="h6 text-primary">Còn 777</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/food/food06.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Bánh mì
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 15.000 đ</div>
                        <div class="h6 text-primary">Còn 1432</div>
                    </div>
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