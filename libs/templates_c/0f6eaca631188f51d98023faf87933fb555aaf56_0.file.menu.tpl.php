<?php
/* Smarty version 3.1.31, created on 2017-04-12 19:06:30
  from "D:\Wamp\wamp\www\Airline\libs\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee5e963da079_48676392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6eaca631188f51d98023faf87933fb555aaf56' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\menu.tpl',
      1 => 1492016782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee5e963da079_48676392 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- CSS <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> -->
    <link rel="stylesheet" type="text/css" href="frontend\css\main.css"/> 


	
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

            
                        <li><a href="loginForm.php">Log In</a></li>
                    </ul>
            </nav>
         </div>
		
		
		<h1 id = "welcomeMess"> Welcome to SKY AIRLINE </h1>
		<!--<h4 id = "optionMess"> Please, choose one of next options </h4>
		 
			<span><img src = "frontend/img/arrow.png" id = "arrow1">
		          <h3 id = "flightList"><a href = "flightlist.php">Flight List</a></h3>
		    </span>
		    
		
		    <span><img src = "frontend/img/arrow.png" id = "arrow3">
		          <h3 id = "flightBookingAdult"><a href = "#">Adult Ticket</a></h3>
		    </span>
            
		    <span><img src = "frontend/img/arrow.png" id = "arrow5">
		          <h3 id = "flightBookingAccMin"><a href = "#">Accompanied Minor Ticket</a></h3>
		    </span> 
		
		
		
		    <span><img src = "frontend/img/arrow.png" id = "arrow4">
		          <h3 id = "LogIn"><a href = "loginForm.php">LogIn</a></h3>
		    </span> -->
			
		
	</div>


	<span id = "collapse">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id = "colapseBtn"> &#9992 Book Ticket </button>
                <div id="demo" class="collapse in">
                                  <p id = "callMess">Call us with number <br> &#9990 123456789 </p>
                </div>
 </span>
		
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
 type="text/javascript"  src="frontend/js/mainJS.php"> <?php echo '</script'; ?>
> 
</body>
</html>
<?php }
}
