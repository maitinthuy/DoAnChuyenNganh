<style>
/*#footer{width:1200px;float:left; margin-top:30px;}*/
#danhmuc{width:140px; height:140px; float:left; font-size:24px; font-weight:bold; text-align:left;}
#loaisanpham{font-size:24px; font-style:italic;font-weight:500; text-align:left; }
</style>
<?php
$arr = $b->select("select * from danhmucsanpham");
foreach($arr as $r)
{?>

<div id="danhmuc"><a href="index.php?mod=sanpham&i=loaisanpham&iddm=<?php echo $r["idTen"];?>" style="color:#006;"><?php echo $r["TenDanhMuc"];?></a>
    <?php 
		$arr1 = $b->select("select * from loaisanpham where idTen='$r[idTen]'");
		
	foreach($arr1 as $r2)
	{
		?>
        <div id="loaisanpham">
       <a href="index.php?mod=sanpham&i=sanpham&maloai=<?php echo $r2["MaLoai"];?>" style="color:#FC3;"><?php echo $r2["TenLoai"];?></a>
       
        </div>
        <?php
	}
	?>
</div>

<?php
}
?>




