<?php

$id=$_POST["idTin"];
$lt=$_POST["idLT"];
$anhdaidien= "images/".$_FILES["anhdaidien"]["name"];
$td=$_POST["tieude"];
$ndn=$_POST["ndngan"];
$ndc = $_POST["noidung"];

$a = new B();
$sql="insert into tintuc(idTin,idLoaiTin,anhDaiDien,tieuDe,tomTatnd,noiDungCT) 
values('$id','$lt','$anhdaidien','$td','$ndn','$ndc') ";
$arr=array ('$id','$lt','$anhdaidien','$td','$ndn','$ndc');
move_uploaded_file($_FILES["anhdaidien"]["tmp_name"], '../'. $anhdaidien);
$q=$a->insert($sql,$arr);


?>
<script>
alert("Đã thêm 1 tin thành công");
window.location = "index.php?mod=dstintuc";
</script>