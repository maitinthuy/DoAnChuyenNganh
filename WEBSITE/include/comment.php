<style>
element.style {
  display: block;
}
.commentbox {
  float: left;
  border-radius: 5px;
  width: 1000px;
  padding: 0 0 8px;
  margin: 20px 0 8px 0;
  display: none;
 }
.commentbox header {
  line-height: 20px;
  height: 30px;
  padding: 0 5px 0 20px;
  margin-bottom: 0;

  font-family: 'Segoe UI', 'HelveticaNeue', Arial, Helvetica, sans-serif;
  font-size: 14px;
}
article, aside, details, figcaption, figure, header, hgroup, menu, nav, section {
  display: block;
}
.commentbox .form p.contents label { margin-left:15px;}
.commentbox .form textarea {
  width: 100%;
  height: 100px;
  margin-top:10px;
  margin-left:5px;
}

.commentbox .form textarea, .commentbox > form input {
  width: 70%;
  border: 1px solid #aaa;
  border-radius: 3px;
  padding: 5px 5px;
  display: inline-block;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
user agent stylesheettextarea {
  font-family: monospace;
  border-color: rgb(169, 169, 169);
}
user agent stylesheettextarea {
  -webkit-appearance: textarea;
  background-color: white;
  border: 1px solid;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  -webkit-rtl-ordering: logical;
  -webkit-user-select: text;
  flex-direction: column;
  resize: auto;
  cursor: auto;
  padding: 2px;
  white-space: pre-wrap;
  word-wrap: break-word;
}
user agent stylesheetinput, textarea, keygen, select, button {
  margin: 0em;
  font: normal normal normal 13.3333330154419px/normal Arial;
  text-rendering: auto;
  color: initial;
  letter-spacing: normal;
  word-spacing: normal;
  text-transform: none;
  text-indent: 10px;
  text-shadow: none;
  display: inline-block;
  text-align: start;
}
user agent stylesheetinput, textarea, keygen, select, button, meter, progress {
  -webkit-writing-mode: horizontal-tb;
}
.commentbox .form {
  float: left;
  width: 100%;
  padding: 0 0;
  border: 1px solid #dadada;
  border-top: 2px solid #888;
  box-shadow: 0 2px 0px #f7f7f7;
}
.commentbox .form p.contents {
  width: 100%;
  border: 0;
  position: relative;
}
.commentbox .form .btnSubmit.disabled {
  opacity: 0.8;
}
.commentbox .form .btnSubmit {
  display: block;
  float: left;
  border: 1px solid #aaa;
  border-radius: 5px;
  box-shadow: 0 2px 0px #f7f7f7;
  padding: 5px 10px;
  margin: 0 10px 10px;
  cursor: pointer;
  background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f5f5f5));
  background: -moz-linear-gradient(top, #ffffff, #f5f5f5);
  background: -ms-linear-gradient(top, #ffffff, #f5f5f5);
  background: -o-linear-gradient(top, #ffffff, #f5f5f5);
  background: linear-gradient(top, #ffffff, #f5f5f5);
}




</style>
<div id="comment-561597" class="commentbox" style="display: inline;">
<header><h1>Bình luận</h1></header>
<div class="form">
	<p class="contents">
    	<form action="include/xulicmt.php" method="POST">
        <input type="hidden" name="masanpham" value="<?php echo $r["Masanpham"];?>"><br/>
		<label>NỘI DUNG</label><br />
		<p><textarea name="noidung"></textarea></p>
	
<input type="submit" class="btnSubmit disabled" value="Gửi Bình Luận"></form>

</div><br/><hr />
<ul class="comments">
DANH SÁCH BÌNH LUẬN</ul>
<?php
 $q=$b->select("select * from binhluan where Masanpham=$Masanpham and duyet = 1 ");
 $i=1;
    foreach($q as $r)
    {
		
		?><div id="phanbinhluan">
        <?php echo $i++?>:<?php echo $r["noidung"];?><br/>
		 </div>
         <?php
    }
    ?>