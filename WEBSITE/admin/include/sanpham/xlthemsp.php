<?php

$msp=$_POST["masanpham"];
$tensp=$_POST["tensanpham"];
$gia=$_POST["gia"];
$giaKM = $_POST["giaKM"];
$hinhdaidien= "images/".$_FILES["hinh"]["name"];
$ml=$_POST["ml"];
$ncc=$_POST["mncc"];
$ct = $_POST["chitiet"];

$a = new B();
$sql="insert into sanpham(Masanpham,Tensanpham,Dongia,GiaKhuyenMai, Hinhanh, MaLoai, MaNCC, chitiet) values('$msp','$tensp','$gia','$giaKM','$hinhdaidien','$ml','$ncc','$ct') ";
$arr=array ('$msp','$tensp','$gia','$giaKM','$hinhdaidien','$ml','$ncc','$ct');
move_uploaded_file($_FILES["hinh"]["tmp_name"], '../'. $hinhdaidien);
$q=$a->insert($sql,$arr);


?>
<script>
window.location = "index.php?mod=hienthi";
</script>