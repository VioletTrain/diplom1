<?php
/* Smarty version 3.1.29, created on 2016-03-21 15:08:30
  from "D:\Stuff\Collage\OpenServer\OpenServer\domains\noteholder.local\views\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56efe43ec6bd51_30613841',
  'file_dependency' => 
  array (
    'bdc7724eeb4e1fe394bf29a682325edbe36177e2' => 
    array (
      0 => 'D:\\Stuff\\Collage\\OpenServer\\OpenServer\\domains\\noteholder.local\\views\\index.tpl',
      1 => 1458561809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56efe43ec6bd51_30613841 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Welcome to NoteHolder</title>
	<link rel="shortcut icon" href="img/logo.png">
	<link rel="stylesheet" href="scss/index.css">
	<?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/index_php.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
</head>

<body>
	
<!--	MENU-->
	<div class="menu">
		<div class="logo">
			<img src="img/logo.png">
		</div>
		<div class="name">NoteHolder</div>
		<div class="btn log_menu_btn">Login</div>
		<div class="btn reg_menu_btn">Register</div>
	</div>
	
<!--	CONTENT-->
	<div class="content">
		<div class="logo2">
			<img src="img/logo.png">
		</div>
		<h1>Welcome to NoteHolder!</h1>
		<p class="content1">
			We provide a brand new way for you to organize everithyng has sense - many kinds of information, which can be important for you!</br></br>Text, links, pictures, drawnings... any files.</br></br>Feel free to create, organize and share notes any way you like!</br></br>Add folders, mark notes, sort them by name, color, date, share in social networks...</br></br>Use lots of usefull functions we present to you!</br></br>Just spend few seconds to register or login by clicking buttons on the top menu and you can start working!</br></br>We hope you will enjoy your usage experience on any platform we support - let it be desktop or mobile device, we will make everything for you to feel comfortly using NoteHolder!</br></br>Organize you minds simply!
		</p>
		<p class="content2">To contact us  write to noteholder@gmail.com</p>
	</div>
	
	<div class="icons">
		<div class="icon icon1">
		<img src="img/icons/note.png">
		</div>
	
		<div class="icon icon2">
		<img src="img/icons/image.png">
		</div>

		<div class="icon icon3">
		<img src="img/icons/pen.png">
		</div>
		
		<div class="icon icon4">
		<img src="img/icons/file.png">
		</div>
		
		<div class="icon icon5">
		<img src="img/icons/folder.png">
		</div>
		
		<div class="icon icon6">
		<img src="img/icons/mark.png">
		</div>
		
		<div class="icon icon7">
		<img src="img/icons/cloud.png">
		</div>
	</div>
		
<!--	FORMS-->
	<div class="form reg_form">
		<input class="field reg_email" type="text" placeholder="email" name="email">
		<input class="field reg_pass" type="password" placeholder="password (no longer than 20 symbols)" name="pwd1" maxlength="20">
		<input class="field reg_pass2" type="password" placeholder="retype password" name="pwd2" maxlength="20">
		<div class="btn reg_btn">Register</div>
		<div class="btn reg_cancel_btn">Cancel</div>
	</div>
	
	<div class="form log_form">
		<input class="field log_email" type="text" placeholder="email" name="email">
		<input class="field log_pass" type="password" placeholder="password" name="pwd1">
		<div class="show_pass_btn"></div>
		<div class="btn log_btn">Login</div>
		<div class="btn log_cancel_btn">Cancel</div>
	</div>
	
<!--	ALERTS-->
	<div class="alert">Invalid email\password!</div>
	
	<div class="back"></div>
</body>
	
</html><?php }
}
