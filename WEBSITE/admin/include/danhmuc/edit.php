<?php
$id=$_GET["idten"];

$b = new B();
$t = $b->select("select * from danhmucsanpham where idTen = '$id'");
foreach($t as $a)
{
?>
<form action="index.php?mod=danhmucsanpham&ac=sua" method="post">
id danh mục:<?php echo $id ?><input type="hidden"   name="iddanhmuc"  value="<?php echo $id ?>" /><br />
tên danh mục<input type="text" name="tendanhmuc" value="<?php echo $a["TenDanhMuc"]; ?> "/>
<input type="submit" value="sua"/>
</form>
<?php
}
?>


