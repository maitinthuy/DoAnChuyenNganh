<?php


$ma = $_GET["mncc"];
$b = new B();
$t= $b->select("select * from nhacungcap where MaNCC='$ma'");
foreach($t as $r)
{
?>
<form action="index.php?mod=danhmucsanpham&ac=xleditncc" method="post">
	Mã Nhà Cung Cấp: <?php echo $ma; ?><input type="hidden" name="mancc" value="<?php echo $r["MaNCC"]; ?>" /><br>
    Tên Nhà CUng Cấp:  <input type="text" name="tenncc" value="<?php echo $r["TenNCC"]; ?>" /><br>
    Liên Hệ:  <input type="text" name="lienhe" value="<?php echo $r["LienHe"]; ?>" /><br>
	<input type="submit" value="Sửa" />

</form>
<?php
}
?>