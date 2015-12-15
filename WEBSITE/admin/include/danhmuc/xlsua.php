

<?php
$id=$_POST["iddanhmuc"];
$ten=$_POST["tendanhmuc"];
$a = new B();
$sql="update danhmucsanpham  set idTen='$id',TenDanhMuc='$ten' where  idTen='$id'  ";
$arr=array ("'$id','$ten'");
$q=$a->update($sql,$arr);

?>


<script >
window.location="index.php?mod=danhmuc";
</script>
