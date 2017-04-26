<?php
/* Smarty version 3.1.31, created on 2017-04-13 07:05:44
  from "D:\Wamp\wamp\www\Airline\libs\templates\ticketListAM.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ef072810c2d0_22342851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e42027e695feeabebec7147aa769fd738710e7d3' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\ticketListAM.tpl',
      1 => 1492018768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef072810c2d0_22342851 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li><a href="#">Log Out</a></li>
                    </ul>
            </nav>
         </div>
		
		<h2 id = "tickadge">My Accompanied Minor Ticket &#9786 </h2>
		
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
			<h4 id = "ticketPN"><?php echo $_smarty_tpl->tpl_vars['tktPhone']->value;?>
</h4>
			<h4 id = "ticketEM"><?php echo $_smarty_tpl->tpl_vars['tktEmail']->value;?>
</h4>
			<h4 id = "ticketLugg">Baggage <span id = "luggAmount"><?php echo $_smarty_tpl->tpl_vars['tktLuggAmt']->value;?>
</span> </h4>
			<h4 id = "ticketSeats"><?php echo $_smarty_tpl->tpl_vars['seat']->value;?>
</h4>
			
		<hr id = "seventh">	
		
		  <label id = "passInf"> Person whow attent in departure airport</label>
	   
			<h3 id = "ticketFN"><?php echo $_smarty_tpl->tpl_vars['tktFullNameDepAM']->value;?>
</h3>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['tktPhoneDepAM']->value;?>
</h4>
		<hr id = "seventh">
			
	<label id = "passInf"> Person whow attent in arriving airport </label>
			<h3 id = "ticketFN"><?php echo $_smarty_tpl->tpl_vars['tktFullNameArrAM']->value;?>
</h3>
			<h4 id = "ticketDB"><?php echo $_smarty_tpl->tpl_vars['tktPhoneArrAM']->value;?>
</h4>
			<!-- <h4 id = "ticketLugg">Baggage <span id = "luggAmount">2</span></h4> 
			<h4 id = "ticketSeats">5A</h4>-->
		
	  <hr id = "seventh">		
			<label id = "passInf"> Total Price: <span id = "totPrs"><?php echo $_smarty_tpl->tpl_vars['totPrs']->value;?>
</span> <span></span></span> </label>
			
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
 type="text/javascript"  src="frontend/js/mainJS.php"> <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
