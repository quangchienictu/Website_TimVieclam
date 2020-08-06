<?php 
session_start();

if(isset($_SESSION['user']) && ($_SESSION['level']==1)){	
include "views/layout/header_nhatuyendung.php";
include("control/route.php");
include "views/layout/footer.php";
} else if(isset($_SESSION['user']) && ($_SESSION['level']==2)){
	include "views/layout/header_admin.php";
	include "views/admin/menu.php";
	include("control/route.php");
	include("views/admin/footer.php");
} else {
	include "views/layout/header.php";
	include("control/route.php");
include "views/layout/footer.php";
}


?>