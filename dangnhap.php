<?php 
session_start();
include("control/master_control.php");
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$log = new master_control();
	$log->login($username,$password);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NQC</title>
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
	
</head>
<body>
	<a class="navbar-brand" href="index.php"><img class="logo" style="" src="public/img/logo.png" width="150px"></a>
	<form class="box" action="" method="POST">
		<h1>Đăng nhập</h1>
		<input type="text" name="username" placeholder="Tài khoản" minlength="3" required="">
		<input type="password" name="password" placeholder="Mật khẩu" minlength="3" required="">
		<p style="color: red;"><?php if(isset($_SESSION['thongbao']))echo $_SESSION['thongbao']; unset($_SESSION['thongbao']);?></p>
		<input type="submit" name="submit" value="Đăng nhập">
		<a class="dk" href="dangky.php">Chưa có tài khoản ?</a>
	</form>
</body>
</html>