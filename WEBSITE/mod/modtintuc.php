<?php

	
$j = isset($_GET["j"])?$_GET["j"]:"";
	if($j=="")
	{
		include "module/tintuc/tintuc.php";
	}

	 if($j=="loaitintuc")
		{
			include "module/tintuc/loaitintuc.php";
		}
	if($j == "noidung")
	{
		include "module/chitiet/noidung.php";
	}
	?>