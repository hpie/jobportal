<?php /* Smarty version Smarty-3.1.15, created on 2019-12-09 19:32:34
         compiled from "C:\xampp72\htdocs\jobs\_tpl\hpie\posts-loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19407769385dee53fab9f5e2-65969856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830c040608af7c32c9b2575509d91098be3e49f3' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\jobs\\_tpl\\hpie\\posts-loop.tpl',
      1 => 1575873312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19407769385dee53fab9f5e2-65969856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_home' => 0,
    'BASE_URL' => 0,
    'no_categ' => 0,
    'keywords' => 0,
    'jobs' => 0,
    'CURRENT_PAGE' => 0,
    'translations' => 0,
    'current_category_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5dee53fabcbdd4_54991988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dee53fabcbdd4_54991988')) {function content_5dee53fabcbdd4_54991988($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_home']->value==1) {?>
	<div><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">&laquo; home</a></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['no_categ']->value!=1) {?>
	<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>
		Search results for <strong><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</strong>:
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("jobs-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<div id="no-ads">
			<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value!='search') {?>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['no_job'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['current_category_name']->value;?>
</strong>.
				<?php if (@constant('ENABLE_NEW_JOBS')) {?>
					<br /><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a>
				<?php }?>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['no_job_found'];?>
<br />
			<?php }?>
		</div><!-- #no-ads -->
	<?php }?>
<?php }?><?php }} ?>
