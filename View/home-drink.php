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
            <div class="row bg-light ">
                <a href="./home.php" class="col h3 p-1 rounded-top bg-secondary text-center text-decoration-none text-dark">
                    Đồ ăn
                </a>

                <a href="#" class="col h3 p-1 rounded-top bg-white text-center text-decoration-none text-danger">
                    Thức uống
                </a>
                
            </div>


            <!-- Body menu -->
            <div class="row overflow-auto " style="height: 450px">

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/drink/drink01.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Trà ô long Tea plus
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 10.000 đ</div>
                        <div class="h6 text-primary">Còn 555</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/drink/drink02.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Coca cola
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 10.000 đ</div>
                        <div class="h6 text-primary">Còn 568</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/drink/drink03.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Trà xanh C2
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 10.000 đ</div>
                        <div class="h6 text-primary">Còn 764</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/drink/drink04.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Nước suối
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 5.000 đ</div>
                        <div class="h6 text-primary">Còn 646</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/drink/drink05.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Trà xanh không độ
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 10.000 đ</div>
                        <div class="h6 text-primary">Còn 777</div>
                    </div>
                </div>

                <div class="col-4 border border-secondary d-flex flex-column justify-content-center">
                    <img src="../images/svg/menu/drink/drink06.svg" class="w-75 align-self-center" alt="">
                    <div class="h4 text-center text-dark">
                        Sprite
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="h6 text-secondary">Giá: 10.000 đ</div>
                        <div class="h6 text-primary">Còn 442</div>
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