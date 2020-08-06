<?php 
include "master_control.php";
if(isset($_GET['controller'])&&isset($_GET['action'])){
	$control = $_GET['controller'];
	$action = $_GET['action'];
}else{$control = 'index';
$action = '';}
$md = new master_control();
switch ($control) {
	case 'user':
		switch ($action) {
		case 'dangnhap':
		header("location:dangnhap.php?controller=user&action=login");
		break;
		case 'dangxuat':
		$md->logout();
		break;
		case 'hoso':
		if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
		if(isset($_POST['submit'])){

			$datas = $md->select_doanhnghiep($_SESSION["user"]);
			$rows = $datas->fetch_assoc();
			$img_temp = $rows['anh'];
			if(isset($_POST['gioithieu'])){
				$gioithieu = $_POST['gioithieu'];
			}else $gioithieu=" ";
			if(isset($_FILES)){
				$img = $_FILES["img"]["name"];
				$random =$md->randomString().$img;
				$type = $_FILES["img"]["type"];
				$size = $_FILES["img"]["size"];
				if($img ==""){
					$random = $img_temp;
				}else{
					if( $size <= 5*1024*1024 ) {
						move_uploaded_file($_FILES['img']['tmp_name'], 'upload/'.$random);
					}else{
						echo "File cua ban phai nho hon 5M";	
					}
				}
			}else {$img ="logo.jpg";}

			$ten = $_POST['ten'];
			$email = $_POST['email'];
			$dc =  $_POST['diachi'];
			$sdt = $_POST['sdt'];

			$md->insert_info_doanhnghiep($_SESSION["user"],$ten,$gioithieu,$random,$dc,$email,$sdt);
			$_SESSION['alert'] = true;

			$data = $md->select_doanhnghiep($_SESSION["user"]);
			$row = $data->fetch_assoc();
			$_SESSION["avatar"] = $row['anh'];		
			include('views/pages/hoso.php');
			}else
			{
				$data = $md->select_doanhnghiep($_SESSION["user"]);
				$row = $data->fetch_assoc();		
				include('views/pages/hoso.php');
			}
		}else header("location:?controller=index");	
		break;

		case 'doimatkhau':
		if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
				if(isset($_POST['submit'])){
				$password = $_POST['pass'];
				$password1 = $_POST['pass1'];
				$password2 = $_POST['pass2'];
				$pos_password1 = strpos($password1, ' ');
				$pos_password2 = strpos($password2, ' ');
				if(	$pos_password1==true || $pos_password2 ==true){
			$_SESSION['dangky'] ="Mật khẩu không được có khoảng trắng";
		}else 
		{
			if(strcmp($password1,$password2)==0){
				$data=$md->select_user_username($_SESSION['user']);
				$row = $data->fetch_assoc();
				if($password1==$row['password']){
				
						$_SESSION['dangky'] ="Mật khẩu mới không được trùng mới mật khẩu cũ !";
				}else if($password != $row['password'])
				{
						$_SESSION['dangky'] ="Mật khẩu cũ không chính xác!";
					
					
				}else
				{
					$md->update_pass_user($_SESSION['user'],$password1);
					$_SESSION['ok']=true;
					//echo "<script type='text/javascript'> window.location.assign('?controller=user&action=hoso')</script>";
				}
			}

			else{
				$_SESSION['dangky'] ="Nhập lại mật khẩu không đúng !";
			}
		}
		}
	
		include('views/pages/doimatkhau.php');} else header("location:?controller=index");
		break;

		case 'dangtuyenmoi':
		if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
		$user= $_SESSION["user"];
		$data = $md->select_tinh();
		$data2 =$md->select_nghenghiep();
		$data3 = $md->select_doanhnghiep($_SESSION["user"]);
		$temp = $data3->fetch_assoc();
		$user= $_SESSION["user"];
		include('views/pages/dangtuyenmoi.php');
		if(isset($_POST['submit'])){
			
			$img = $_FILES["img"]["name"];
			if($img ==""){
				$random="job.jpg";
			}else {$random =$md->randomString().$img;}



			$diadiem = $_POST['diadiem'];
			$tinh = $_POST['tinh'];
			$nghe =$_POST['nghe'];
			$vitri = $_POST['vitri'];
			$mota= $_POST['mota'];
			$yeucau=$_POST['yeucau'];
			$luong =$_POST['mucluong'];
			$hinhthuc=$_POST['hinhthuc'];
			$sl = $_POST['sl'];
			$gt=$_POST['gt'];
			$sdt =$_POST['sdt'];
			$email =$_POST['email'];
			move_uploaded_file($_FILES['img']['tmp_name'], 'upload/'.$random);
			$md->insert_tuyendung($user,$random,$diadiem,$tinh,$nghe,$vitri,$mota,$yeucau,$luong,$hinhthuc,$gt,$sl,$sdt,$email);

			echo "<script type='text/javascript'>alert('Đăng tuyển thành công !');</script>";
			//echo "<script type='text/javascript'> window.location.assign('http://localhost:80/Tim_viec_lam/index.php')</script>";

			//echo $_SESSION["user"].$random.$diadiem.$tinh.$nghe.$vitri.$mota.$yeucau.$luong.$hinhthuc.$gt.$sl.$sdt.$email;
			

		}
		}else header("location:?controller=index");
		break;
		case 'dangtuyen':
		if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
		$data = $md->select_tuyendung_by_user($_SESSION["user"],'on');
		}else header("location:?controller=index");
		include('views/pages/dangtuyen.php');
		break;
		case 'datuyen':
		if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
		$data = $md->select_tuyendung_by_user($_SESSION["user"],'off');	
		include('views/pages/datuyen.php');}else header("location:?controller=index");
		break;
		default:
		include('views/pages/trangchu.php');
		break;
	}
	break;


	case 'job':

		if(isset($_GET['id'])){$id=$_GET['id'];}
		switch ($action) {
			case 'dangtuyen':
				if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
				$data = $md->slect_tuyendung_by_id($id,'on');
				$data2=$md->select_tuyendung_by_user_notID($_SESSION["user"],$id,'on');
				$row = $data->fetch_assoc();
				include('views/pages/chitietvieclam.php');
				if(isset($_POST['submit'])){
			$md->trangthai_tuyendung($id,'off');
			echo "<script type='text/javascript'>alert('Chuyển trạng thái thành công !');</script>";
			echo "<script type='text/javascript'> window.location.assign('http://localhost:80/Tim_viec_lam/?controller=user&action=dangtuyen')</script>";}
				}else header("location:?controller=index");
			break;
			case 'datuyen':
				$data = $md->slect_tuyendung_by_id($id,'off');
				$data2=$md->select_tuyendung_by_user_notID($_SESSION["user"],$id,'off');
				$row = $data->fetch_assoc();
				include('views/pages/chitietvieclam.php');
				if(isset($_POST['submit'])){
			$md->trangthai_tuyendung($id,'on');
			echo "<script type='text/javascript'>alert('Chuyển trạng thái thành công !');</script>";
			echo "<script type='text/javascript'> window.location.assign('http://localhost:80/Tim_viec_lam/?controller=user&action=datuyen')</script>";
			}
			break;


			case 'sua':
			if(isset($_SESSION['user']) && ($_SESSION['level']==1))
				{
					$id = $_GET['id'];
				$data = $md->select_tuyendung_id($id);
				$temp = $data->fetch_assoc();
				$data2 = $md->select_tinh();
				$data3 =$md->select_nghenghiep();
				include('views/pages/sua.php');
				if(isset($_POST['submit'])){
				$img = $_FILES["img"]["name"];
				if($img ==""){
					$random="job.jpg";
				}else {$random =$md->randomString().$img;}

				$diadiem = $_POST['diadiem'];
				$tinh = $_POST['tinh'];
				$nghe =$_POST['nghe'];
				$vitri = $_POST['vitri'];
				$mota= $_POST['mota'];
				$yeucau=$_POST['yeucau'];
				$luong =$_POST['mucluong'];
				$hinhthuc=$_POST['hinhthuc'];
				$sl = $_POST['sl'];
				$gt=$_POST['gt'];
				$sdt =$_POST['sdt'];
				$email =$_POST['email'];
				move_uploaded_file($_FILES['img']['tmp_name'], 'upload/'.$random);

				$md->update_tuyendung_by_id($id,$random,$diadiem,$tinh,$nghe,$vitri,$mota,$yeucau,$luong,$hinhthuc,$gt,$sl,$sdt,$email);
				echo "<script type='text/javascript'>alert('Sửa thành công !');</script>";}
				}else
				header("location:?controller=index");
			break;

			case 'search':

				$url = $md->getURL();
				//$url=ltrim($url1, '&page=1');
				//echo "<script type='text/javascript'>alert('$url');</script>";
				$page = isset($_GET['page']) ? $_GET['page'] :1; 
				$soluong = 12;
				$cout=$md->select_cout_tuyendung();
				$temp =ceil((int)$cout/(int)$soluong);  
				if($page>$temp){
					$page=$temp;
				}else if($page<1){$page=1;}
				$start = ($page-1)*$soluong;
				//echo "<script type='text/javascript'>alert('$cout');</script>";

				if($_GET['hinhthuc']=="tatca" && $_GET['nghe']=='tatca' && $_GET['diadiem']==0 && $_GET['keyword']=="");
				if($_GET['hinhthuc']=="tatca"){$hinhthuc='';}else {$hinhthuc=$_GET['hinhthuc'];}
				if($_GET['nghe']=="tatca"){$nghe='';}else {$nghe=$_GET['nghe'];}
				if($_GET['diadiem']==0){$diadiem="%%";}else {$diadiem=$_GET['diadiem'];}
				if($_GET['keyword']==""){$keyword='';}else {$keyword=$_GET['keyword'];}
				$data = $md->seach_all($diadiem,$nghe,$hinhthuc,$keyword,$start,$soluong);
				$data2 =$md->select_nghenghiep();
				$data3 = $md->select_tinh();
				include('views/pages/vieclam.php');
				if(isset($_POST['submit'])){
				$hinhthuc = $_POST['hinhthuc'];
				$nghenghiep =$_POST['nghenghiep'];
				$diadiem = $_POST['diadiem'];
				if(isset($_POST['tukhoa'])){
					$tukhoa = $_POST['tukhoa'];
				}else $tukhoa ='';

				echo "<script type='text/javascript'> window.location.assign('?controller=job&action=search&hinhthuc=$hinhthuc&nghe=$nghenghiep&diadiem=$diadiem&keyword=$tukhoa')</script>";}


			break;

			case 'xoa':
			if(isset($_SESSION['user']) && ($_SESSION['level']==1)){
				$id = $_GET['id'];
				$md->delete_tuyendung_byid($id);
				echo "<script type='text/javascript'> window.location.assign('?controller=user&action=datuyen')</script>";
			}
				else header("location:?controller=index");
			break;

			case 'show':
				if(isset($_GET['id'])){
				$id=$_GET['id'];
				$data = $md->slect_tuyendung_by_id($id,'on');
				$row = $data->fetch_assoc();
				$data2=$md->select_tuyendung_by_manghe_notID($row['id'],$row['ma_nghe_nghiep']);
				$data3=$md->select_tuyendung_by_new_notID($row['id']);
				include('views/pages/chitietvieclam_nguoidung.php');}
			break;
		
		}
	break;	

	case 'admin':
			$cout_tuyendung = $md->select_cout_all_tuyendung();
		$cout_user = $md->select_cout_all_taikhoan();
		$cout_lienhe = $md->select_cout_all_lienhe();
		$cout_nghe=$md->select_cout_all_nghe();
		if(isset($_SESSION['user']) && ($_SESSION['level']==2)){
			switch ($action) {
			case 'list-user':
				
				$data = $md->select_all_user();
			
				include("views/admin/user/list.php");
				break;
			
			case 'list-lienhe':
			
				$data = $md->select_all_lienhe();
				include("views/admin/lienhe.php");
				break;
			case 'xoa-lienhe' :
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				}else $id = '';
				$md->delete_lienhe($id);
				$data = $md->select_all_lienhe();
				include("views/admin/lienhe.php");
				break;

			case 'xoa-user':
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				}else $id = '';
				$md->delete_user($id);
				$data = $md->select_all_user();
				include("views/admin/user/list.php");
				break;

			case 'them-user' :
				

				if(isset($_POST['submit'])){
					$user = $_POST['user'];
					$pass =$_POST['pass'];
					$pass2=$_POST['pass2'];
					$trangthai =$_POST['trangthai'];
					$level = $_POST['level'];
					$data=$md->check_user($user);

					if($pass!=$pass2){
						$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
						include("views/admin/user/them.php");
						
					}else if($data==1){
						$_SESSION['thongbao1'] ='Tài khoản đã tồn tại';
						include("views/admin/user/them.php");

					}else
					{
						$md->insert_user($user,	$pass,$level,$trangthai);
						$_SESSION['thongbao2'] ='Thêm người dùng thành công !';
						include("views/admin/user/them.php");
					}
				}else
				include("views/admin/user/them.php");
				break;

			case 'sua-user':
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				}else $id = '';
				$data =$md->select_user_id($id);
				$row = $data->fetch_assoc();
				
				
				if(isset($_POST['submit'])){
					if(($_POST['pass']=='')&&($_POST['pass2']=='')){
							$pass=$row['password'];
						$pass2=$pass;
					
					}else {
						$pass =$_POST['pass'];
						$pass2=$_POST['pass2'];
						
					}
					if($pass!=$pass2){
						$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
						include("views/admin/user/sua.php");}
						else{
							$trangthai =$_POST['trangthai'];
						$level = $_POST['level'];
						//echo "<script type='text/javascript'> alert('$pass')</script>";
						$md->update_user_id($id,$pass,$level,$trangthai);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';

						include("views/admin/user/sua.php");
						}
					
					
				}
				else{
				include("views/admin/user/sua.php");}
				break;

			case 'list-nghe':
				$data = $md->select_nghenghiep();
				include("views/admin/nghe_nghiep/list.php");
				break;


			case 'xoa-nghe':
				if(isset($_GET['id'])){
					$id =  $_GET['id'];
					$md->delete_nghe_nghiep_id($id);
					$data = $md->select_nghenghiep();
					include("views/admin/nghe_nghiep/list.php");
				}else
				include("views/admin/thongke.php");
				break;
 			
			case 'sua-nghe':
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						$data = $md->select_nghe_id($id);
						$row = $data->fetch_assoc();
						
						if(isset($_POST['submit'])){
							$ten_nghe=$_POST['ten_nghe'];
							$md->update_nghe_id($id,$ten_nghe);
							$_SESSION['thongbao2'] ='Sửa thông tin thành công';
							include("views/admin/nghe_nghiep/sua.php");
						}else include("views/admin/nghe_nghiep/sua.php");
					}else
					include("views/admin/thongke.php");
				break;

			case 'them-nghe':

				$temp=$md->randomString();
				$data =$md->select_nghenghiep();
				while ($row = $data->fetch_assoc()){
					if($temp==$row['ma_nghe']){
							$temp=$md->randomString();
					}
				}
				
				if(isset($_POST['submit'])){


					$ten_nghe =$_POST['ten_nghe'];
					$data =$md->select_nghe_ten($ten_nghe);
					if($data>=1){
							$_SESSION['thongbao1'] ='Tên nghề nghiệp đã tồn tại !';
						include("views/admin/nghe_nghiep/them.php");
					}else{
						$md->insert_nghe($temp,$ten_nghe);
						
						$_SESSION['thongbao2'] ='Thêm thành công !';
						include("views/admin/nghe_nghiep/them.php");
					}
				//	echo "<script type='text/javascript'> alert('$data')</script>";
					//{
					//	
						
					//}else include("views/admin/nghe_nghiep/them.php");
				//	
					
				}else include("views/admin/nghe_nghiep/them.php");
			
				break;

			case 'list-tuyendung':
				$data = $md->select_tuyendung();
				include("views/admin/baidang.php");
				break;
			case 'xoa-tuyendung':
				if(isset($_GET['id'])){
					$id=$_GET['id'];
					$md->delete_tuyendung_byid($id);
					$data = $md->select_tuyendung();
					include("views/admin/baidang.php");
				}else include("views/admin/thongke.php");
				break;
			default:
				include("views/admin/thongke.php");
				break;
			}
		}else  header('Location:?controller=index');
		break;


	case 'index':
		if(isset($_SESSION['level'])&&$_SESSION['level']==2){
			$cout_tuyendung = $md->select_cout_all_tuyendung();
		$cout_user = $md->select_cout_all_taikhoan();
		$cout_lienhe = $md->select_cout_all_lienhe();
		$cout_nghe=$md->select_cout_all_nghe();
			include("views/admin/thongke.php");
		}else{
		$data = $md->select_tinh();
		$data2 =$md->select_nghenghiep();
		$temp=1;
		include('views/pages/trangchu.php');
		if(isset($_POST['submit'])){
		$hinhthuc = $_POST['hinhthuc'];
		$nghenghiep =$_POST['nghenghiep'];
		$diadiem = $_POST['diadiem'];
		if(isset($_POST['tukhoa'])){
			$tukhoa = $_POST['tukhoa'];
		}else
		$tukhoa ='';
			//	header("location:http://localhost:80/Tim_viec_lam/?action=seach&hinhthuc=$hinhthuc&nghe=$nghenghiep&diadiem=$diadiem&keyword=$tukhoa");
		echo "<script type='text/javascript'> window.location.assign('http://localhost:80/Tim_viec_lam/?controller=job&action=search&hinhthuc=$hinhthuc&nghe=$nghenghiep&diadiem=$diadiem&keyword=$tukhoa')</script>";
		}
	}
	break;


/*	default:
	include('views/pages/trangchu.php');
	break;*/
	
}


if(isset($_POST['lienhe'])){
	$ten=$_POST['ten'];
	$sdt=$_POST['sdt'];
	$email=$_POST['email'];
	$nd =$_POST['noidung'];
	$md->insert_lienhe($ten,$sdt,$email,$nd);
	echo "<script type='text/javascript'>alert('Thông tin liên hệ của bạn đã được gửi thành công!');</script>";


}

?>