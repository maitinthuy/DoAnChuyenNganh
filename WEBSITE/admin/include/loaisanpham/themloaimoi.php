
<?php

$a = new B();
?>

<form action="index.php?mod=themloai" method="post">
Mã Loại: <input type="text" name="maloai"  />
Tên Loại: <input type="text" name="tenloai"/>
Tên ID Tên Danh Mục: <select name="idTen"/>
<?php
 $arr = $a->select("select * from danhmucsanpham");
 foreach($arr as $r)
 {
	 ?><option value="<?php echo $r["idTen"]; ?>"> <?php echo $r["TenDanhMuc"]; ?></option>
 <?php
 }
 
?>
</select>
<input type="submit" value="thêm"/>
</form>