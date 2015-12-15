<?php

$masp = $_POST["masanpham"];
$dg = $_POST["dongia"];
$sl = $_POST["soluong"];
$tt = $_POST["thanhtien"];



$b = new B();
$sql = "insert into hoadon(MaHD,TenKhachHang,SoDienThoai,DiaChi,ThanhTien) values('','','','','$tt')";
$arr = array(" '', '', '', '', '$tt' ");
//print_r($arr);
$s = $b->insert($sql,$arr);

$ct = $b->select("select * from hoadon ") ;
foreach($ct as $s)
{
	$mhd = $s["MaHD"];
	$sql2 = "insert into chitiethoadon(MaChiTiet,MaSanPham,MaHD,DonGia,SoLuong) values('','$masp','$mhd','$dg','$sl') ";
	$arr = array("'','$masp','$mhd','$dg','$sl'");
	print_r($arr);
}
?>

