<div style="height: 90px;">
</div>
<div class="title_chitiet">
	<h3 >Tuyển dụng/<span style="font-size: 25px;">Hồ sơ đang tuyển</span><img src="upload/on.png" width="15px" style="margin-left: 5px;"></h3>
</div>

<div class="container show_info" style="margin-bottom: 150px;">
	<div class="row">
		<div class="col-12">
			<div class="row">

				<?php 	while ($row = $data->fetch_assoc()) {

					?>
					<div class="show col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="?controller=job&action=dangtuyen&id=<?=$row['id']?>">
							<img src="upload/<?=$row['hinhanh']?>" width="100%" height="180px;">
							<div class="info">
								<div class="chitiet">
									<h4><?=$row['ten']?></h4>
									<span>Loại hình công việc :</span><br>
									<p><b><?=$row['ten_nghe']?></b><br></p>
									<span>Vị trí tuyển :</span><h3><?=$row['vi_tri']?></h3>
									<div>
										<img src="public/img/tien.png"> <span>Mức lương : </span><span class="luong"><?=$row['mucluong']?></span><br>
										<img src="public/img/namnu.png"><span>Giới tính :</span> <span><?=$row['gioitinh']?></span><br>
										<img src="public/img/dc.png"><span><?=$row['tenTinh']?></span><br>
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


