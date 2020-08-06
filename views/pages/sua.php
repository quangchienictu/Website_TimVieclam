
<div style="height: 90px;">

</div>
<div class="container dangtuyen">
	<form method="POST" enctype="multipart/form-data">
		<div class="col-12">
			<h3>Sửa hồ sơ</h3>
		</div>
		<div class="col-12">

			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Cập nhật hình ảnh bài đăng :</p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<img src="upload/<?=$temp['hinhanh']?>" width="100%">
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
					<input value="<?=$temp['diadiem']?>" class="form-control" type="text" name="diadiem" required="">
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
							while ($row = $data2->fetch_assoc()) {
								?>
								
							<option <?php if($row['tenTinh']==$temp['tenTinh'])echo "selected"; ?> value='<?=$row['id']?>'><?=$row['tenTinh']?></option>;

							<?php
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
							<option value="<?=$temp['ma_nghe_nghiep']?>"><?=$temp['ten_nghe']?></option>
							<?php 
							while ($row = $data3->fetch_assoc()) {
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
					<input value="<?=$temp['vi_tri']?>" name="vitri" class="form-control" type="text" name="" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Mô tả công việc : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<textarea  name="mota" class="form-control" rows="5" required=""><?=$temp['mota']?></textarea >
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Yêu cầu : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<textarea  name="yeucau" class="form-control" rows="5" ><?=$temp['yeucau']?></textarea>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5" >
					<p>Mức lương : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<input value="<?=$temp['mucluong']?>" name="mucluong" class="form-control" type="text" name="" required="">
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
					<?php $hinhthuc = $temp['hinh_thuc']; ?>
							<option <?php if($hinhthuc=='fulltime') echo "selected"; ?> value="fulltime">Toàn thời gian</option>
						<option <?php if($hinhthuc=='parttime') echo "selected"; ?>  value="parttime">Bán thời gian</option>
						<option <?php if($hinhthuc=='thoivu') echo "selected"; ?> value="thoivu">Thời vụ</option>
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
					<input value="<?=$temp['soluong']?>" name="sl" class="form-control" type="number" name="" required="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<p>Yêu cầu giới tính : </p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7">
					<?php $gt = $temp['gioitinh']; ?>
					<input <?php if($gt=='Tất cả') echo "checked";?>  type="radio" value="Tất cả" name="gt" checked="">Tất cả
					<input <?php if($gt=='Nam') echo "checked";?> type="radio" value="Nam" name="gt">Nam
					<input <?php if($gt=='Nữ') echo "checked";?> type="radio" value="Nữ" name="gt">Nữ
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
				<input  id="luu" type="submit" name="submit" value="Xong">
				<a id="btn_huy" href="index.php">Hủy bỏ</a>
			</div>
		</div>
	</form>
</div>
