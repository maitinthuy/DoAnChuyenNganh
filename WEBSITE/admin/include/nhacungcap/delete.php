<?php 
$ma = $_GET["mncc"];

$b = new B();
$sql = "delete from nhacungcap where MaNCC='$ma' ";
$arr = array("$ma");
$t = $b->delete($sql,$arr);

if ($t==0) $thongbao="Loi xoa ";
	else $thongbao ="xoa $t loại sản phẩm ";
?>
<script >
window.location="index.php?mod=dsnhacungcap";
</script>


?>