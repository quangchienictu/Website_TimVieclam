
<div style="height: 90px;">

</div>
<div class="container dangtuyen">
	<form method="POST" enctype="multipart/form-data">
		<div class="col-12">
			<h3>Hồ sơ đăng tuyển</h3>
		</div>
		<div class="col-12">

			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Cập nhật hình ảnh bài đăng :</p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<img src="upload/job.jpg" width="100%">
					<input  type="file" name="img" value="Cập nhật hình ảnh">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Địa điểm làm việc :</p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input value="<?=$temp['diachi']?>" class="form-control" type="text" name="diadiem" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Tỉnh / Thành phố : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<select name="tinh" class="form-control">
						<?php 
							while ($row = $data->fetch_assoc()) {
							echo "<option value='$row[id]'>$row[tenTinh]</option>";
						}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Loại hình công việc :</p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<select name="nghe" class="form-control">
						<?php 
							while ($row = $data2->fetch_assoc()) {
							echo "<option value='$row[ma_nghe]'>$row[ten_nghe]</option>";
						}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Vị trí tuyển : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input name="vitri" class="form-control" type="text" name="" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Mô tả công việc : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<textarea name="mota" class="form-control" rows="5" required=""></textarea >
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Yêu cầu : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<textarea name="yeucau" class="form-control" rows="5" ></textarea>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5" >
					<p>Mức lương : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input name="mucluong" class="form-control" type="text" name="" required="">
				</div>
			</div>
		</div>

		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Hình thức làm việc : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<select name="hinhthuc" class="form-control">
						<option value="fulltime">Toàn thời gian</option>
						<option value="parttime">Bán thời gian</option>
						<option value="thoivu">Thời vụ</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Số lượng người cần tuyển : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input name="sl" class="form-control" type="number" name="" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Yêu cầu giới tính : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input  type="radio" value="Tất cả" name="gt" checked="">Tất cả
					<input type="radio" value="Nam" name="gt">Nam
					<input type="radio" value="Nữ" name="gt">Nữ
				</div>
			</div>
		</div>

		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>SDT liên hệ : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input name="sdt" class="form-control" type="text" name="" value="<?=$temp['sdt']?>" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Địa chỉ gửi CV : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input name="email" class="form-control" type="email" name="" value="<?=$temp['email']?>" required="">
				</div>
			</div>
		</div>
		<div class="row input">
			<div class="col-12 text-center">
				<input  id="luu" type="submit" name="submit" value="Đăng">
				<input onclick="trangchu()" id="huy" type="submit" name="" value="Hủy bỏ" >
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	function trangchu() {
		window.location.assign("http://localhost:8080/Tim_viec_lam/index.php");

	}

</script>
