<?php /* Smarty version Smarty-3.1.15, created on 2019-12-09 19:32:34
         compiled from "C:\xampp72\htdocs\jobs\_tpl\hpie\jobs-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2129670535dee53fac7c5a5-09665703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f713dcbb2b4ff2d324bb62130fdee72600513e2' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\jobs\\_tpl\\hpie\\jobs-list.tpl',
      1 => 1575873312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129670535dee53fac7c5a5-09665703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jobs' => 0,
    'BASE_URL' => 0,
    'THEME' => 0,
    'job' => 0,
    'URL_JOB' => 0,
    'translations' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5dee53facb2557_32767687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dee53facb2557_32767687')) {function content_5dee53facb2557_32767687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp72\\htdocs\\jobs\\_lib\\smarty\\libs\\plugins\\function.cycle.php';
?><?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
	<div class="<?php echo smarty_function_cycle(array('values'=>'row,row-alt'),$_smarty_tpl);?>
">
		<span class="row-info">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['job']->value['type_var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['type_name'];?>
" />
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</a> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['at'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['job']->value['is_location_anywhere']) {?>, <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
<?php } else { ?> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['in'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
<?php }?>
		</span>
		<span class="time-posted"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/clock.gif" alt="" /> <?php echo $_smarty_tpl->tpl_vars['job']->value['created_on'];?>
</span>			
	</div>
<?php } ?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
<?php }} ?>
