<div style="height: 90px;">

</div>
<div class="title_chitiet">
	<h3>Chi tiết việc làm <img src="upload/on.png"></h3>
</div>
<div class="container vieclam">
	<div class="row ">
		<div class="col-12 col-sm-12 col-md-12 col-lg-8 container_chitiet">
			<div class="col-12">
				<img src="upload/<?=$row['hinhanh']?>" width="100%" height="">
			</div>
			<div class="col-12 display">
				<h5>Công ty : </h5><h5 class="text-success"><?php if($row['ten']=='') echo "( Chưa cập nhật  )";else echo $row['ten'];?></h5>
			</div>
			<div class="col-12 display">
				<h5>Giới thiệu về doanh nghiệp: </h5>
				<p><?php if($row['gioithieu']=='') echo "( Chưa cập nhật )";else echo $row['gioithieu'];?></p>
			</div>
			<div class="col-12 display">
				<h5>Tuyển vị trí : </h5><h5 class="text-danger">	<?=$row['vi_tri']?></h5>
			</div>
			<div class="col-12 display">
				<h5>Loại hình công việc : </h5><h5 class="text-success"><?=$row['ten_nghe']?></h5>
			</div>
			<div class="col-12 no_display">
				<h5>Mô tả công việc : </h5>
				<p><?=$row['mota']?></p>
			</div>
			<div class="col-12">
				<h5>Yêu cầu</h5>
				<p><?=$row['yeucau']?></p>

			</div>
			<div class="col-12 display">
				<img src="public/img/phucap.png">
				<h5>Mức lương :</h5>
				<p class="text-danger"><?=$row['mucluong']?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/ht.png">
				<h5>Hình thức làm việc : </h5>
				<?php if($row['hinh_thuc']=='fulltime')	
				{
					$hinhthuc ="Toàn thời gian";
				}else if($row['hinh_thuc']=='parttime'){$hinhthuc ="Bán thời gian";}else $hinhthuc ="Thời vụ";

				?>
				<p><?=$hinhthuc?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/dc.png">
				<h5>Địa điểm làm việc :</h5>
				<p><?=$row['diadiem']?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/sl.png">
				<h5>Số lượng :</h5>
				<p><?=$row['soluong']?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/namnu.png">
				<h5>Giới tính :</h5>
				<p><?=$row['gioitinh']?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/phone.png">
				<h5>Liên hệ :</h5>
				<p><?=$row['sdt_cv']?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/mail.png">
				<h5>Địa chỉ gửi CV :</h5>
				<p><?=$row['email_cv']?></p>
			</div>
			<div class="col-12 display">
				<img src="public/img/ngay.png">
				<h5>Thời gian đăng :</h5>
				<p><?=date("d-m-Y H:i:s", strtotime($row['thoi_gian_dang']))?></p>
			</div>
			
		</div>


		<div class="col-12 col-sm-12 col-md-12 col-lg-4 ">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-12">
					<div class="row viec_lien_quan">
						<div class="col-12 ">
							<h4>Việc làm liên quan đến : <?=$row['ten_nghe']?></h4>
						</div>

						<?php  	while ($row2 = $data2->fetch_assoc()) { ?>
							<div class="col-12 backgroud">
								<a href="?controller=job&action=show&id=<?=$row2['id']?>">
									<div class="row viec_lam">
										<div class="col-5">
											<img src="upload/<?=$row2['hinhanh']?>" width="100%">
										</div>
										<div class="col-7">
											<h5><?=$row2['ten']?></h5>
											<p>Tuyển vị trí :<?=$row2['vi_tri']?></p>
										</div>
										<div class="col-12">
											<div class="row">
												<div style="width: 60%;">
													<p class="text-danger"><img src="public/img/phucap.png"><?=$row2['mucluong']?></p>
												</div>

												<div  style="">
													<p><img src="public/img/dc.png"><?=$row2['tenTinh']?></p>

												</div>
												
											</div>
										</div>
									</div>
								</a>
							</div>


						<?php } ?>
					</div>

				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-12">
					<div class="row viec_lien_quan viec_moi">
						<div class="col-12 ">
							<h4>Việc làm mới</h4>
						</div>

						<?php  	while ($row3 = $data3->fetch_assoc()) { ?>
							<div class="col-12 backgroud">
								<a href="?controller=job&action=show&id=<?=$row3['id']?>">
									<div class="row viec_lam">
										<div class="col-5">
											<img src="upload/<?=$row3['hinhanh']?>" width="100%">
										</div>
										<div class="col-7">
											<h5><?=$row3['ten']?></h5>
											<p style="line-height: 10px"><?=$row3['ten_nghe']?></p><br>
											<p style="line-height: 10px">Tuyển vị trí :<?=$row3['vi_tri']?></p>
										</div>
										<div class="col-12">
											<div class="row">
												<div style="width: 60%;">
													<p class="text-danger"><img src="public/img/phucap.png"><?=$row3['mucluong']?></p>
												</div>

												<div  style="">
													<p><img src="public/img/dc.png"><?=$row3['tenTinh']?></p>

												</div>
												
											</div>
										</div>
									</div>
								</a>
							</div>


						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="container lienhe" id="contact"" style="margin-top: 200px;">
	<div class="col-12">
		<h2>Liên hệ NQC</h2>
	</div>
	<div class="row">
		<div class=" col-12 col-sm-12 col-md-5 col-lg-5">
			<div class="info_lienhe">
				<div class="map">
					<img src="public/img/dc.png"><span>Số 15,phường 2,Quyết Thắng, Thái Nguyên</span>
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

<?php 	?>