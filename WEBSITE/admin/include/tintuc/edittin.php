
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
$id=$_GET["idtin"];

$b = new B();
$t = $b->select("select * from tintuc, loaitin  where tintuc.idLoaiTin=loaitin.idLoaiTin and idTin='$id'");
foreach($t as $a)
{
?>
<form action="index.php?mod=danhmucsanpham&ac=xledittin" method="post" enctype="multipart/form-data">
ID Tin: <?php echo $id; ?><input type="hidden" name="idtin" /></br>
Loại Tin :<?php echo $a["tenLoaiTin"]; ?><input type="hidden" name="loaitin" /></br>
Hình ảnh: <input type="file" name="hinhanh" /></br>
Tiêu đề : <input type="text" name="tieude" value="<?php echo $a["tieuDe"]; ?>" /></br>
Nội dung ngắn :<input type="text" name="noidungngan" value="<?php echo $a["tomTatnd"]; ?>" /></br>
Nội dung chi tiết: <textarea rows="20" cols="70" name="noidung"><?php echo $a["noiDungCT"]; ?></textarea></br>
<script type="text/javascript">CKEDITOR.replace( 'noidung'); </script>
<input type="submit" value="sua"/>
</form>
<?php
}
?>




