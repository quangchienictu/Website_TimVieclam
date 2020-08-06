
<div style="height: 90px;">

</div>
<div class="title_chitiet">
	<h3 >Cập nhật hồ sơ/<span style="font-size: 25px;">Đổi mật khẩu</span></h3>
</div>
<div class="container change_pass">
	<form method="POST">
		<div class="col-12 text-center">
			<p style="color: green;"><?php if(isset($_SESSION['ok']))echo "Đổi mật khẩu thành công !"; unset($_SESSION['ok'])?></p>
			<p style="color: red;"><?php if(isset($_SESSION['dangky']))echo $_SESSION['dangky'];  unset($_SESSION['dangky']);?></p>
		</div>
		<div class="col-12">
			<div class="row ">
				<div class="col-lg-5">
					<label>Mật khẩu cũ</label>
				</div>
				<div class="col-lg-7">
					<input type="password" minlength="3" name="pass" required="">
				</div>
			</div>

		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-lg-5">
					<label>Mật khẩu mới</label>
				</div>
				<div class="col-lg-7">
					<input type="password" minlength="3" name="pass1" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-lg-5">
					<label>Xác nhận mật khẩu mới</label>
				</div>
				<div class="col-lg-7">
					<input type="password" minlength="3" name="pass2" required="">
				</div>
			</div>
		</div>
		<div class="row input">
			<div class="col-12 text-center">
				<input id="luu" type="submit" name="submit" value="Lưu">
				<input onclick="hoso();" id="huy" type="submit" name="" value="Hủy bỏ">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	function hoso() {
		window.location.assign("?controller=user&action=hoso");

	}

</script>
