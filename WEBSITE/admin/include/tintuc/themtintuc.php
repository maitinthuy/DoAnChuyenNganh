<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<?php

$a = new B();
?>

<form action="index.php?mod=themtt" method="post" enctype="multipart/form-data">
ID Tin: <input type="hidden" name="idTin"  /><br />
ID Loại Tin: <select name="idLT">
<?php
	$arr = $a->select("select * from loaitin");
	foreach($arr as $r)
	{
		?><option value="<?php echo $r["idLoaiTin"]; ?>"><?php echo $r["tenLoaiTin"]; ?></option> <?php 
	}
?>
</select><br />
Ảnh Đại Diện:<input type="file" name="anhdaidien" /><br />
Tiêu đề: <input type="text" name="tieude" /><br />
Nội dung ngắn: <input type="text" name="ndngan" /><br />
Nội dung chi tiết:
<textarea rows="20" cols="70" name="noidung"></textarea> 

<script type="text/javascript">CKEDITOR.replace( 'noidung'); </script>
<input type="submit" value="thêm"/>
</form>