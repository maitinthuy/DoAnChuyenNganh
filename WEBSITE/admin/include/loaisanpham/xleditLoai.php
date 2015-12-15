

<?php
$idten=$_POST["tendanhmuc"];
$ml=$_POST["maloai"];
$tl=$_POST["tenloai"];

$a = new B();
$sql="update loaisanpham  set MaLoai='$ml',TenLoai='$tl',idTen='$idten'  where  MaLoai='$ml'  ";
$arr=array ("'$ml','$tl','$idten'");
$q=$a->update($sql,$arr);

?>


<script >
window.location="index.php?mod=dsloaisanpham";
</script>
