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

    <!-- ========== CSS and Javascript  ========== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    

    <title>Quản lý căn tin</title>
</head>

<body>
    <div class="vh-100 d-flex align-items-center justify-content-center bg-secondary">
        <div class="container w-75 bg-light">


            <!-- Header -->
            <?php include "./header.php" ?>


            <!-- Body menu -->
            <div class="" style="height: 500px">

                <button data-modal-target="#form-modal" class="btn btn-primary m-3 "> test</button>

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
                        </div>

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

                <div id="overlay"></div>

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
<script src="../assets/js/script.js"></script>
</body>

</html>