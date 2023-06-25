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

    <title>Trang bán hàng trực tuyến của Biti's Việt Nam</title>
    <link rel="shortcut icon" type="image/jpg" href="https://cdn.haitrieu.com/wp-content/uploads/2022/02/Icon-Bitis.png">
  <title>Online Food Ordering System</title>
 	
<?php include('connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
*{ /*reset css */
    margin : 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: "Montserrat";
    background: #fff;
	height : calc(100%);
    margin: 0 auto;
}

.container {
    background-color: #fff;
    position: relative;
    overflow: hidden;
    max-width: 100%;
	height : 100vh;
}
.form-container {
    position: absolute;
	right:0;
    width: 34%;
    height: 100%;
    transition: 0.6s;

}
input {
    background-color: #eee;
    border-radius: 10px;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    transition: all 0.2s ease-out;
}
input:focus{
    box-shadow: 0 0 0 2px #338dbc;
    outline: none;
}
form {
    background-color: #fff;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 90px;
    height: 100%;
    text-align: center;
}
.form-container h1 {
    font-size: 25px;
    margin-bottom: 20px;
    letter-spacing: -1px;
}
.content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 50px;
    width: 100%;
    font-size: 14px;
    font-weight: 600;
}
.content .checkbox {
    display: flex;
    align-items: center;
    justify-content: center;
}
.pass-link {
    font-weight: normal;
}
a {
    text-decoration: none;
    color: #141414;
}
.content input {
    accent-color: #333;
    width: 12px;
    height: 12px;
}
.content label {
    font-style: 14px;
    user-select: none;
    padding-left: 5px;
}
button {
    cursor: pointer;
    border-radius: 20px;
    border: 1px solid #6cb5ff;
    background-color: #3C91E6;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    margin: 10px;
    padding: 12px 80px;
    letter-spacing: 0px;
    text-transform: capitalize;
    transition: 0.3s;
}
button:hover{
	background: #277dd2;
}



.overlay-container {
    position: absolute;
    left: 50%;
    width: 70%;
    height: 100%;
    overflow: hidden;
    transition: 0.6s;
    z-index: 100;
    transform: translate(-77%);
}
.overlay {
    background-image: url(https://mir-s3-cdn-cf.behance.net/project_modules/fs/11f45b112812255.601b5f212a172.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: #fff;
    position: relative;
    left: -50%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: 0.6s;
}
.overlay::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: linear-gradient( to right, rgb(0 105 255 / 16%) 40%, rgb(255 255 255) );
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
	left:25%;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: 0.6s;
}
</style>

<body>
	<div class="container">
		<div class="form-container">
		<form id="login-form">
                <h1>Đăng nhập</h1>
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
                <input type="password" id="password" name="password" placeholder="Mật khẩu">
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="">Lưu tài khoản</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Quên tài khoản ?</a>
                    </div>
                </div>
				<div class="alert-login" style="color: #f00;font-weight: 500;font-size: 13px;"></div>
                <button>Đăng nhập</button>
            </form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel">
				<h1 class="title" style="FONT-SIZE: 40px;background: #00000070;">WELCOME HOME</h1>
				</div>
			</div>
		</div>
	</div>

</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
		$(this).find('.alert-danger').remove();
		var $username = $('[name="username"]').val();
		var $password = $('[name="password"]').val();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:{ username : $username,
			password : $password
			},
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php';
				}
				else if(resp==3){
					$('.alert-login').prepend('<div class="alert-danger">Tên đăng nhập hoặc mật khẩu không chính xác</div>');
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>