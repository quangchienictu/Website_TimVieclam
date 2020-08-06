<?php 
	include "db.php";
	class master_model extends db
	{	
		
		public function login($username,$password){
			$username1 = $this->connect()-> real_escape_string($username);
			$password1 = $this->connect()-> real_escape_string($password);
				$sql ="SELECT * FROM `taikhoan` WHERE `username` ='$username1' AND `password` ='$password1'";
				$data = $this->connect()->query($sql);
				$row=mysqli_num_rows($data);
				if($row>0){
					return true;
				}else
				return false;
			
		}

		public function level($username){
			$sql ="SELECT * FROM `taikhoan` WHERE `username` ='$username'";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc(	$data);
			$temp = $row['level'];
			return $temp;
		}
		public function trangthai($username){
			$sql ="SELECT * FROM `taikhoan` WHERE `username` ='$username'";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc(	$data);
			$temp = $row['trangthai'];
			return $temp;
		}
		public function avatar($username){
			$sql ="SELECT * FROM `doanhnghiep` WHERE `username` ='$username'";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc(	$data);
			$temp = $row['anh'];
			return $temp;
		}

		public  function dangky($username,$password){
				$sql ="SELECT * FROM `taikhoan` WHERE `username` ='$username'";
				$data = $this->connect()->query($sql);
				$row=mysqli_num_rows($data);
				if($row==0){
					$query = "INSERT INTO `taikhoan`(`username`, `password`, `level`, `trangthai`) VALUES ('$username','$password',1,'on')";
					$this->connect()->query($query);
					return true;
					
				}else
				return false;
				
		} 

		public function select_doanhnghiep($user){
				$sql = "SELECT * FROM `doanhnghiep` WHERE `username` = '$user'";
				$data = $this->connect()->query($sql);
					return $data;
			}

		public function create_info_doanhnghiep($username){
				$sql = "INSERT INTO `doanhnghiep`( `username`,`ten`, `anh`, `gioithieu`, `diachi`, `email`, `sdt`) VALUES ('$username','','logo.png','','','','') ";
				$this->connect()->query($sql);
			}


			public function insert_info_doanhnghiep($username,$ten,$gioithieu,$anh,$diachi,$email,$sdt){
			$sql = "UPDATE `doanhnghiep` SET `ten`='$ten',`anh`='$anh',`gioithieu`='$gioithieu',`diachi`='$diachi',`email`='$email',`sdt`='$sdt' WHERE username = '$username'";
			$this->connect()->query($sql);	}


			public function select_tinh(){
					$sql ="SELECT * FROM `tinh` ORDER BY tenTinh ASC";
					$data = $this->connect()->query($sql);
					return $data;
			}
			public function select_nghenghiep(){
				$sql = "SELECT * FROM `nghe_nghiep` ORDER by ten_nghe ASC";
				$data = $this->connect()->query($sql);
					return $data;
			}

			public function insert_tuyendung($user,$hinhanh,$diadiem,$matinh,$ma_nghe,$vitri,$mota,$yeucau,$mucluong,$hinhthuc,$gioitinh,$sl,$sdt,$email){
				$sql ="INSERT INTO `tuyen_dung`(`username`, `hinhanh`, `diadiem`, `ma_tinh`, `ma_nghe_nghiep`, `vi_tri`, `mota`, `yeucau`, `mucluong`, `hinh_thuc`, `gioitinh`, `soluong`, `sdt_cv`, `email_cv`, `trangthai`) VALUES ('$user','$hinhanh','$diadiem','$matinh','$ma_nghe','$vitri','$mota','$yeucau','$mucluong','$hinhthuc','$gioitinh',$sl,'$sdt','$email','on')";
				$this->connect()->query($sql);
			}


			public function select_tuyendung_by_user($user,$trangthai){
				$sql="SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='$trangthai' AND tuyen_dung.username ='$user'";
					$data = $this->connect()->query($sql);
					return $data;
			}

		public function slect_tuyendung_by_id($id,$trangthai){
			$sql ="SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.gioithieu,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='$trangthai' AND tuyen_dung.id = $id";
				$data = $this->connect()->query($sql);
					return $data;
		}
		public function select_tuyendung(){
			$sql ="SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.gioithieu,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username ";
				$data = $this->connect()->query($sql);
					return $data;
		}

			public function select_tuyendung_by_user_notID($user,$id,$trangthai){
				$sql= "SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='$trangthai' AND tuyen_dung.username ='$user'AND tuyen_dung.id !=$id LIMIT 8"  ;
				$data = $this->connect()->query($sql);
					return $data;
			}


			public function trangthai_tuyendung($id,$trangthai){
				$sql ="UPDATE `tuyen_dung` SET `trangthai` ='$trangthai' WHERE id = $id";
				 $this->connect()->query($sql);
			}

			public function select_all_tuyendung(){
				$sql = "SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.gioithieu,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='on'";
				$data = $this->connect()->query($sql);
					return $data;
			}
			public function select_tuyendung_by_manghe_notID($id,$ma_nghe){
				$sql ="SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='on' AND tuyen_dung.id !=$id AND tuyen_dung.ma_nghe_nghiep='$ma_nghe' LIMIT 4";
				$data = $this->connect()->query($sql);
					return $data;
			}
			public function select_tuyendung_by_new_notID($id){
				$sql ="SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='on' AND tuyen_dung.id !=$id ORDER BY tuyen_dung.thoi_gian_dang DESC LIMIT 4";
				$data = $this->connect()->query($sql);
					return $data;
			}
			public function seach_all($ma_tinh,$ma_nghe,$hinh_thuc,$keyword,$start,$end){
				$sql = "SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.gioithieu,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username AND tuyen_dung.trangthai ='on' AND tuyen_dung.ma_tinh LIKE '$ma_tinh' AND tuyen_dung.ma_nghe_nghiep LIKE '%$ma_nghe%' AND tuyen_dung.hinh_thuc LIKE '%$hinh_thuc%' AND tuyen_dung.vi_tri LIKE '%$keyword%'  AND taikhoan.trangthai='on' LIMIT $start , $end";
				$data = $this->connect()->query($sql);
					return $data;
			}

			public function select_tuyendung_id($id){
				$sql ="SELECT tuyen_dung.*,tinh.tenTinh,nghe_nghiep.ten_nghe,doanhnghiep.gioithieu,doanhnghiep.username,doanhnghiep.anh,doanhnghiep.ten,doanhnghiep.diachi,doanhnghiep.email,doanhnghiep.sdt FROM `tuyen_dung`,tinh,nghe_nghiep,taikhoan ,doanhnghiep WHERE ma_tinh = tinh.id AND tuyen_dung.username = taikhoan.username AND tuyen_dung.ma_nghe_nghiep = nghe_nghiep.ma_nghe AND tuyen_dung.username = doanhnghiep.username  AND tuyen_dung.id = $id";
				$data = $this->connect()->query($sql);
					return $data;
					
			}

				public function delete_tuyendung_byid($id){
					$sql ="DELETE FROM `tuyen_dung` WHERE id = $id";
					$this->connect()->query($sql);

			}
			public function select_cout_tuyendung(){
				$sql = "SELECT COUNT(tuyen_dung.id)  FROM `tuyen_dung`,taikhoan WHERE tuyen_dung.trangthai='on' AND taikhoan.trangthai='on' AND taikhoan.username = tuyen_dung.username";
				$data = $this->connect()->query($sql);
						$row = $data->fetch_assoc();
				$temp = $row["COUNT(tuyen_dung.id)"];
				return $temp;
			}

			public function insert_lienhe($ten,$sdt,$mail,$noidung){
				$sql ="INSERT INTO `lienhe`(`ten`, `sdt`, `email`, `noidung`) VALUES ('$ten','$sdt','$mail','$noidung')";
				 $this->connect()->query($sql);
			}

			public function update_tuyendung_by_id($id,$hinhanh,$diadiem,$matinh,$ma_nghe,$vi_tri,$mota,$yeucau,$mucluong,$hinh_thuc,$gioitinh,$soluong,$sdt,$email){
				$sql ="UPDATE `tuyen_dung` SET `hinhanh`='$hinhanh',`diadiem`='$diadiem',`ma_tinh`=$matinh,`ma_nghe_nghiep`='$ma_nghe',`vi_tri`='$vi_tri',`mota`='$mota',`yeucau`='$yeucau',`mucluong`='$mucluong',`hinh_thuc`='$hinh_thuc',`gioitinh`='$gioitinh',`soluong`=$soluong,`sdt_cv`='$sdt',`email_cv`='$email' WHERE id= $id";
				$this->connect()->query($sql);
			}
			public function select_all_user(){
				$sql = "SELECT * FROM `taikhoan` ";
					$data = $this->connect()->query($sql);
				return $data;
			}
			
			public function select_all_lienhe(){
				$sql = "SELECT * FROM `lienhe` ";
					$data = $this->connect()->query($sql);
				return $data;
			}

			public function delete_lienhe($id){
				$sql ="DELETE FROM `lienhe` WHERE `id` = $id";
				$this->connect()->query($sql);
			}
			public function delete_user($id){
				$sql ="DELETE FROM `taikhoan` WHERE `id` = $id";
				$this->connect()->query($sql);
			}
			public function check_user($user){
				$sql ="SELECT * FROM `taikhoan` WHERE username ='$user'";
				$data = $this->connect()->query($sql);
				$num_rows = mysqli_num_rows($data);
				return $num_rows;
			}
				public function select_user_username($user){
				$sql ="SELECT * FROM `taikhoan` WHERE username ='$user'";
				$data = $this->connect()->query($sql);
				return $data;
			}
			public function update_pass_user($user,$pass){
				$sql ="UPDATE `taikhoan` SET `password`='$pass' WHERE username ='$user'";
			//	echo "$sql";
				$this->connect()->query($sql);
			}
			public function insert_user($user,$pass,$level,$trangthai){
				$sql="INSERT INTO `taikhoan`(`username`, `password`, `level`, `trangthai`) VALUES ('$user','$pass','$level','$trangthai')";
				$this->connect()->query($sql);
			}
			public function select_user_id($id){
				$sql ="SELECT * FROM `taikhoan` WHERE id =$id";
				$data = $this->connect()->query($sql);
				return $data;
			}
			public function update_user_id($id,$pass,$level,$trangthai){
				$sql ="UPDATE `taikhoan` SET `password`='$pass',`level`='$level',`trangthai`='$trangthai' WHERE id = $id";
					$this->connect()->query($sql);
			}
			public function delete_nghe_nghiep_id($id){
				$sql ="DELETE FROM `nghe_nghiep` WHERE id=$id";
				$this->connect()->query($sql);
			}
			public function update_nghe_id($id,$ten_nghe){
				$sql= "UPDATE `nghe_nghiep` SET `ten_nghe`='$ten_nghe' WHERE id=$id";
				$this->connect()->query($sql);
			}

			public function select_nghe_id($id){
					$sql= "SELECT * FROM `nghe_nghiep` WHERE id=$id";
				$data = $this->connect()->query($sql);
				return $data;
			}
			public function insert_nghe($ma_nghe,$ten_nghe){
				$sql = "INSERT INTO `nghe_nghiep`( `ma_nghe`, `ten_nghe`) VALUES ('$ma_nghe','$ten_nghe')";
				$this->connect()->query($sql);
			}
		
			public function select_nghe_ten($ten_nghe){
					$sql= "	SELECT * FROM `nghe_nghiep` WHERE `ten_nghe`='$ten_nghe'";
				$data = $this->connect()->query($sql);
				$num_rows = mysqli_num_rows($data);
				return $num_rows;
			}
			public function select_cout_all_tuyendung(){
				$sql = "SELECT COUNT(id)  FROM `tuyen_dung`";
				$data = $this->connect()->query($sql);
				$row = $data->fetch_assoc();
				$temp = $row["COUNT(id)"];
				return $temp;
			}
			public function select_cout_all_lienhe(){
				$sql = "SELECT COUNT(id)  FROM `lienhe`";
				$data = $this->connect()->query($sql);
				$row = $data->fetch_assoc();
				$temp = $row["COUNT(id)"];
				return $temp;
			}
			public function select_cout_all_taikhoan(){
				$sql = "SELECT COUNT(id)  FROM `taikhoan`";
				$data = $this->connect()->query($sql);
				$row = $data->fetch_assoc();
				$temp = $row["COUNT(id)"];
				return $temp;
			}
			public function select_cout_all_nghe(){
				$sql = "SELECT COUNT(id)  FROM `nghe_nghiep`";
				$data = $this->connect()->query($sql);
				$row = $data->fetch_assoc();
				$temp = $row["COUNT(id)"];
				return $temp;
			}
	}

	
	//$a = new master_model();
	//$a->insert_tuyendung('user','hinhanh','diadiem',1,'ma_nghe','vitri','mota','yeucau','mucluong','hinhthuc','gioitinh',5,'sdt','email');
	//echo "ok";
	//$a->select_nghe_ten('d');
	//echo "ok";
//echo "hihihi";
 ?>