<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "../class/gh.class.php";
$a = new GH();
$hinhthuc = $_GET["hinhthuc"];
$txtHT = $_GET["txtHT"];
$txtDT = $_GET["txtDT"];
$txtDC = $_GET["txtDC"];
if($hinhthuc==1)
{
	?><p><h3>Thanh Toán Thành Công</h3></p>
      <p>Đơn hàng của bạn: <?php echo "$txtHT";?></p>
      <p>Mã đơn hàng:</p><!--code php để lấy mã đơn hàng từ csdl -->
      <p>Tổng tiền: <?php echo $a->getTongTien(); ?></p><!--code php để lấy thành tiền từ bảng hóa đơn từ csdl -->
      <p>Ngày đặt hàng:</p><!--code php để lấy ngày đặt hàng từ bảng hóa đơn từ csdl -->
      <hr>
      <p>Thông tin giao hàng</p>
      <p>Người nhận: <?php echo "$txtHT";?></p>
      <p>Số Điện Thoai: <?php echo "$txtDT";?></p>
      <p>Địa Chỉ: <?php echo "$txtDC";?></p>
      <p>Hình thức thanh toán: Thanh toán khi nhận hàng</p>
	<?php
}

if($hinhthuc==2)
{
	echo "<script language=javascript>window.location='index.php';</script>";
}


?>