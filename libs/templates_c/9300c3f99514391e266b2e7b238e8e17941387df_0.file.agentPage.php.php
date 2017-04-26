<?php
/* Smarty version 3.1.31, created on 2017-03-08 21:37:19
  from "D:\Wamp\wamp\www\Airline\libs\agentPage.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c06b7f8f0641_15990776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9300c3f99514391e266b2e7b238e8e17941387df' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\Airline\\libs\\agentPage.php',
      1 => 1489002156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c06b7f8f0641_15990776 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Agent Page";
$smarty -> assign("title",$title);
$smarty -> display("agentPage.tpl");

// Database


<?php echo '?>';
}
}
