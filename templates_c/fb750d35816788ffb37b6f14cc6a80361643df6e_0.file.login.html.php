<?php
/* Smarty version 3.1.30, created on 2018-08-03 04:13:46
  from "F:\warmsever\warm\wamp64\www\pratice_mvc\view\User\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b63d67a60b0d1_05987764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb750d35816788ffb37b6f14cc6a80361643df6e' => 
    array (
      0 => 'F:\\warmsever\\warm\\wamp64\\www\\pratice_mvc\\view\\User\\login.html',
      1 => 1533216278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b63d67a60b0d1_05987764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录界面</title>
	

	
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background: url('picture/background.jpg');
			background-size: 100% 100%;

		}
		h1{
			text-align: center;
			margin-top: 50px;
		}
		.wrap{
			font-size: 30px;
			width: 366px;
			
			margin: 80px auto;
		}
		.btn1,.btn2{
			padding:6px 15px;
			color: white;
			background: orange;
			font-size: 20px;
			border-radius: 10px;
			outline: none;
			box-shadow: 2px 2px 8px;
			margin-left:76px;
		}
		.form-control1,.form-control2{
			height: 30px;
			line-height: 30px;
			font-size: 20px;
		}
		.form-group{
			margin-bottom:  30px;
		}
		.pal{
			margin-left:15px;
		}
		.form-control2{
			margin-left: 14px;
		}
		a{
			text-decoration: none;
			list-style:none;
		}
		#move{
			height: 18px;
			width: 400px;
			border:4px solid gray;
			border-radius: 14px;
			display: none;
			
		}
		.inner{
			height: 100%;
			width: 0%;
			background: green;
		}
		#txt{
			font-size: 30px;
			color: gray;
			height: 40px;
			line-height: 40px;
			text-align: center;
			padding-left: 50px;
			
		}
		#tt{
			font-size: 30px;
			text-align: center;
			padding-left: 108px;
			display: none;
		}
	</style>
</head>
<body>
	<h1>我是登录界面</h1>
	
<div class="wrap">
	<form action="http://localhost/first_mvc/index.php" method="post" id="TestForm">
		<div class="form-group">
			<label >用户名：</label> 
			<input name="uname" type="text" class="form-control1">
			
		</div>

		<div class="form-group">
			
			<label class="pal">密码：</label> 
			<input name="password" type="text" class="form-control2">
		</div>
			<input type="hidden" name="control" value="user">
			<input type="hidden" name="action" value="do_login">
			<input type="button" class="btn1" value="登录" onclick="put()">
			<a href="http://localhost/first_mvc/index.php?control=User&action=reg"><input type="button" class="btn2" value="注册"></a>
	</form>
	<div id="txt"></div>
	<div id="move" >
		<div class="inner" id="mo"></div>
	</div>
	<div id="tt">登录中。。。</div>
</div>

</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
function put(){

      setTimeout('TestForm.submit()',3100);
     
      var move =document.getElementById('mo'); 
      var txt =document.getElementById('txt');
      var wrp =document.getElementById('move');
      var tt = document.getElementById('tt');
      tt.style.display = 'block';
      wrp.style.display = 'block';
      var s = 0;
       var timer = setInterval(function(){
       	s +=1;
       	move.style.width = s +'%';
       	txt.innerHTML = s +'%';
        if (s==100) {
       	    clearInterval(timer);
       	    tt.innerHTML = '';
       		} 
       },30);

}
<?php echo '</script'; ?>
><?php }
}
