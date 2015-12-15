<?php

	
$i = isset($_GET["i"])?$_GET["i"]:"";
	if($i=="")
	{
		include "module/trangchu/trangchu.php";
	}

	 if($i=="loaisanpham")
		{
			include "module/sanpham/loaisanpham.php";
		}
	if($i=="sanpham")
		{
			include "module/sanpham/sanpham.php";
		}
	
		

	?>