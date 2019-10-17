<?php
	include_once "include/header.php";

	if(isset($_GET['url']) && file_exists("view/".$_GET['url'].".php")){
		include_once "view/".$_GET['url'].".php";
		
	}else{
		include_once "view/login.php";
	}


	include_once "include/footer.php";
?>