<?php
$ml=$_GET["ml"];
$a = new B();
$sql="delete from loaisanpham where MaLoai='$ml' ";
$arr=array ("'$ml'");
$q=$a->delete($sql,$arr);

if ($q==0) $thongbao="Loi xoa ";
	else $thongbao ="xoa $q loại sản phẩm ";
?>
<script >
window.location="index.php?mod=dsloaisanpham";
</script>





