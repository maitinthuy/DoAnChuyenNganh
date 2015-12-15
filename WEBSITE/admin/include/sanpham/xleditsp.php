<?php
$msp = $_POST["masanpham"];
$ten = $_POST["tensanpham"];
$gia = $_POST["gia"];
$giaKM = $_POST["giaKM"];
$ha = "images/".$_FILES["hinhanh"]["name"];
$ml=$_POST["maloai"];
$mncc = $_POST["nhacungcap"];
$ct = $_POST["chitiet"];

$a = new B();
$sql = "update sanpham set Masanpham='$msp', Tensanpham='$ten', Dongia='$gia', GiaKhuyenMai='$giaKM', Hinhanh='$ha', MaLoai='$ml', MaNCC='$mncc', chitiet='$ct' where Masanpham = '$msp' ";
$arr = array("'$msp', '$ten', '$gia','$giaKM','$ha', '$ml', '$mncc', '$ct'" );
//print_r($arr);
move_uploaded_file($_FILES["hinhanh"]["tmp_name"], '../'. $ha);
$q = $a->update($sql,$arr);
?>
<script >
//window.location="index.php?mod=hienthi";
</script>