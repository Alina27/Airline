<?php
/* Smarty version 3.1.31, created on 2017-04-12 20:45:42
  from "D:\Wamp\wamp\www\Airline\libs\templates\agentPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee75d6ea0c10_36310036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60587f63deec8013b794ee3ed40867aa01d013a3' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\agentPage.tpl',
      1 => 1492019560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee75d6ea0c10_36310036 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li><a href="menu_ul.php">Home</a></li>

                        <li><a href="#">Book Ticket <span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="searchAndbook.php">Adult Ticket</a></li>
                               <li><a href="searchAndbookChldAlone.php">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>
                        <li><a href="searchAndbook.php">Flight List</a></li>

                         <li><a href="#">Find Ticket <span class="arrow">&#9660;</span></a>
                            <ul class="sub-menu">
                               <li><a href="#" id = "findBtn">Adult Ticket</a></li>
                               <li><a href="#" id = "findBtnAM">Accompanied Minor Ticket</a></li>
                            </ul>   
                        </li>
                        <li><a href="#">Site Help</a></li>
                        <li><a href="menu.php">Log Out</a></li>
                    </ul>
            </nav>
         </div>
		
		<div id = "agentInfo">
			<div id = "agentName">Agent Name
			  <br>
				<div id = "aName"><?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
</div>
			</div>
			
			<br>
			
			<div> <span id = "agN"> Agent Number: </span> <span id = "actNum"> <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 </span> </div>
			
			<br>
			
			<div id = "contInfMain">Agent Contanct Info</div>
			   <br>
			<div id = "tel">Tel: <span id = "actPh"><?php echo $_smarty_tpl->tpl_vars['phoneNum']->value;?>
</span> </div>
				<br>
				<div id = "e_mail">e-mail:
					<span id = "actEmail"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
			</div>
				<br>
				<div id = "skype">Skype:
			<span id = "actSkype"><?php echo $_smarty_tpl->tpl_vars['skypeID']->value;?>
</span>
			</div>
		</div>

<!--		
<div class = "container" id = "btnGroupCont">
  <div class = "btn-group btn-group-lg">
<button type="button" class="btn btn-primary" id = "flBtn">Flight List</button>
<button type="button" class="btn btn-primary" id = "fsBtn">Flight Status</button>
<button type="button" class="btn btn-primary" id = "bookBtn">Book Ticket</button>
<button type="button" class="btn btn-primary" id = "findBtn">Find Ticket</button>
	</div>
</div>  -->
		
		
<div class = "container" id = "searchForm">
	<form action = "agentPage.php" method = "POST">
	   <input type = "text" name = "search" placeholder = "Search" id = "searchF">	
	   <button type="submit" class="btn btn-success" id = "searchBtn">Find</button>
	</form>
</div>

<div class = "container" id = "searchFormAM">
	<form action = "agentPage.php" method = "POST">
	   <input type = "text" name = "searchAM" placeholder = "Search" id = "searchF">	
	   <button type="submit" class="btn btn-success" id = "searchBtnAM">Find</button>
	</form>
</div>
		
			
		
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
 type="text/javascript"  src="frontend/js/mainJS.php"> <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
