<?php
$id=$_GET["idten"];
$a = new B();
$sql="delete from danhmucsanpham where idTen='$id' ";
$arr=array ("'$id'");
$q=$a->delete($sql,$arr);

if ($q==0) $thongbao="Loi xoa ";
	else $thongbao ="xoa $q danh muc ";
?>
<script >
window.location="index.php?mod=danhmuc";
</script>





