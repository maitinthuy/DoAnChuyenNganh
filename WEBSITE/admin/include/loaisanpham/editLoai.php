<?php
$ml=$_GET["ml"];

$b = new B();
$t = $b->select("select * from loaisanpham where MaLoai = '$ml'");
foreach($t as $a)
{
?>
<form action="index.php?mod=danhmucsanpham&ac=xleditml" method="post">
Tên danh mục:<?php echo $a["idTen"]; ?><input type="hidden"   name="tendanhmuc"  value="<?php echo $a["idTen"]; ?>"  /><br />
Mã Loại:<?php echo $ml ?><input type="hidden"   name="maloai"  value="<?php echo $ml ?>" /><br />
Tên Loại:<input type="text" name="tenloai" value="<?php echo $a["TenLoai"]; ?> "/><br />

<input type="submit" value="sua"/>
</form>
<?php
}
?>


