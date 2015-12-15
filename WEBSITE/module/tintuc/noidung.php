<?php
$idTin = $_GET["idTin"];

$arr =$b->select("select * from tintuc where idTin='$idTin'");
foreach($arr as $r)
{
	echo $r["noiDungCT"];
}
?>