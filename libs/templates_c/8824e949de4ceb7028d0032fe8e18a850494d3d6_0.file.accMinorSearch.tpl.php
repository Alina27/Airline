<?php
/* Smarty version 3.1.31, created on 2017-03-26 14:09:43
  from "D:\Wamp\wamp\www\Airline\libs\templates\accMinorSearch.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d7af87c13ac1_51473460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8824e949de4ceb7028d0032fe8e18a850494d3d6' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\templates\\accMinorSearch.tpl',
      1 => 1490530172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d7af87c13ac1_51473460 (Smarty_Internal_Template $_smarty_tpl) {
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
		
		<div id = "listMainPanel">
		
		<label> Find your flight </label>
       
         <form action = "accMinConnector.php" method = "POST">
         <label id = "flyFromLabel">Fly from:</label>
           <input type="text" name="dep" id="departure" list="departure_list">
                <datalist id="departure_list">
                 	<?php echo $_smarty_tpl->tpl_vars['from']->value;?>

                </datalist>

         <label id = "flyToLabel">Fly to:</label>
         <!-- <input type="text" name = "team" id="arriving" list="arriving_list"> -->
           <input type="text" name="arr" id="arriving" list="departure_list">
                <datalist id="arriving_list">
                     <?php echo $_smarty_tpl->tpl_vars['to']->value;?>

                </datalist>
           <div id = "datePanel">
			<h4 id = "outboundLabel">Outbound</h4>
			<input type="date" name = "date" id = "dateField"/>
		</div>     
          <button type="submit" class="btn btn-warning" id = "searchAndBook">Search and Book </button>
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
