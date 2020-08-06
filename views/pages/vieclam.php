<div style="height: 90px;">

</div>

<div class="search search2">
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
							<?php 	while ($rows3 = $data3->fetch_assoc()) {
								echo "<option value=$rows3[id]>$rows3[tenTinh]</option>";
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

<div class="container show_info">
	<div class="row">
		<div class="col-12">
			<div class="row"><h2>Kết quả tìm kiếm :</h2></div>
			<div class="row">

				<?php 

				while ($row = $data->fetch_assoc()) {

					?>
					<div class="show col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="?controller=job&action=show&id=<?=$row['id']?>">
							<img src="upload/<?=$row['hinhanh']?>" width="100%" height="160px">
							<div class="info">
								<div class="chitiet">
									<h4><?=$row['ten']?></h4>
									
									<span>Vị trí tuyển :</span><h3><?=$row['vi_tri']?></h3>
									<span>Loại hình công việc :</span><br>
									<p><b><?=$row['ten_nghe']?></b><br></p>
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
<div class="container phantrang" >	
			
		<div class="col-12">	
		
				<ul class="pagination justify-content-center">
					<!-- <li class='page-item disabled'><a class='page-link' href="#">Previous</a></li> -->
					<?php if($page>1 && $temp>1){$p =$page-1; echo "<li><a class='page-link' href='$url&page=$p'>Trước</a></li>";}else echo "<li class='page-item disabled'><a class='page-link' href='#'>Trước</a></li>";  ?>
				
					<?php for($i=1;$i<=$temp;$i++){ ?>
							<li class="page-item"><a class="page-link" href="<?=$url?>&page=<?=$i?>"><?=$i?></a></li>
					<?php } ?>
					<!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->

					<?php if($page <$temp&&$temp>1){$p =$page+1; echo "<li><a class='page-link' href='$url&page=$p'>Sau</a></li>";}else echo "<li class='page-item disabled'><a class='page-link' href='#'>Sau</a></li>"; ?>
				
				</ul>
		
		</div>
		
	</div>

