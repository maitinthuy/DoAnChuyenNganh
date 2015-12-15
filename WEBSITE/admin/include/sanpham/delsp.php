<?php 
$ma = $_GET["msp"];

$b = new B();
$sql = "delete from sanpham where Masanpham='$ma' ";
$arr = array("$ma");
$t = $b->delete($sql,$arr);


?>
<script >
alert("Đã xóa thành công");
window.location="index.php?mod=hienthi";
</script>


?>