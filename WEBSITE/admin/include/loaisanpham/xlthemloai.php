

<?php
$ml=$_POST["maloai"];
$tl=$_POST["tenloai"];
$idTen =$_POST["idTen"];
$a = new B();
$sql="insert into loaisanpham(MaLoai,TenLoai, idTen) values('$ml','$tl','$idTen') ";
$arr=array ("'$ml','$tl','$idTen'");
$q=$a->insert($sql,$arr);

?>

<script >
window.location="index.php?mod=dsloaisanpham";
</script>
