<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//define("BASE_URL", "http://localhost:8080/WEBSITE");
//include "../../class/gh.class.php";
//include "class/gh.class.php";
$cart = new GH();
if(!isset($_SESSION)) session_start();//khỏi động session



$giohang = isset($_GET["giohang"])?$_GET["giohang"]:"";
$soluong= isset($_GET["soluong"])?$_GET["soluong"]:1;
$masanpham=isset($_GET["masanpham"])?$_GET["masanpham"]:"";
$ac = isset($_GET["ac"])?$_GET["ac"]:"";
if ($ac=="add") $cart->Add($masanpham, $soluong);
if ($ac=="del") $cart->remove($masanpham);
if($ac=="delAll") $cart->removeAll();
?>
<div id="ng">
	<?php if($cart->getNumItem() > 0)
	{
		?>
		<div>	
				<?php 
               
                $cart->show($giohang);
                ?>        
   		</div>
        
		<?php
	} 
		else 
		{
		$cart->show($giohang); ?>
		<p><a class="a" href="<?php echo BASE_URL;?>/index.php">Tiếp tục mua hàng</a></p>
		<?php 
		} ?>

</div>
