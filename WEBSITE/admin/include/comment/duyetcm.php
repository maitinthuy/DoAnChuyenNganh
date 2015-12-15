<?php	
	$idbinhluan= $_GET["id"];

	$sql ="update binhluan  set duyet='1' where idbinhluan='$idbinhluan'  ";
	$b = new B();
	$arr = array($idbinhluan);
	$n = $b->update($sql, $arr);
	?>
	 <script language="javascript">
	alert("đã duyệtt 1 comment");
    window.location="index.php?mod=dscomment";
    </script>