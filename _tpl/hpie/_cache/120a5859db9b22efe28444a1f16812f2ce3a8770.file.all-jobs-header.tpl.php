<?php /* Smarty version Smarty-3.1.15, created on 2019-01-17 16:43:57
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/all-jobs-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4242509625c3e0730121e06-28282901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120a5859db9b22efe28444a1f16812f2ce3a8770' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/all-jobs-header.tpl',
      1 => 1547656877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4242509625c3e0730121e06-28282901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c3e07301db4d4_52544539',
  'variables' => 
  array (
    'jobs' => 0,
    'translations' => 0,
    'types' => 0,
    'BASE_URL' => 0,
    'URL_JOBS' => 0,
    'THEME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3e07301db4d4_52544539')) {function content_5c3e07301db4d4_52544539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
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
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
" /></a>
					<?php endfor; endif; ?>
				</div><!-- #sort-by-type -->
				<?php }?>
				<h2>
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['all_jobs'];?>

				</h2>
				<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("jobs-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<div id="no-ads">
						<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['no_jobs'];?>

						<?php if (@constant('ENABLE_NEW_JOBS')) {?>
							<br /><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a>
						<?php }?>
					</div><!-- #no-ads -->
				<?php }?>
			</div><!-- #job-listings -->
			<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['subscribe_message'];?>
</h2>
			<div id="subscribe">
				<form id="frm-subscribe" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
subscribe/">
					<table>
						<tr>
							<td class="subscribe-address-label"><label for="subscribe_email"><?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['subscribe_email_label'];?>
:</label></td>
							<td><input type="text" name="email" id="subscribe_email" maxlength="50" size="30" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="hidden" name="category" value="0">
								<input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['subscribe_submit'];?>
" />
								&nbsp;&nbsp;<span id="subscribe-response"></span>
							</td>
						</tr>
					</table>
				</form>
			</div><!-- #subscribe -->
		</div><!-- #content -->
		<script type="text/javascript">
			
			$(document).ready(function()
			{
				Jobber.Subscribe.init();
			});
			
		</script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
