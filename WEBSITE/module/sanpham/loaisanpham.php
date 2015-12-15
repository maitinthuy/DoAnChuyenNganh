<?php
$iddm= $_GET["iddm"];
$dm = $b->select("select * from danhmucsanpham where idTen='$iddm'");
foreach($dm as $r)
{
	$lsp = $b->select("select * from loaisanpham where idTen='$r[idTen]'");
	foreach($lsp as $s)
	{
	?>
		<div id="tenloai"><a href="index.php?mod=sanpham&i=sanpham&maloai=<?php echo $s["MaLoai"] ?>" style="color:#000;  font-size:30px;"><?php echo $s["TenLoai"];?> </a></br></div>     
       <?php
			 	$sp = $b->select("select * from sanpham  where MaLoai='$s[MaLoai]'  limit 0,6");
				foreach($sp as $s1)
				{
				?>
               
       <div id="hinhanh">
       <div id="noidungngan"><a href="index.php?mod=chitiet&Masanpham=<?php echo $s1["Masanpham"] ?>">Xem Chi Tiet</a></br><?php echo $s1["chitiet"] ?></div>
       <img src="<?php echo $s1["Hinhanh"]?> " height="200px"; width="240px"; /><?php echo $s1["Tensanpham"]; ?> <br /></div>
       <?php
	}
	
	}
	
}
?>