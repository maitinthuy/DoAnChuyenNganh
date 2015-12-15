<?php
$id = $_GET["idtin"];

$b = new B();
$sql = "delete from tintuc where idTin = '$id' ";
$arr = array('$id');
$del = $b->delete($sql,$arr);


?>
<script>
alert("Đã xóa thành công");
window.location = "index.php?mod=dstintuc";
</script>