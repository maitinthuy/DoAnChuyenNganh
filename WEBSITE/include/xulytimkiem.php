<style>
#ben_ngoai{ height:150px; width:750px;}
.hinh{ width:150px; height:150px; float:left}
.ben_phai{ height:150px; float:left; margin-left:150px; margin-top:-150px;}
.chitiet{width:500px; height:100px; float:left;}
.a{color:#F00;}
</style>
<?php
$timkiem =$_POST["timkiem"];
$sql ="select * from sanpham where Tensanpham like '%$timkiem%' ";
$arr = array("timkiem"=>$timkiem);
$kq = $b->select($sql, $arr);
if($timkiem==null)
{
	?>
    <script language="javascript">
	alert("bạn phải nhập ít nhất 1 từ");
	window.location="index.php";
    
    </script>
    <?php
}
?>
<?php
if (Count($kq)==0)
{?>
	<script language="javascript">
	alert("không tìm được");
	window.location="index.php";
    
    </script>
    <?php
}
else 
{
?>
    <?php echo "KẾT QUẢ TÌM KIẾM"; ?><br/><P>
		<div id="ben_ngoai">
           <?php 
			foreach($kq as $r)
				{
				?>               	
				<div class="hinh"><img src='<?php echo $r["Hinhanh"];?>'  width="145" height="145"/></div>
                <div class="ben_phai">
                    <div class="ten"><a class="a" href="index.php?mod=chitiet&Masanpham=<?php echo $r["Masanpham"] ?>"><?php echo $r["Tensanpham"];?></a></div> <br/>                               
                    <div class="chitiet"><?php echo $r["Dongia"];?></div><br/>
                </div><br/>
				<?php
				}
				?>	
		</div>
  					
					
<?php
}
?>