<div style="height: 90px;">

</div>
<div class="title_chitiet">
	<h3 >Hồ sơ công ty /<span style="font-size: 25px;">Cập nhật hồ sơ</span></h3>
</div>

<div class="container hoso">

	<?php if(isset($_SESSION['alert'])) echo "<div class='alert alert-success'>
	<button type='button' class='close' data-dismiss='alert'>&times;</button>
	<strong>Thành công!</strong> Hồ sơ của bạn đã được lưu lại !
	</div>"; unset($_SESSION['alert']);
	?>



	<form method="POST" enctype="multipart/form-data">
		<div class="row chitiet_hs">
			<div class="col-12  col-sm-12 col-md-6 col-lg-6">
				<div class="row">
					<div class="col-12">
						<p style="">Logo công ty</p> 
						<img  src="upload/<?=$row['anh'] ?>" width="230px">
					</div>
					<div class="col-12">
						<input type="file"  name="img">
					</div>
					<div class="col-12">

						<label><span>*</span>Tên doanh nghiệp :</label>
						<input id="tendn" type="text" name="ten" required="" value="<?=$row['ten'] ?>">
					</div>
					<div class="col-12 " style="margin-top: 40px;">

						<label>Mật khẩu :</label>
						<a href="?controller=user&action=doimatkhau">Đổi mật khẩu</a>
					</div>
				</div>
			</div>
			<div class="col-12  col-sm-12 col-md-6 col-lg-6">
				<div class="col-12">
					<p><span></span> Giới thiệu</p>
					<textarea rows="4" name="gioithieu" style="width:100%;"><?=$row['gioithieu'] ?></textarea>
				</div>
				<div class="col-12">
					<p><span>*</span>Địa chỉ</p>
					<input type="text" name="diachi"  required="" value="<?=$row['diachi'] ?>">
				</div>
				<div class="col-12">
					<p><span>*</span>Email</p>
					<input type="email" name="email" required="" value="<?=$row['email'] ?>">
				</div>
				<div class="col-12">
					<p><span>*</span>Số điện thoại</p>
					<input type="text" name="sdt"  required="" value="<?=$row['sdt'] ?>">
				</div>
			</div>
		</div>

		<div class="row input">
			<div class="col-12 text-center">
				<input id="luu" type="submit" name="submit" value="Lưu">
				<input onclick="trangchu()" id="huy" type="button" name="" value="Hủy bỏ">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	function trangchu() {
		window.location.assign("http://localhost:8080/Tim_viec_lam/index.php");

	}

</script>
