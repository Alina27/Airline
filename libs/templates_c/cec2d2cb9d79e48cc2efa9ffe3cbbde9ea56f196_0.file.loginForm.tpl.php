<?php
/* Smarty version 3.1.31, created on 2017-04-12 18:30:17
  from "D:\Wamp\wamp\www\Airline\libs\templates\loginForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee5619ca50a5_53399268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec2d2cb9d79e48cc2efa9ffe3cbbde9ea56f196' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\loginForm.tpl',
      1 => 1492014597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee5619ca50a5_53399268 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- CSS основний файл -->
    <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/>
	
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	
	
	<div class = mainPanel>
		
		<div id = "topPanel">
	       <img src = "frontend/img/planeLogo.png" id = "planeLogo">
	    </div>

	    <div class="menu-wrap">
            <nav class="menu">
               
                	<ul class="clearfix">
                        <li><a href="menu.php">Home</a></li>
                         <li><a href="flightlist.php">Flight List</a></li>
                         <li><a href="#">Price<span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="flightlist.php">Adult Ticket</a></li>
                               <li><a href="#">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>

                        <li><a href="#">Travelling with us<span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                            	<li><a href="#">Baggage</a></li>
                               <li><a href="#">Check-in and boarding</a></li>
                               <li><a href="#">Special assistance</a></li>
                            </ul>   
                        </li>
                    </ul>

            </nav>
         </div>
		
		
		<form id = "login_form" action = "loginForm.php" method = "POST">
			<div class = "imgcontainer">
			   <img src = "frontend/img/img_avatar2.png" alt="Avatar" class="avatar"/>
			</div>
			
			<div class = "container" id = "logCont">
				<label><b>Username</b></label>
				<input type = "text" placeholder="Enter Username" name = "uname" required id = "userInput">
				
				<label><b>Password</b></label>
				<input type = "password" placeholder="Enter Password" name = "psw" required id = "passInput">
				
				<button type = "submit" id = "loginButton">Login</button>
				<!-- <input type = "checkbox" checked = "checked"> Remember me -->
			</div>	
			<!--
			<div class = "container">
				<button type = "button" class = "cancelbtn">Cancel</button>
			</div> -->
		</form>
			
		
	</div>
		
<!-- jQuery JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> <?php echo '</script'; ?>
>
<!--Bootsrap JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--Own JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript"  src="frontend/js/main.js"> <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
