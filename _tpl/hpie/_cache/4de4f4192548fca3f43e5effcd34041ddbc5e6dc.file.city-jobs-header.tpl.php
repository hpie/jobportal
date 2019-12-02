<?php /* Smarty version Smarty-3.1.15, created on 2019-04-08 06:16:02
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/city-jobs-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8502592145caa99ca89bb60-56957853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de4f4192548fca3f43e5effcd34041ddbc5e6dc' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/city-jobs-header.tpl',
      1 => 1547656880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8502592145caa99ca89bb60-56957853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jobs' => 0,
    'translations' => 0,
    'types' => 0,
    'BASE_URL' => 0,
    'URL_JOBS_IN_CITY' => 0,
    'city_ascii_name' => 0,
    'current_category' => 0,
    'THEME' => 0,
    'city_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5caa99cad477d8_26616424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caa99cad477d8_26616424')) {function content_5caa99cad477d8_26616424($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings">
				<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
				<div id="sort-by-type">
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['category']['display_only'];?>
&nbsp; 
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['name'] = 'tmp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total']);
?>
						<!--Doesn't seem to be type-support for cities yet-->
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS_IN_CITY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['city_ascii_name']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
" /></a>
					<?php endfor; endif; ?>
				</div><!-- #sort-by-type -->
				<?php }?>
				<h2>
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobscity']['jobs_in'];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>

				</h2>
				<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("jobs-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<div id="no-ads">
						<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobscity']['no_jobs_in'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
</strong>.
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
