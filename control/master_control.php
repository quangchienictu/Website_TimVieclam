
<?php
include"models/master_model.php";

class master_control{
	function login($username,$password){
		$u = new master_model();
		$temp=$u->login($username,$password);
		if($temp==true){

			$_SESSION["user"]=$username;
			$_SESSION["level"] = $u->level($username);
			$_SESSION["trangthai"] = $u->trangthai($username);
			$_SESSION["avatar"] =$u->avatar($username);
			if($_SESSION["trangthai"]=='on'){
				header('location:http://localhost:8080/Tim_viec_lam/?controller=index');
				if(isset($_SESSION['thongbao'])){
					unset($_SESSION['thongbao']);
				}
			}else{$_SESSION['thongbao'] = 'Tài khoản đã bị khóa ! Vui lòng liên hệ Admin để được hỗ trợ';}

		}else
		$_SESSION['thongbao'] = 'Thông tin tài khoản chưa chính xác';

	}

	public function dangky($username,$password)
	{
		$u = new master_model();
		$temp=$u->dangky($username,$password);
		if($temp==true){
			$_SESSION["ok"]="Đăng ký tài khoản thành công !";
		}else 
		$_SESSION["err"]="Tài khoản đã tồn tại";


	}


	public function logout(){
		session_destroy();
		//header('location:http://localhost:8080/Tim_viec_lam/');
		echo "<script type='text/javascript'> window.location.assign('http://localhost:8080/Tim_viec_lam/')</script>";
	}



	public function select_doanhnghiep($username){
		$u = new master_model();
		$data = $u->select_doanhnghiep($username);
		return $data;

	}
	public function create_info_doanhnghiep($username){
		$u = new master_model();
		$u->create_info_doanhnghiep($username);
	}
	public function insert_info_doanhnghiep($username,$ten,$gioithieu,$anh,$diachi,$email,$sdt){
		$u = new master_model();
		$u->insert_info_doanhnghiep($username,$ten,$gioithieu,$anh,$diachi,$email,$sdt);
	}

	public function randomString()
	{
		$random = substr(md5(mt_rand()), 0, 7);
		return $random;
	}

	public function select_tinh(){
		$u = new master_model();
		$data= $u->select_tinh();
		return $data;
	}
	public function select_nghenghiep(){
		$u = new master_model();
		$data= $u->select_nghenghiep();
		return $data;
	}

	public function insert_tuyendung($user,$hinhanh,$diadiem,$matinh,$ma_nghe,$vitri,$mota,$yeucau,$mucluong,$hinhthuc,$gioitinh,$sl,$sdt,$email){

		$u = new master_model();
		$u->insert_tuyendung($user,$hinhanh,$diadiem,$matinh,$ma_nghe,$vitri,$mota,$yeucau,$mucluong,$hinhthuc,$gioitinh,$sl,$sdt,$email);

	}
	public function select_tuyendung(){
		$u = new master_model();
		$data= $u->select_tuyendung();
		return $data;
	}
	public function select_tuyendung_by_user($user,$trangthai){
		$u = new master_model();
		$data= $u->select_tuyendung_by_user($user,$trangthai);
		return $data;
	}

	public function select_tuyendung_id($id){
		$u = new master_model();
		$data=$u->select_tuyendung_id($id);
		return $data;
	//		$temp = $data->fetch_assoc();
		//var_dump($temp);
	}
	public function slect_tuyendung_by_id($id,$trangthai){
		$u = new master_model();
		$data= $u->slect_tuyendung_by_id($id,$trangthai);
		return $data;
	}
	public function select_tuyendung_by_user_notID($user,$id,$trangthai){
		$u = new master_model();
		$data= $u->select_tuyendung_by_user_notID($user,$id,$trangthai);
		return $data;
	}

	public function trangthai_tuyendung($id,$trangthai){
		$u = new master_model();
		$u->trangthai_tuyendung($id,$trangthai);
	}

	public function select_all_tuyendung(){
		$u = new master_model();
		$data = $u->select_all_tuyendung();
		return $data;
	}


	public function seach_all($ma_tinh,$ma_nghe,$hinh_thuc,$keyword,$start,$end){
		$u = new master_model();
		$data = $u->seach_all($ma_tinh,$ma_nghe,$hinh_thuc,$keyword,$start,$end);
		return $data;
	}

	public function select_tuyendung_by_manghe_notID($id,$ma_nghe){
		$u = new master_model();
		$data = $u->select_tuyendung_by_manghe_notID($id,$ma_nghe);
		return $data;
	}

	public function select_tuyendung_by_new_notID($id){
		$u = new master_model();
		$data = $u->select_tuyendung_by_new_notID($id);
		return $data;
	}
	public function select_cout_tuyendung(){
		$u = new master_model();
		$data = $u->select_cout_tuyendung();
		return $data;
	}
	public function insert_lienhe($ten,$sdt,$mail,$noidung){
		$u = new master_model();
		$u->insert_lienhe($ten,$sdt,$mail,$noidung);
	}

		public function delete_tuyendung_byid($id){
					$u = new master_model();
				$u->delete_tuyendung_byid($id);

			}

	public function select_all_user(){
			$u = new master_model();
			$data =	$u->select_all_user();
			return $data;

	}
	public function select_all_lienhe(){
			$u = new master_model();
			$data =	$u->select_all_lienhe();
			return $data;
	}
	public function update_tuyendung_by_id($id,$hinhanh,$diadiem,$matinh,$ma_nghe,$vi_tri,$mota,$yeucau,$mucluong,$hinh_thuc,$gioitinh,$soluong,$sdt,$email){
		$u = new master_model();
		$u->update_tuyendung_by_id($id,$hinhanh,$diadiem,$matinh,$ma_nghe,$vi_tri,$mota,$yeucau,$mucluong,$hinh_thuc,$gioitinh,$soluong,$sdt,$email);
	}
	public function delete_lienhe($id){
		$u = new master_model();
		$u->delete_lienhe($id);
	}
	public function delete_user($id){
		$u = new master_model();
		$u->delete_user($id);
	}
	public function check_user($user){
		$u = new master_model();
			$data =	$u->check_user($user);
			return $data;
	}
		public function insert_user($user,$pass,$level,$trangthai){
			$u = new master_model();
			$u->insert_user($user,$pass,$level,$trangthai);
		}
	public function select_user_id($id){
			$u = new master_model();
			$data = $u->select_user_id($id);
			return $data;
	}
	public function update_user_id($id,$pass,$level,$trangthai){
			$u = new master_model();
			 $u->update_user_id($id,$pass,$level,$trangthai);
	}
	public function delete_nghe_nghiep_id($id){
		$u = new master_model();
		 $u->delete_nghe_nghiep_id($id);
	}
	public function update_nghe_id($id,$ten_nghe){
		$u = new master_model();
		 $u->update_nghe_id($id,$ten_nghe);
	}
		public function select_nghe_id($id){
			$u = new master_model();
			$data = $u->select_nghe_id($id);
			return $data;
		}

	public function insert_nghe($ma_nghe,$ten_nghe){
		$u = new master_model();
		 $u->insert_nghe($ma_nghe,$ten_nghe);
	}
		public function select_nghe_ten($ten_nghe){
		$u = new master_model();
			$data = $u->select_nghe_ten($ten_nghe);
			return $data;

		}


	public function select_cout_all_tuyendung(){
		$u = new master_model();
			$data = $u->select_cout_all_tuyendung();
			return $data;

	}
	public function select_cout_all_lienhe(){
		$u = new master_model();
			$data = $u->select_cout_all_lienhe();
			return $data;

	}
	public function select_cout_all_taikhoan(){
		$u = new master_model();
			$data = $u->select_cout_all_taikhoan();
			return $data;

	}
	public function select_cout_all_nghe(){
		$u = new master_model();
			$data = $u->select_cout_all_nghe();
			return $data;

	}
	public function update_pass_user($user,$pass){
		$u = new master_model();
		 $u->update_pass_user($user,$pass);
	}
	public function select_user_username($user){
		$u = new master_model();
			$data = $u->select_user_username($user);
			return $data;
	}
	function getURL() {
		$pageURL = 'http';

		if (!empty($_SERVER['HTTPS'])) {
			if ($_SERVER['HTTPS'] == 'on') {
				$pageURL .= "s";
			}
		}

		$pageURL .= "://";

		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		}

		return $pageURL;
	}

}
	

	
	//$a = new master_control();
//	$a->select_tuyendung_id('59');
?>