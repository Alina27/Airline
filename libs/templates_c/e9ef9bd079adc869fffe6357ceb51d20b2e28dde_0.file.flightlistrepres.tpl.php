<?php
/* Smarty version 3.1.31, created on 2017-04-12 19:21:06
  from "D:\Wamp\wamp\www\Airline\libs\templates\flightlistrepres.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee6202ab0ba5_76904185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9ef9bd079adc869fffe6357ceb51d20b2e28dde' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\flightlistrepres.tpl',
      1 => 1492017208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee6202ab0ba5_76904185 (Smarty_Internal_Template $_smarty_tpl) {
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
                               <li><a href="flightlist.php">Accompanied Minor Ticket</a></li>
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


	    <div class = "list"></div>
       
        <div class = "Panel_template" style = "display:none;">
        	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['count']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        	
        	<div class = "container" id = "flCont">
		    <span id = "outInfo"> &#9992 Outbound:</span>
		    <span id = "destLabel"><?php echo $_smarty_tpl->tpl_vars['destination']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>
		    <span id = "dateInfo"><?php echo $_smarty_tpl->tpl_vars['destinationDate']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>
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
		        <h4 id = "d2"><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 <span>$</span></h4>
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
            
 <span id = "collapse">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id = "colapseBtn">Book Ticket !!!</button>
                <div id="demo" class="collapse in">
                                  <p id = "callMess">Call us with number <br> &#9990 123456789 </p>
                </div>
 </span>



		 <!--
		<div class = "container" id = "flCont">
		    <span id = "outInfo">Outbound:</span>
		    <span id = "destLabel"><?php echo $_smarty_tpl->tpl_vars['destination']->value;?>
</span>
		    <span id = "dateInfo"><?php echo $_smarty_tpl->tpl_vars['destinationDate']->value;?>
</span>
        </div>	
   
	<div class = "container" id = "fullFlightInfo">
		<div class = "col" id = "f">
			<h4>Departure</h4>
			<h4><?php echo $_smarty_tpl->tpl_vars['destinationDate']->value;?>
</h4>
			<h4><?php echo $_smarty_tpl->tpl_vars['departureTime']->value;?>
</h4>
			<h4>Duration: <span><?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
</span></h4>
		</div>
		<div class = "col" id = "s">
		    <h4>Arriving</h4>
			<h4><?php echo $_smarty_tpl->tpl_vars['arivalDate']->value;?>
</h4>
			  <h4><?php echo $_smarty_tpl->tpl_vars['arivalTime']->value;?>
</h4>
		</div>
		<div class = "col" id = "t">
		    <h4>Seats Available</h4>
			<h4><?php echo $_smarty_tpl->tpl_vars['freeSeatsNum']->value;?>
</h4>
		</div>
		<div class = "col" id = "four">
			<h4>Price per 1 seat</h4>
		    <h4><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 <span>$</span></h4>
		</div>
	</div>
		<br>
		   -->
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
