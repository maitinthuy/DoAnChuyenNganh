<?php 
include "../class/b.class.php";
$t = new B();
session_start();
if(isset($_SESSION["admin"]));
{
$user = $_POST["Username"];
$pass = md5($_POST["Password"]);

$sql ="select User, TenHienThi from admin where User='$user' and Password='$pass'";

//echo $sql;

$arr = array();//'$user','$pass');

$a=$t->select($sql);
//print_r($a);exit;
//if(isset($_SESSION["admin"]))
//{
	if($t->getNum()==0)
	{
		?><script>
		 alert('Mat khau hoac pass khong dung');
		 window.location="dangnhap.php";  
		 </script><?php
		 exit;
	}
	else
	{
		$_SESSION["admin"]= $a[0];
		echo "dang nhap thanh cong";
		?>
		<script>window.location="index.php";</script>
		<?php
	}

}


?>