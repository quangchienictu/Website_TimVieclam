<div id="demo" class="carousel slide" data-ride="carousel">

	<!-- Indicators -->
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>

	<!-- The slideshow -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="public/img/bk1.jpg"  width="100%" height="100">
		</div>
		<div class="carousel-item">
			<img src="public/img/bk2.jpg"  width="100%" height="500">
		</div>
		<div class="carousel-item">
			<img src="public/img/backgroud.jpg"  style="filter: brightness(70%);" width="100%" height="500">
			<div class="carousel-caption">

			</div>
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>

<div class="search">
	<div class="row">
		<form method="POST">
			<div class="select col-12   custom-control custom-radio custom-control-inline">
				<div class="item_radio custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="check1" name="hinhthuc" value="tatca" checked="">
					<label class="custom-control-label" for="check1">Tất cả</label>
				</div>
				<div class="item_radio custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="check2" name="hinhthuc" value="thoivu">
					<label class="custom-control-label" for="check2">Thời vụ</label>
				</div>
				<div class="item_radio custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="check3" name="hinhthuc" value="parttime">
					<label class="custom-control-label" for="check3">Bán thời gian</label>
				</div>
				<div class="item_radio custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="check4" name="hinhthuc" value="fulltime">
					<label class="custom-control-label" for="check4">Toàn thời gian</label>
				</div>
			</div>

			<div class="col-12">
				<div class="row search_info">
					<div class="col-12 col-sm-12 col-md-4 col-lg-3 ">
						<input class="form-control" type="text" name="tukhoa" placeholder="Vị trí cần tìm" >
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 margin">
						<select name="nghenghiep"  class="form-control">
							<option value="tatca">Tất cả loại công việc </option>
							<?php 	while ($rows2 = $data2->fetch_assoc()) {
								echo "<option value=$rows2[ma_nghe]>$rows2[ten_nghe]</option>";
							}?>
						</select>
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-3 ">
						<select name="diadiem" class="form-control">
							<option value="0">Tất cả địa điểm</option>
							<?php 	while ($rows = $data->fetch_assoc()) {
								echo "<option value=$rows[id]>$rows[tenTinh]</option>";
							}?>
						</select>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-2 margin">
						<input class="btn btn-applied" type="submit" name="submit" value="Tìm việc">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="container lienhe" id="contact"">
	<div class="col-12">
		<h2>Liên hệ NQC</h2>
	</div>
	<div class="row">
		<div class=" col-12 col-sm-12 col-md-5 col-lg-5">
			<div class="info_lienhe">
				<div class="map">
					<img src="public/img/dc.png"><span>Số 15,Phường 2,Quyết Thắng, Thái Nguyên</span>
				</div>
				<div class="phone">
					<img src="public/img/phone.png"><span>0981636928</span>
				</div>
				<div class="email">
					<img src="public/img/ms.png"><span>quangchienictu@gmail.com</span>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-7 col-lg-7">
				

			<form method="POST">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<input type="text" class="form-control" id="formGroupExampleInput" name="ten" placeholder="Họ và tên">

					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<input type="text" class="form-control" id="formGroupExampleInput" name="sdt" placeholder="Số điện thoại">
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<input type="email" class="form-control" name="email" id="formGroupExampleInput" placeholder="Email">
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<textarea class="form-control" name="noidung" id="exampleFormControlTextarea3" rows="3" placeholder="Nội dung ...."></textarea>
					</div>
					<div class="col-12">
						<input class="btn" type="submit" name="lienhe" value="Liên hệ">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
