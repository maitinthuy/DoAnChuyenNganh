<?php
if(!isset($_SESSION)) session_start();//khởi động session
define("BASE_URL", "http://localhost:8080/WEBSITE");//khởi tạo một biến cố định có tên BASE_URL tương đương http://localhost:8080/WEBSITE
include "class/b.class.php";//vì gần như tất cả các file đều được nhúng vào index nên gọi cả 2 file class vô 1 lần trong index, những file chỉ cần sử dụng mà k cần gọi
include "class/gh.class.php";
$b = new B();
$cart = new GH();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="style/style.css" rel="stylesheet" />
<script type="text/javascript" src="jq/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jq/js/jssor.slider.debug.js"></script>
<script type="text/javascript" src="jq/js/jssor.slider.min.js"></script>
<script type="text/javascript" src="jq/js/jssor.slider.mini.js"></script>

<title>Space</title>
</head>


<body>
  <div id="menu1">
  	<div id="menu">
     <ul id="ul">
            <li><a href="index.php?mod=trangchu">Trang Chủ</a></li>
            <li><a href="index.php?mod=gioithieu">Giới Thiệu</a>
            	<ul>   
                <li><a href="index.php?mod=gioithieu&idgt=thongtin">Thông tin về SPACE </a></li>
                <li><a href="index.php?mod=gioithieu&idgt=quatrinh">Quá Trình Phát Triển </a></li>
                
                
          		</ul>
            </li>
            <li><a href="index.php?mod=sanpham">Sản Phẩm</a>
                <ul>
                    <?php
			$arr = $b->select("select * from danhmucsanpham");
            foreach($arr as $r)
            {
                ?><li>
                  <a href="index.php?mod=sanpham&i=loaisanpham&iddm=<?php echo $r["idTen"];?>"><?php echo $r["TenDanhMuc"];?> </a>
                </li><?php
            }
            ?>
                </ul>
            </li>
            <li><a href="index.php?mod=tintuc">Tin Tức</a>
            	<ul>
                    <?php
			$arr3 = $b->select("select * from loaitin ");
            foreach($arr3 as $r3)
            {
                ?><li>
                  <a href="index.php?mod=tintuc&j=loaitintuc&idLT=<?php echo $r3["idLoaiTin"];?>"><?php echo $r3["tenLoaiTin"];?> </a>
                </li><?php
            }
            ?>
                </ul>
            </li>
            <li><a href="index.php?mod=lienhe">Liên Hệ</a></li>
         
        </ul>
        <div class="search_box">
				<form action="index.php?mod=timkiem" method="post">
        <input type="text" name="timkiem" value="Nhập nội dung cần tìm" onblur="if(this.value=='') this.value='Nhập nội dung cần tìm'" onfocus="if(this.value=='Nhập nội dung cần tìm') this.value=''">
        <input type="submit" value="">
			    </form>
			</div>
        </div>
   
  <div id="cart"><a href="?mod=giohang">Giỏ Hàng(<?php echo  $cart->getNumItem(); ?>)</a></div>
        
  	
    </div>          
   </div>
    
    <div id="header">
		<?php
         include "jq/jquery.php"
        ?>	
    </div>
    
	<div id="hinhnen"><img src="images/12242192_623022827835749_1941150849_n.jpg"  width="100%" height="100%" /></div>
    
    <div id="content">
		<?php
        include "mod/moddanhmuc.php"; 
        ?>
    </div>
    <div id="footer">
		<?php
        include "include/footer.php"; 
        ?>
    </div>
    <div id="footer" style="width:100%; height:70px; margin:auto; background-color:#00A69B; line-height:30px;">
<p>CopyRight@ Phan Thị Thanh Mai</p>
Số xxx Cao Lỗ, Phường 4, Quận 8, TP.Hồ Chí Minh.
	
</div>
</div>
</body>
</html>