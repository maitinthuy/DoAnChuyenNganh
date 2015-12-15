<?php
$ac = isset($_GET["ac"])?$_GET["ac"]:"";
if($ac == "del")
{
	include "include/danhmuc/delete.php";
}
if($ac == "edit")
{
	include "include/danhmuc/edit.php";
}
if($ac == "sua")
{
	include "include/danhmuc/xlsua.php";
}
if($ac == "delml")
{
	include "include/loaisanpham/delLoai.php";
}
if($ac == "editml")
{
	include "include/loaisanpham/editLoai.php";
}
if($ac == "xleditml")
{
	include "include/loaisanpham/xleditLoai.php";
}
if($ac == "editncc")
{
	include "include/nhacungcap/edit.php";
}
if($ac == "xleditncc")
{
	include "include/nhacungcap/xledit.php";
}
if($ac == "delncc")
{
	include "include/nhacungcap/delete.php";
}
if($ac == "editsp")
{
	include "include/sanpham/editsp.php";
}
if($ac == "xleditsp")
{
	include "include/sanpham/xleditsp.php";
}
if($ac == "delsp")
{
	include "include/sanpham/delsp.php";
}



 
?>