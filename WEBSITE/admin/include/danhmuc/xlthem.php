

<?php
$id=$_POST["iddanhmuc"];
$ten=$_POST["tendanhmuc"];
$a = new B();
$sql="insert into danhmucsanpham(idTen,TenDanhMuc) values('$id','$ten') ";
$arr=array ("'$id','$ten'");
$q=$a->insert($sql,$arr);

?>

<script >
window.location="index.php?mod=danhmuc";
</script>
