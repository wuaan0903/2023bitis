<?php
include_once('admin/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="./assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="./assets/style.css"/>
    <link rel="stylesheet" href="./assets/responsive.css"/>
    <link rel="stylesheet" href="./assets/chitietspp.css"/>
    <title>Trang bán hàng trực tuyến của Biti's Việt Nam</title>
    <link rel="shortcut icon" type="image/jpg" href="https://cdn.haitrieu.com/wp-content/uploads/2022/02/Icon-Bitis.png">
</head>
<body>

    <div class="loader">
        <i class='bx bx-loader-circle bx-spin bx-rotate-90' ></i>
    </div>
    <?php
    include ('header.php');
   ?> 
    <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
    ?>
    
    <?php
    include ('footer.php')
    ?>
    <script src="js/mainn.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/owl.carousel.js"></script>

</body>
</html>