<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center"><h2>Văn Phòng Space</h2>
<hr />
<p><b style="font-size:20px;">Tòa nhà xxxx</b><br />
<b>Địa chỉ:</b> Số xxx Cao Lỗ, P.4, Q.8, TP.Hồ Chí Minh.<br />
<b>Điện thoại:</b> 08-xxxxxxxx.<br />
<b>Fax:</b> 08-xxxxxxxx.<br />
<b>Email:</b> xxxxxx@gmail.com.</p>
<p>Mọi thắc mắc và yêu cầu cần hỗ trợ từ Space, vui lòng để lại thông tin tại đây.<br />Chúng tôi sẽ xem xét và gửi phản hồi sớm nhất.</p>
<style>
input{ padding:5px 5px 5px 5px;}
</style>
<form name="contactform" method="post" action="sendemail.php">
	<table width="550px" class="name">
	<tr>
		<td valign="top">
			<label for="name"><b>Họ và tên *</b></label>
		</td>
		<td valign="top">
		<input  type="text" name="name" maxlength="50" size="50">
		</td>
	</tr>
	<tr>
		<td valign="top">
			<label for="dia_chi"><b>Địa chỉ *</b></label>
		</td>
		<td valign="top">
		<input  type="text" name="dia_chi" maxlength="50" size="50">
		</td>
	</tr>
    <tr>
    	<td valign="top">
    	<label for="email"><b>Email Address *</b></label>
    	</td>
    	<td valign="top">
    	<input  type="text" name="email" maxlength="80" size="50">
    	</td>
    </tr>
    <tr>
    	<td valign="top">
    	<label for="telephone"><b>Điện thoại</b></label>
    	</td>
    	<td valign="top">
    	<input  type="text" name="telephone" maxlength="30" size="50">
    	</td>
    </tr>
    <tr>
    	<td valign="top">
    	<label for="comments"><b>Nội dung *</b></label>
    </td>
    	<td valign="top">
    	<textarea  name="comments" maxlength="1000" cols="50" rows="6"></textarea>
    	</td>
    </tr>
    <tr>
    	<td colspan="2" style="text-align:center">
    	<input type="submit" value="Gửi liên hệ">
        </td>
    </tr>
</table>
</form>
</div>
</body>
</html>