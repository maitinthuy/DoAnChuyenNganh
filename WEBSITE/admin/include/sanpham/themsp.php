
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
$a = new B();
?>

<form action="index.php?mod=themsp" method="post" enctype="multipart/form-data">
Mã sản phẩm: <input type="hidden" name="masanpham"  /><br />
Tên sản phẩm: <input type="text" name="tensanpham"/><br />
Đơn giá: <input type="text" name="gia" /><br />
Giá khuyến mãi: <input type="text" name="giaKM"  /><br />
Hình ảnh: <input type="file" name="hinh" /><br />
Tên Mã Loại: <select name="ml"/>
<?php
 $arr = $a->select("select * from loaisanpham");
 foreach($arr as $r)
 {
	 ?><option value="<?php echo $r["MaLoai"]; ?>"> <?php echo $r["TenLoai"]; ?></option>
 <?php
 }
 
?>
</select><br />
Tên Nhà cung cấp: <select name="mncc"/>
<?php
 $arr = $a->select("select * from nhacungcap");
 foreach($arr as $r)
 {
	 ?><option value="<?php echo $r["MaNCC"]; ?>"> <?php echo $r["TenNCC"]; ?></option>
 <?php
 }
 
?>
</select><br />

Chi tiết sản phẩm: <textarea rows="20" cols="70" name="chitiet">
</textarea>
<script type="text/javascript">CKEDITOR.replace( 'chitiet'); </script>
<input type="submit" value="thêm"/>
</form>