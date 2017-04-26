<?php
/* Smarty version 3.1.31, created on 2017-04-12 20:10:40
  from "D:\Wamp\wamp\www\Airline\libs\templates\bookingOptions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee6da0c964a8_14553912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce58e72e52faef8e7c15e5435e2c5a240b3fb75' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\bookingOptions.tpl',
      1 => 1492019342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee6da0c964a8_14553912 (Smarty_Internal_Template $_smarty_tpl) {
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


	    <div class = "list"></div>


         <div class = "Panel_template" style = "display:none;">  
        	  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['count']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>  
        	<div class = "container" id = "flCont">
		    <span id = "outInfo">Outbound:</span>
		    <span id = "destLabel"><?php echo $_smarty_tpl->tpl_vars['destination']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>
		    <span id = "dateInfo"><?php echo $_smarty_tpl->tpl_vars['destinationDate']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>
		    <span id = "flightNum"><?php echo $_smarty_tpl->tpl_vars['flightNumber']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>
		   <!-- <span id = "flightNum"><a href = "createReservation.php" name = "priceT"><?php echo $_smarty_tpl->tpl_vars['flightNumber']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</a></span> -->
          </div>
      
        <div class = "container" id = "fullFlightInfo">
		       <div class = "col" id = "f">
			       <h4 id = "a1">Departure</h4>
			       <h4 id = "a2"><?php echo $_smarty_tpl->tpl_vars['destinationDate']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h4>
			       <h4 id = "a3"><?php echo $_smarty_tpl->tpl_vars['departureTime']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h4>
			       <h4 id = "a4">Duration: <span id = "a4_1"><?php echo $_smarty_tpl->tpl_vars['duration']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span></h4>
		       </div>

		   <div class = "col" id = "s">
		         <h4 id = "b1">Arriving</h4>
			     <h4 id = "b2"><?php echo $_smarty_tpl->tpl_vars['arivalDate']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h4>
			   	 <h4 id = "b3"><?php echo $_smarty_tpl->tpl_vars['arivalTime']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h4> 
		   </div>

		   <div class = "col" id = "t">
		         <h4 id = "c1">Seats Available</h4>
			     <h4 id = "c2"><?php echo $_smarty_tpl->tpl_vars['freeSeatsNum']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h4>
		   </div>

		   <div class = "col" id = "four">
			    <h4 id = "d1">Price per 1 seat</h4>
			    <!-- <?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 -->
			<form method = 'POST' action = 'bookingOptions.php'> 
			    <input type="radio" name = "radio" value = <?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['i']->value];?>
><span id = "#d2_1"><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['i']->value];?>
$</span>
			    <button type="submit" name = "reg" class="btn btn-warning" id = "bookTkt"> Book </button> 
			</form>
		        <!-- <h4> <input type="radio" name="price" id = "priceChooser"><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 <span>$</span></h4> -->
		        <!-- <h4><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['i']->value];?>
<span>$</span></h4> -->
		   </div>
	     </div>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                 <?php }
}
?>

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
