<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['email'])) {
 
// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "you@yourdomain.com";
$email_subject = "Your email subject line";
 
function died($error) {
// your error code can go here
echo "We are very sorry, but there were error(s) found with the form you submitted. ";
echo "These errors appear below.<br /><br />";
echo $error."<br /><br />";
echo "Please go back and fix these errors.<br /><br />";
die();
}
 
// validation expected data exists
if(!isset($_POST['name']) ||
!isset($_POST['dia_chi']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {
died('We are sorry, but there appears to be a problem with the form you submitted.');
}
 
$name = $_POST['name']; // required
$dia_chi = $_POST['dia_chi']; // required
$email_from = $_POST['email']; // required
$telephone = $_POST['telephone']; // not required
$comments = $_POST['comments']; // required
 
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
$error_message .= ' Địa chỉ email không hợp lệ.<br />';
}
$string_exp = "/^[A-Za-z .'-]+$/";
if(!preg_match($string_exp,$name)) {
$error_message .= 'The Name you entered does not appear to be valid.<br />';
}
if(!preg_match($string_exp,$dia_chi)) {
$error_message .= 'The Adđ you entered does not appear to be valid.<br />';
}
if(strlen($comments) < 2) {
$error_message .= 'The Comments you entered do not appear to be valid.<br />';
}
if(strlen($error_message) > 0) {
died($error_message);
}
$email_message = "Form details below.\n\n";
 
function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}
 
$email_message .= "Họ và tên: ".clean_string($name)."\n";
$email_message .= "Địa chỉ: ".clean_string($dia_chi)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Điện thoại: ".clean_string($telephone)."\n";
$email_message .= "Nội dung: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>
</body>
</html>