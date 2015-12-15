<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:dangnhap.php");
 exit;
	
}

//if(!isset($_SESSION)) session_start();//khởi động session
define("BASE_URL", "http://localhost:8080/WEBSITE");//khởi tạo một biến cố định có tên BASE_URL tương đương http://localhost:8080/WEBSITE
include_once "../class/b.class.php";//vì gần như tất cả các file đều được nhúng vào index nên gọi cả 2 file class vô 1 lần trong index, những file chỉ cần sử dụng mà k cần gọi
$b = new B();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>Trang quản lý</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="resources/scripts/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">ADMIN</a><br />
				<br />
				<a href="#" title="View the Site"></a> | <a href="logout.php" title="Sign Out">Log Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Danh mục sản phẩm
					</a>
					<ul>
						<li><a href="index.php?mod=themmoidanhmuc">THÊM DANH MỤC MỚI</a></li>
						<li><a class="current" href="index.php?mod=danhmuc">DANH SÁCH DANH MỤC</a></li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
                <li>
					<a href="#" class="nav-top-item">
						Nhà Cung Cấp
				  </a>
					<ul>
						<li><a href="index.php?mod=themnhacungcap">Thêm nhà cung cấp</a></li>
						<li><a href="index.php?mod=dsnhacungcap">Danh sách nhà cung cấp</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Loại sản phẩm
				  </a>
					<ul>
						<li><a href="index.php?mod=themloaimoi">Thêm loại sản phẩm</a></li>
						<li><a href="index.php?mod=dsloaisanpham">Danh sách loại sản phẩm</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Sản phẩm
				  </a>
					<ul>
						<li><a href="index.php?mod=themsanpham">Thêm sản phẩm</a></li>
						<li><a href="index.php?mod=dssanpham">Danh sách sản phẩm</a></li>
						<li><a href="index.php?mod=timkiemsp">Tìm kiếm sản phẩm</a></li>
                        <li><a href="index.php?mod=dscomment">Comment chưa kích hoạt</a></li>
					</ul>
				</li>
                <li>
					<a href="#" class="nav-top-item">
						TIN TỨC
				  </a>
					<ul>
						<li><a href="index.php?mod=themtintuc">THÊM MỚI TIN</a></li>
                        <li><a href="index.php?mod=dstintuc">Danh sách tin tức</a></li>
				
					</ul>
				</li>
				
				
				
				
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome <?php 
				$a = $b->select("select TenHienThi from admin");
				foreach($a as $r)
				{
					echo $r["TenHienThi"];
				}?>
			</h2>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				<?php
				include "mod.php";
				
				?>
			</div> <!-- End .content-box -->
			
			
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
