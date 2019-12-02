<?php /* Smarty version Smarty-3.1.15, created on 2019-01-17 16:42:19
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/posts-loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2571469205c3e1062b8b097-57732124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25486c6bc21d475200c55b569cd4add2bc90345e' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/posts-loop.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2571469205c3e1062b8b097-57732124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c3e1062bd3446_46352873',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3e1062bd3446_46352873')) {function content_5c3e1062bd3446_46352873($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_home']->value==1) {?>
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
