<?php
$id = $_POST["idtin"];
$lt = $_POST["loaitin"];
$ha = "images/".$_FILES["hinhanh"]["name"];
$td=$_POST["tieude"];
$ndn = $_POST["noidungngan"];
$ndc = $_POST["noidung"];

$b = new B();
$sql = "update from tintuc idTin='$id', idLoaiTin='$lt', anhDaiDien='$ha', tieuDe='$td', tomTatnd='$ndn', noiDungCT='$ndc' where idTin='$id'";
$r = array('$msp', '$ten', '$gia','$giaKM','$ha', '$ml', '$mncc', '$ct');
move_uploaded_file($_FILES["hinhanh"]["tmp_name"], '../'. $ha);
$m = $b->update($sql,$r);
?>
<script >
window.location="index.php?mod=hienthi";
</script>