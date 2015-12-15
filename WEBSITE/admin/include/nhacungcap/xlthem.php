

<?php
$mncc=$_POST["mancc"];
$tncc=$_POST["tenncc"];
$lh = $_POST["LH"];

$a = new B();
$sql="insert into nhacungcap(MaNCC,TenNCC,LienHe) values('$mncc','$tncc','$lh') ";
$arr=array ("'$mncc','$tncc','$lh'");
$q=$a->insert($sql,$arr);

?>

<script >
window.location="index.php?mod=dsnhacungcap";
</script>
