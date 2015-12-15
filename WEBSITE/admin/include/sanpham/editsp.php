
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
$msp=$_GET["msp"];

$b = new B();
$t = $b->select("select * from loaisanpham lsp inner join sanpham sp inner join nhacungcap ncc on sp.MaLoai=lsp.MaLoai and sp.MaNCC=ncc.MaNCC  where Masanpham = '$msp'");
foreach($t as $a)
{
?>
<form action="index.php?mod=danhmucsanpham&ac=xleditsp" method="post" enctype="multipart/form-data">
Mã sản phẩm: <?php echo $msp; ?><input type="hidden" name="masanpham" /></br>
Tên sản phẩm:<input type="text" name="tensanpham" value="<?php echo $a["Tensanpham"]; ?> " /></br>
Đơn giá: <input type="text" name="gia" value="<?php echo number_format($a["Dongia"],3); ?>" /></br>
Giá khuyến mãi: <input type="text" name="giaKM" value="<?php echo number_format($a["GiaKhuyenMai"],3); ?>"/></br>
Hình ảnh: <input type="file" name="hinhanh" /></br>
Tên Loại:<?php echo $a["TenLoai"]; ?> <input type="hidden" name="maloai" /></br>
Tên nhà cung cấp:<?php echo $a["TenNCC"]; ?><input type="hidden" name="nhacungcap" /></br>
Chi tiết sản phẩm: <textarea rows="20" cols="70" name="chitiet"><?php echo $a["chitiet"]; ?></textarea></br>
<script type="text/javascript">CKEDITOR.replace( 'chitiet'); </script>
<input type="submit" value="sua"/>
</form>
<?php
}
?>


