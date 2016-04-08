<!DOCTYPE HTML>

<html>

<head>
	<title>Welcome to NoteHolder</title>
	<link rel="shortcut icon" href="/img/logo.png">
	<link rel="stylesheet" href="/scss/index.css">
	<script src="/js/index.js"></script>
	<script src="/js/index_php.js"></script>
	<script src="/js/jquery.js"></script>
</head>

<body>
	
<!--	MENU-->
	<div class="menu">
		<div class="logo">
			<img src="/img/logo.png">
		</div>
		<div class="name">NoteHolder</div>
		<div class="btn log_menu_btn">Login</div>
		<div class="btn reg_menu_btn">Register</div>
	</div>
	
<!--	CONTENT-->
	
		<!--SLIDE1-->
		<div class="slide slide1 active">
			<!-- BUTTONS -->
			<div class="nav_btn right_btn">
			<img src="/img/right.png">
			</div>
			<!--CONTENT-->
			<div class="text">
				<h1>Welcome to NoteHolder!</h1>
				<p>
				We provide a brand new way for you to organize everithyng has sense - many kinds of information, which can be important for you!
				Text, links, pictures, drawnings... any files.
				</p>
			</div>
			<div class="pic">
				<img src="/img/icons/icon1.png">
			</div>
			
		</div>

		<!--SLIDE2-->
		<div class="slide slide2 passive">
			<!-- BUTTONS -->
			<div class="nav_btn left_btn">
			<img src="/img/left.png">
			</div>
			<div class="nav_btn right_btn">
			<img src="/img/right.png">
			</div>
			<!--CONTENT-->
			<div class="text">
				<h1>Use lots of usefull functions we present to you!</h1>
				<p>
				Feel free to create, organize and share information any way you like!
				Add notes, folders, mark them, sort them by name, color, date, share in social networks...
				Use lots of usefull functions we present to you!
				</p>
			</div>
			<div class="pic">
				<img src="/img/icons/icon3.png">
			</div>
			
		</div>

		<!--SLIDE3-->
		<div class="slide slide3 passive">
			<!-- BUTTONS -->
			<div class="nav_btn left_btn">
			<img src="/img/left.png">
			</div>
			<!--CONTENT-->
			<div class="text">
				<h1>Organize you minds simply!</h1>
				<p>
				Just spend few seconds to register or login by clicking buttons on the top menu and you can start working!
				We hope you will enjoy your usage experience on any platform we support - let it be desktop or mobile device, we will make 		everything for you to feel comfortly using NoteHolder!
				To contact us  write to noteholder@gmail.com
				</p>
			</div>
			<div class="pic">
				<img src="/img/icons/icon7.png">
			</div>
		</div>
	
<!--	FORMS-->
	<div class="form reg_form">
		<input class="field reg_email" type="email" placeholder="email" name="email">
		<input class="field reg_pass" type="password" placeholder="password (no longer than 20 symbols)" name="pwd1" maxlength="20">
		<input class="field reg_pass2" type="password" placeholder="retype password" name="pwd2" maxlength="20">
		<div class="btn reg_btn">Register</div>
		<div class="btn reg_cancel_btn">Cancel</div>
	</div>
	
	<div class="form log_form">
		<input class="field log_email" type="email" placeholder="email" name="email">
		<input class="field log_pass" type="password" placeholder="password" name="pwd1">
		<div class="show_pass_btn"></div>
		<div class="btn log_btn">Login</div>
		<div class="btn log_cancel_btn">Cancel</div>
	</div>
	
<!--	ALERTS-->
	<div class="alert">Invalid email\password!</div>
	
	<div class="back"></div>
</body>
	
</html>