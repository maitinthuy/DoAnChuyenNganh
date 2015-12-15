<?php 
include_once "b.class.php";
class GH extends B
{
	private $giohang;
	private $_num_item =0;
	private $tongtien =0;//biến toàn cục cho class sử dụng
	public function  __construct()//hàm khởi tạo, mặc định với tên như thế, khi gọi nhúng class này sẽ tự động chạy hàm này
	{
		
		if(!isset($_SESSION["giohang"])) $_SESSION["giohang"] = array();
		else $this->giohang = $_SESSION["giohang"];//nếu đã tồn tại rồi thì gio hàng bằng phiên làm việc có tên giỏ hang
		$this->_num_item = array_sum($_SESSION["giohang"]);//tổng cái sp có trog giỏ hàng
		
	}
	
	public function  getTongTien(){return $this->tongtien;}
	public function getNumItem()//hàm lấy tổng các sản phẩm có trong cart
	{
		return $this->_num_item;	
	}
	
	public function Add($masanpham, $soluong)
	{
		//echo "Them....";
		if ($masanpham=="" || $soluong<1) return;//không có sp nào		
		if (!isset($this->giohang[$masanpham]))
			$this->giohang[$masanpham]=$soluong;
		else 
			$this->giohang[$masanpham]+=$soluong;
			
		
		$this->_num_item = array_sum($this->giohang);
		
		$_SESSION["giohang"] = $this->giohang;	//lưu phiên làm việc này lại
	
		
	}
	public function remove($masanpham)
	{
		//echo "Xoa....";
		unset($this->giohang[$masanpham]);
		$this->_num_item = array_sum($this->giohang);
		$_SESSION["giohang"] = $this->giohang;	
	}
	public function removeAll()
	{
		unset($_SESSION["giohang"]);
		//header("location:index.php");
		echo "<script language=javascript>window.location='index.php?mod=giohang';</script>";
	
	}
	
	
	public function show()
	{
		?><form action="index.php?mod=thanhtoan" method="post"><?php
		if (Count($this->giohang)==0) 
		{	echo "Giỏ hàng rỗng";
			return;
		}
		else
		{
		
		echo "<table style='width:100%' border=\"0\"><tr  border=\1\><td>Sản phẩm đã chọn</td><td>Số lượng</td><td>Giá mua</td><td>Giá Khuyến Mãi</td><td>Thành tiền</td></tr>";
		
		{
			$tongtien =0;//khởi tạo tổng tiền trong hàm hiển thị
			foreach($this->giohang as $msp=>$sl)
			{
				$a = new B();
				$arr = $a->select("select * from sanpham where Masanpham='$msp'");
				foreach($arr as $r)
				{
					$tongtien += ($sl*$r['Dongia'] - $sl*$r['GiaKhuyenMai']);
                ?>
                <?php
					
					echo "<tr>";
                ?>
              
                
                 <td><div style="float:right; width:50%;">
                 	
                 	<?php echo $r["Masanpham"]; ?><input type="hidden" name="masanpham" value="<?php echo $r["Masanpham"]; ?>" />
				 	<p><?php echo $r["Tensanpham"]; ?></p>
                    <p><?php echo $r["MaNCC"]; ?></p>
                    <p><a href="<?php echo BASE_URL; ?>/index.php?mod=giohang&ac=del&masanpham=<?php echo $msp;?>"><img src="images/Trash-25.png"</a></p>
                 </div>
                 <div style="float:left; width:50%;"><img src="<?php echo BASE_URL."/". $r['Hinhanh'] ?>" width="100px"  height="100px"/></div> </td>
					  
					
                   <td> <?php echo $sl;?><input type="hidden" name="soluong" value="<?php echo $sl;?>" /></td>
					<td><?php echo  number_format($r['Dongia'],3)." đồng";?><input type="hidden" name="dongia" value="<?php echo $r["Dongia"]; ?>" /></td>
                    <td><?php 
					if($r['GiaKhuyenMai']!=0) 
					{
						echo  number_format(($r['Dongia'] - $r['GiaKhuyenMai']),3)." đồng";
					}
					else echo "0 đồng"; ?>
                    </td>
					<td><?php echo number_format((($sl*$r['Dongia']) - ($sl*$r['GiaKhuyenMai'])),3)." đồng";?></td>
                    
                    
					<?php echo "</tr>";
				}
		}
		echo "</table>";
		}
		
		
		$this->tongtien= $tongtien;//gán tổng tiền trong hàm cho biến tong tiền của class
}
?>
<td><h2>Tổng thành tiền: <?php echo number_format($tongtien,3); ?> đồng</h2><input type="hidden" name="thanhtien" value="<?php echo $tongtien; ?>" />
<input type="submit" name="sm" value="Thanh toán" /></td>
</form>
<table width="100%" border="5">
  <tr>
    <td><a class="a" href="<?php echo BASE_URL;?>/index.php">Tiếp tục mua hàng</a></td>
    <td><a class="a" href="<?php echo BASE_URL; ?>/index.php?mod=giohang&ac=delAll">Xóa toàn bộ giỏ hàng</a></td>
  </tr>
</table>

<?php
	}
	
}
?>