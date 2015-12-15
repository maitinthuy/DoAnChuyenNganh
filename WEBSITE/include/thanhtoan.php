<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script type="text/javascript" src="js/js.js"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanh Toán</title>
</head>

<body>
<div id="cont">
	<div id="thongtin">
    	<div><h3 align="center">Thông tin khách hàng</h3></div>
    	<div>
        	<form action="xulythanhtoan.php" method="get" name="myForm" id="myForm" >
            	<p>Họ và Tên:<input type="text" name="txtHT" value="" id="txtHT" onblur="KiemtraHT();" /></p>
                <p>Số Điện Thoại:<input type="text" name="txtDT" value="" id="txtDT" onblur="KiemtraDT();" /></p>
                <p>Địa Chỉ:<input type="text" name="txtDC" value="" id="txtDC" onblur="KiemtraDC();" /></p>
        </div> 
          
     </div>
     
     <hr color="#FF0000" width="80%" align="center" />

	<div id="hinhthucthanhtoan">
    	
        	<input type="radio" name="hinhthuc" value="1" checked="checked"/>Thanh toán khi nhận hàng
            <input type="radio" name="hinhthuc" value="2"/>Thanh toán trực tuyến
            
        
    </div>
    <div id="submit">
    	
        	<input type="submit" name="thanhtoan" value="Thanh Toán" id="hinhthuc" />
        </form>
    </div>
</div>
<script>
function KiemtraHT()
{

	if(document.getElementById("txtHT").value == "")
	{
		alert("Vui lòng nhập họ và tên.");
		document.getElementById("txtHT").focus();
		document.getElementById("txtHT").style.backgroundColor="red";
		return false;
	}
}
function KiemtraDT()
{
	if(document.getElementById("txtDT").value == "")
	{
		alert("Chưa nhập số điện thoại.");
		document.getElementById("txtDT").focus();
		document.getElementById("txtDT").style.backgroundColor="red";
		return false;
	}
	if(isNaN(document.getElementById("txtDT").value)== true)
	{
		alert("Số điện thoại phải định dạng số");
		document.getElementById("txtDT").focus();
		document.getElementById("txtDT").style.backgroundColor="red";
		return false;
	}
	if(document.getElementById("txtDT").length < 10 || document.getElementById("txtDT").length > 11)
	{
		alert("Số điện thoại không hợp lệ");
		document.getElementById("txtDT").focus();
		document.getElementById("txtDT").style.backgroundColor="red";
		return false;
	}
}
function KiemtraDC()
{
	if(document.getElementById("txtDC").value=="" )
	{
		alert("Vui lòng nhập địa chỉ.");
		document.getElementById("txtDC").focus();
		document.getElementById("txtDC").style.backgroundColor="red";
		return false;
	}
}
</script>
<style>
#cont
{ background-color:#FFF;
width:100%;
height:100%;
}
#thongtin
{ 
margin:auto;
text-align:center;
width:80%;
height:100%;

}
#hinhthucthanhtoan
{
	margin:auto;
	text-align:center;
	width:80%;
	height:100%;
	border:groove;
}
#submit
{ 
margin:auto;
text-align:center;
width:80%;
height:100%;

}
form
{
	text-align:center;
	border:#F00;
	border:groove;

}
</style>



</body>
</html>
