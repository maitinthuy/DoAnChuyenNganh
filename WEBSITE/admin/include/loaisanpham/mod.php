<?php
$mod = isset($_GET["mod"])?$_GET["mod"]:"home";
if($mod=="home")
{
	include"include/danhmuc/danhmuc.php";
}
if($mod=="danhmuc")
{
	include"include/danhmuc/danhmuc.php";
}
if($mod == "dsloaisanpham")
{
	include "include/loaisanpham/dsloaisanpham.php";
}
if($mod == "dsnhacungcap")
{
	include "include/nhacungcap/dsNCC.php";
}
if($mod == "themnhacungcap")
{
	include "include/nhacungcap/themNCC.php";
}
if($mod == "themncc")
{
	include "include/nhacungcap/xlthem.php";
}
if($mod=="themmoidanhmuc")
{
	include"include/danhmuc/themmoidanhmuc.php";
}

if($mod=="them")
{
	include"include/danhmuc/xlthem.php";
	}
if($mod == "themloai")
{
	include "include/loaisanpham/xlthemloai.php";
}
if($mod == "themloaimoi")
{
	include "include/loaisanpham/themloaimoi.php";
}
if($mod == "themloai")
{
	include "include/loaisanpham/xlthemloai.php";
}
if($mod == "dssanpham")
{
	include "include/sanpham/hienthi.php";
}



if($mod == "danhmucsanpham")
{
	include "ac.php";
}


if($mod == "hienthi")
{
	include "include/sanpham/hienthi.php";
}
if($mod == "themsanpham")
{
	include "include/sanpham/themsp.php";
}
if($mod == "themsp")
{
	include "include/sanpham/xlthemsp.php";
}



if($mod == "dstintuc")
{
	include "include/tintuc/dstintuc.php";
}
if($mod == "themtintuc")
{
	include "include/tintuc/themtintuc.php";
}


?>