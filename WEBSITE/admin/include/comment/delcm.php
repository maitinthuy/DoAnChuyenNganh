<?php
$id=$_GET["id"];
$a = new B();
$sql="delete from binhluan where idbinhluan='$id' ";
$arr=array ("'$id'");
$q=$a->delete($sql,$arr);

?>
<script >
alert("đã xóa 1 comment!!!");
window.location="index.php?mod=dscomment";
</script>





