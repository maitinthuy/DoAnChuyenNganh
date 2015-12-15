<?php

$ma = $_POST["mancc"];
$ten = $_POST["tenncc"];
$lh = $_POST["lienhe"];

$b = new B();
$sql = "update nhacungcap set MaNCC='$ma',TenNCC='$ten',LienHe='$lh' where MaNCC='$ma'";
$arr = array("'$ma','$ten','$lh'");
$t = $b->update($sql,$arr);
 

?>

<script>
window.location="index.php?mod=dsnhacungcap";
</script>