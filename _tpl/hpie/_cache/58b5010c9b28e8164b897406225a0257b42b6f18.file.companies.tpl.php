<?php /* Smarty version Smarty-3.1.15, created on 2019-01-24 18:31:35
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8425074165c49b72f818a38-23117264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b5010c9b28e8164b897406225a0257b42b6f18' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/companies.tpl',
      1 => 1547656880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8425074165c49b72f818a38-23117264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translations' => 0,
    'companies' => 0,
    'BASE_URL' => 0,
    'URL_JOBS_AT_COMPANY' => 0,
    'companies_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c49b72fb3f627_78272458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49b72fb3f627_78272458')) {function content_5c49b72fb3f627_78272458($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<h3 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['title'];?>
</h3>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['name'] = 'tmp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['companies']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<span class="company-tag-<?php echo $_smarty_tpl->tpl_vars['companies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['tag_height'];?>
">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS_AT_COMPANY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['companies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['varname'];?>
/"><?php if ($_smarty_tpl->tpl_vars['companies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name']) {?><?php echo $_smarty_tpl->tpl_vars['companies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['company_undisclosed'];?>
<?php }?> (<?php echo $_smarty_tpl->tpl_vars['companies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['count'];?>
)</a>
			</span>
			<?php endfor; endif; ?>
			<br /><br />
			<p>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['total'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['companies_count']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['companies'];?>

			</p>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
