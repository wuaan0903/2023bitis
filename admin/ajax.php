
<?php
session_start();
include_once('connect.php');
$action = $_GET['action'];

if($action == "add-to-cart")
{
$pid = $_POST['pid'];
$sql_chitiet= mysqli_query($mysqli,"SELECT * FROM product WHERE id='$pid'");
while($row_chitiet = mysqli_fetch_array($sql_chitiet)) {

$name=  $row_chitiet['name'] ;
$image =  $row_chitiet['image'];
$price = $row_chitiet['price'];

$qty = $_POST['qty'];
$size = $_POST['size'];


if(isset($_SESSION['login_user_id'])){
$save = mysqli_query($mysqli,"INSERT INTO cart (user_id,product_id,product_name,product_image,price,size,soluong) VALUES ('".$_SESSION['login_user_id']."','$pid','$name','$image','$price','$size','$qty')");
}
else{
    echo 1;
}

}
}
if($action == "delete-sp")
{
    $pid = $_POST['pid'];
    $delete = mysqli_query($mysqli,"DELETE FROM cart WHERE id='$pid'");
}
if($action == "delete-all")
{
    $data = $_POST['data'];
    if(isset($_SESSION['login_user_id'])){
        $delete = mysqli_query($mysqli,"DELETE FROM cart WHERE user_id='$data'");
    }
    else {
        $delete = mysqli_query($mysqli,"DELETE FROM cart WHERE cilent_ip='$data'");
    }
}
if($action == "login")
{
$username = $_POST['username'];
$password = $_POST['password'];

$qry = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
$rowCount = mysqli_num_rows($qry);

if ($rowCount > 0) {
    $row = mysqli_fetch_assoc($qry);
    foreach ($row as $key => $value) {
        if ($key !== 'password' && !is_numeric($key)) {
            $_SESSION['login_'.$key] = $value;
        }
    }
    echo 1;
} else {
    echo 3;
}

}



if($action == "login2")
{
$email = $_POST['email'];
$password = $_POST['password'];

$qry = mysqli_query($mysqli, "SELECT * FROM user_info WHERE email = '$email' AND pass = '$password'");
$rowCount = mysqli_num_rows($qry);

if ($rowCount > 0) {
    $row = mysqli_fetch_assoc($qry);
    foreach ($row as $key => $value) {
        if ($key !== 'password' && !is_numeric($key)) {
            $_SESSION['login_'.$key] = $value;

        }

    }
    echo 2;
} 
else {
    echo 3;
}

}


if($action=="logout")
{
    session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:index.php");
}
if($action=="logout2")
{
    session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:../index.php");
}

if($action=="register")
{
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $pass =  $_POST['pass'];
    $gender =  $_POST['gender'];

    $qry = mysqli_query($mysqli, "SELECT * FROM user_info WHERE email = '$email'");
    $rowCount = mysqli_num_rows($qry);
    if($rowCount>0)
    {
        echo 0;
    }
    else {
        echo 1;
        $insert = mysqli_query($mysqli,"INSERT INTO user_info (first_name,last_name,gender,email,pass,mobile) VALUES ('$firstname','$lastname','$gender','$email','$pass','$phone')");
    }
    
}

?>

