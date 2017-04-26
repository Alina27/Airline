<?php
/* Smarty version 3.1.31, created on 2017-04-01 22:50:24
  from "D:\Wamp\wamp\www\Airline\libs\templates\flightstatus.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e01290773ba5_33848171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb72f542e1260fd671132900f9a76323bdba61c' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\flightstatus.tpl',
      1 => 1491079819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e01290773ba5_33848171 (Smarty_Internal_Template $_smarty_tpl) {
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
	
		<h1 id = "statusLabel">Fligth Status</h1>

		<hr>

  <form action = 'flightstatus.php' method = 'POST'> 
		<div id = "optionStatusPanel">

			      <label id = "directionLabel">Direction</label>
			        <span>
                        <input type = "text" name = "direction" id = "dateSelection" list = "direction_list">
			                   <datalist id = "direction_list">
                                    <option value="departure">departure</option>
                                    <option value="arriving">arriving</option>
                               </datalist>
			        </span>
		
			
			      <label id = "from_Status">Fly from:</label>
			        <span> 
                        <input type="text" name='depStatus' id="departureStatus" list="departure_list">
                               <datalist id="departure_list">
                                  <option>Londog-Getwick (LGW)</option>
                               </datalist>
			        </span>

			     <label id = "to_Status">Fly to:</label>
			       <span>
			            <input type="text" name="arr" id="arrivingStatus" list="arriving_list">
                               <datalist id="arriving_list">
                                   <option>Бавария</option>
                               </datalist>
			      </span>

			    
			     <label id = "perisdLabel">Period</label>
			       <span>
                        <input type = "text" name = "period" id = "dateSelection" list = "period_list">
	                          <datalist id = "period_list">
		                            <option value="today">today</option>	
                                    <option value="three_ago">three days ago</option>
                                    <option value="two_ago">two days ago</option>
		                            <option value="yesterday">yesterday</option>
		                            <option value="tomorrow">tomorrow</option>
		                            <option value="two_in">in two days</option>	
                              </datalist>
			      </span>
			
		</div>
		
		             <div id = "flightStatusPanel">
			              <span><label id = "fl">Flight</label></span>
			              <span><label id = "from_To">From_To</label></span>
			              <span><label id = "dep_Arr">Dep_Arr</label></span>
			              <span><label id = "status">Status</label></span>
		             </div>


       <div class = "my_list"></div>


     <div class = "my_template" style = "display: none">
     	  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['count']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<div id = "statusData">
			<span><label id = "fl">1</label></span>
			<span><label id = "from_To"><?php echo $_smarty_tpl->tpl_vars['todayFlights']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</label></span>
			<span><label id = "dep_Arr">3</label></span>
			<span><label id = "statusState">On Time</label></span> 
		</div>
		    <?php }
}
?>

	 </div> 


 </form>
       
    <button  id = "flighstBtn">Submit</button>
                  


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
