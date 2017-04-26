<?php
/* Smarty version 3.1.31, created on 2017-04-12 20:13:03
  from "D:\Wamp\wamp\www\Airline\libs\templates\ticketList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee6e2f0df0c4_00111468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd01a40b363e52d1224234ced7adf9367eb08afc4' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\ticketList.tpl',
      1 => 1492018752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee6e2f0df0c4_00111468 (Smarty_Internal_Template $_smarty_tpl) {
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
		
		<h2 id = "tickadge">My Ticket &#9786 </h2>
		
		<div id = "my">
		
		<div class = "container" id = "ticketContainer">
			<h3 id = "ticketNumber">CE<?php echo $_smarty_tpl->tpl_vars['tktNum']->value;?>
</h3>
			<h4 id = "ticketDestination"><?php echo $_smarty_tpl->tpl_vars['tktDest']->value;?>
</h4>
			<h4 id = "ticketDate"><?php echo $_smarty_tpl->tpl_vars['tktDate']->value;?>
</h4>
		
		</div>
		
        <div id = "ticketInfo">
		  <label id = "passInf"> Passenger Info</label>
			
			<hr id = "seventh">
			
			<h3 id = "ticketFN"><?php echo $_smarty_tpl->tpl_vars['tktFullName']->value;?>
</h3>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['tktBDay']->value;?>
</h4>
			<h4 id = "ticketPN">+380983198895</h4>
			<h4 id = "ticketEM"><?php echo $_smarty_tpl->tpl_vars['tktEmail']->value;?>
</h4>
			<h4 id = "ticketLugg">Baggage <span id = "luggAmount"><?php echo $_smarty_tpl->tpl_vars['tktLuggAmt']->value;?>
</span> </h4>
			<h4 id = "ticketSeats"><?php echo $_smarty_tpl->tpl_vars['seat']->value;?>
</h4>
			
		<hr id = "seventh">	
		
		  <label id = "passInf"> Infant Info</label>
	   
			<h3 id = "ticketFN"><?php echo $_smarty_tpl->tpl_vars['infantFullName']->value;?>
</h3>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['infantBD']->value;?>
</h4>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['infantG']->value;?>
</h4>
		<hr id = "seventh">
			
	<label id = "passInf"> Child Info </label>
			<h3 id = "ticketFN"><?php echo $_smarty_tpl->tpl_vars['childFullName']->value;?>
</h3>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['childBD']->value;?>
</h4>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['childGender']->value;?>
</h4>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['chldSeat']->value;?>
</h4>
			<!-- <h4 id = "ticketLugg">Baggage <span id = "luggAmount">2</span></h4> 
			<h4 id = "ticketSeats">5A</h4>-->
		
	  <hr id = "seventh">		
			<label id = "passInf"> Total Price: <span id = "totPrs"><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
 $</span> <span></span></span> </label>
			
		</div>
	</div>	

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
 type="text/javascript"  src="frontend/js/main.js"> <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
