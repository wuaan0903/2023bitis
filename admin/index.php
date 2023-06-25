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
    <link rel="stylesheet" href="../assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="../assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../assets/responsive.css"/>
    <link rel="stylesheet" href="../assets/adminpage.css"/>
    <title>Trang bán hàng trực tuyến của Biti's Việt Nam</title>
    <link rel="shortcut icon" type="image/jpg" href="https://cdn.haitrieu.com/wp-content/uploads/2022/02/Icon-Bitis.png">
 	

<?php
	session_start();
  if(!isset($_SESSION['login_id']))
    {header('location:login.php');}

 ?>

</head>

<style>
  .loader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #eee;
    bottom: 0;
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader i {
    font-size: 70px;
    color:  #3C91E6;
}

</style>

<body>
    <div class="loader">
        <i class='bx bx-loader-circle bx-spin bx-rotate-90' ></i>
    </div>
  <?php include 'sidebar.php' ?>
  <section id="content">
  <?php include 'navbar.php' ?>
  <main id="view-panel" >
      <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
  	<?php include $page.'.php' ?>
  </main>
  </section>
  


</body>
<script>


// Loader Page
$(window).on('load', function(e) {
    $('.loader').delay(1000).fadeOut('lows');
});



$('.li-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})



</script>