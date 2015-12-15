<?php

	
$idgt = isset($_GET["idgt"])?$_GET["idgt"]:"home";
	if($idgt=="home")
	{
		include "module/gioithieu/gioithieu.php";
	}
	if($idgt=="thongtin")
		{
			include "module/gioithieu/thongtin.php";
		}
	if($idgt=="quatrinh")
		{
			include "module/gioithieu/quatrinh.php";
		}
	
?>