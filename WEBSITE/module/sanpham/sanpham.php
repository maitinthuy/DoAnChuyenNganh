<div id="content">


<?php
	$ml=$_GET["maloai"];
	$sql = $b->select("select Count(*) as dem from sanpham where MaLoai = '$ml' ");
	
	//print_r($sql);
	$n = $sql[0]["dem"];
	//echo "ban dang co $n tin ";
	$pageSize = 9;
	$sotrang = ceil($n/$pageSize);//ceil lam tron len
	$page = isset($_GET["page"])?$_GET["page"]:1;
	$vt = ($page-1) *$pageSize;
	
	$query = "select * from sanpham  where MaLoai = '$ml' limit $vt, $pageSize";
	//echo $query;
	
$a1=$b->select($query);

				foreach($a1 as $n)
				{
				?>
               
       <div id="hinhanh">
       <div id="noidungngan"><a href="index.php?mod=chitiet&Masanpham=<?php echo $n["Masanpham"] ?>">Xem Chi Tiet</a></br><?php echo $n["chitiet"] ?></div>
       <img src="<?php echo $n["Hinhanh"]?> " height="200px"; width="240px"; /><?php echo $n["Tensanpham"]; ?> <br /></div>
                
           
                <?php 
				}
		
     
            


?>
<div style="color:#F00; clear:both; text-align:center;">
	<?php
for($i=1; $i<= $sotrang; $i++)
{
	?>
    <a class="a" href="index.php?mod=sanpham&i=sanpham&maloai=<?php echo $ml;?>&page=<?php echo $i;?>"><?php echo $i;?></a>&nbsp;
    <?php	
}
?>
</div>
</div>
<style>
.a{ color:#F00;}
</style>

