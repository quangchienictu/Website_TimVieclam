<?php 
	include("control/master_control.php");
	session_start();
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$pos_username = strpos($username, ' ');
		$pos_password = strpos($password, ' ');
		if(	$pos_username==true || $pos_password ==true){
			$_SESSION['dangky'] ="Tên tài khoản hoặc mật khẩu không được có khoảng trắng";
		}else 
		{
			if(strcmp($password,$password2)==0){
				$dk = new master_control();
				$dk->dangky($username,$password);
				$dk->create_info_doanhnghiep($username);
				unset($_SESSION['dangky']);
			}

			else{
				$_SESSION['dangky'] ="Nhập lại mật khẩu không đúng !";
			}
		}
		}
	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NQC</title>
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
	<style type="text/css">
	
	
	</style>
</head>
<body>
	<a class="navbar-brand" href="index.php"><img class="logo" src="public/img/logo.png" width="150px"></a>
 	<form class="box" action="" method="POST">
		<h1>Đăng ký</h1>
		<input id="username" type="text" name="username" maxlength="20" minlength="3" placeholder="Tài khoản" required="">
		<input id="password" type="password" name="password"  maxlength="20" minlength="3" placeholder="Mật khẩu" required="">
		<input id="password2" type="password" name="password2"  maxlength="20" minlength="1" placeholder="Nhập lại mật khẩu" required="">
		<p style="color: red;"><?php if(isset($_SESSION['dangky']))echo $_SESSION['dangky']; ?></p>
		<p style="color: red;"><?php if(isset($_SESSION['err']))echo "Tài khoản đã tồn tại !";unset($_SESSION['err']) ?></p>
		<p style="color: green;"><?php if(isset($_SESSION['ok']))echo "Đăng ký thành công !"; unset($_SESSION['ok'])?></p>
		<input type="submit" name="submit" value="Đăng ký">
		<a class="quaylai" href="dangnhap.php">Đăng nhập</a>
	</form>
</body>
</html>