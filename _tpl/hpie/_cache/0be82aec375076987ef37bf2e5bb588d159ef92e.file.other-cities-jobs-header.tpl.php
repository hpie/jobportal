<?php /* Smarty version Smarty-3.1.15, created on 2019-04-10 09:24:08
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/other-cities-jobs-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16366002775cad68e0afd291-29083324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be82aec375076987ef37bf2e5bb588d159ef92e' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/other-cities-jobs-header.tpl',
      1 => 1547656881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16366002775cad68e0afd291-29083324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jobs' => 0,
    'translations' => 0,
    'types' => 0,
    'BASE_URL' => 0,
    'current_category' => 0,
    'THEME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5cad68e120b358_71814893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cad68e120b358_71814893')) {function content_5cad68e120b358_71814893($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings">
				<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
				<div id="sort-by-type">
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['category']['display_only'];?>
&nbsp;
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['name'] = 'job_type';
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['job_type']['total']);
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs-in-other-cities/<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_type']['index']]['var_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_type']['index']]['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_type']['index']]['var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_type']['index']]['name'];?>
" /></a>
					<?php endfor; endif; ?>
				</div><!-- #sort-by-type -->
				<?php }?>
				<h2>
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobscity']['jobs_in_other_cities'];?>

				</h2>
				<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("jobs-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<div id="no-ads">
						<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobscity']['no_jobs_in_other_cities'];?>

						<?php if (@constant('ENABLE_NEW_JOBS')) {?>
							<br /><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a>
						<?php }?>
					</div><!-- #no-ads -->
				<?php }?>
				
			</div><!-- #job-listings -->
		</div><!-- #content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
