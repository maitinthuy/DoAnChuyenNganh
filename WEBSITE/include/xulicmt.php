<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include "../class/b.class.php";
$c = new B();
?>
<?php
$ma=$_POST["masanpham"];

$nd=$_POST["noidung"];

$t = "insert into binhluan(Masanpham,noidung) values('$ma','$nd') ";
$r = array("'$ma','$nd'");
	$n = $c->insert($t, $r);
	if ($nd==null)
		{?>
			<script language="javascript">
            alert("bạn phải nhập ít nhất 1 từ");
            window.location="../index.php?mod=chitiet&Masanpham=<?php echo $ma ?>";
            </script>
		<?php }
	else if($nd!=null)
		{
	?>
		<script language="javascript">
        alert("đã thêm bình luận");
        window.location="../index.php?mod=chitiet&Masanpham=<?php echo $ma ?>";    
        </script>
    <?php }
	?>
   
     