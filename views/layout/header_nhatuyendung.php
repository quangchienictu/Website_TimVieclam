<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NQC</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
	<link rel="stylesheet" type="text/css" href="public/css/vieclam.css">
	<link rel="stylesheet" type="text/css" href="public/css/hoso.css">
	<link rel="stylesheet" type="text/css" href="public/css/chitietvieclam.css">
	<link rel="stylesheet" type="text/css" href="public/css/dangtuyen.css">
	<link rel="stylesheet" type="text/css" href="public/css/doimatkhau.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm  navbar-dark">
		<a class="navbar-brand" href="index.php"><img style="margin-left: 30px;" src="public/img/logo.png" width="80px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="collapsibleNavbar">
			<ul class="navbar-nav">
				
				<li class="nav-item dropdown no_css" style="margin-right: 50px;">
					
					<a class="nav-link dropdown-toggle " href="index.php" id="navbardrop" data-toggle="dropdown">
						<img class=" mt-2 rounded-circle" src="upload/<?=$_SESSION["avatar"]?>" width="50px" height="50px"><span style="margin-left: 10px;"><?=$_SESSION["user"]?></span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php?controller=user&action=hoso">Hồ sơ</a>
						<a class="dropdown-item" href="index.php?controller=user&action=dangxuat">Đăng xuất</a>
						
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?controller=user&action=dangtuyenmoi">Đăng tuyển mới</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?controller=user&action=dangtuyen">Đang đăng tuyển</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?controller=user&action=datuyen">Đăng tuyển đã ngưng</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="index.php#contact">Liên hệ</a>
				</li> 

				
			</ul>
		</div>  
	</nav>


	