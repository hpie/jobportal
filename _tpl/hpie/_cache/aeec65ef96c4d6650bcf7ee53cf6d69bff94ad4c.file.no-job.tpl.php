<?php /* Smarty version Smarty-3.1.15, created on 2019-03-19 04:32:24
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/no-job.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4365133345c902380cf8355-07823484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeec65ef96c4d6650bcf7ee53cf6d69bff94ad4c' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/no-job.tpl',
      1 => 1547656881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4365133345c902380cf8355-07823484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translations' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c9023811d9822_63829885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9023811d9822_63829885')) {function content_5c9023811d9822_63829885($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<div id="no-ads">
				<p><?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['no_job'];?>
</p>
				<p>
					<?php if (@constant('ENABLE_NEW_JOBS')) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a> &middot;
					<?php }?> 
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['notfound']['back'];?>
</a>
				</p>
			</div>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
