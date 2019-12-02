<?php /* Smarty version Smarty-3.1.15, created on 2019-01-17 17:05:53
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:458349345c4068990e8ee6-01465786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c968d886f708ded5e81f4b672b6b9ab8af44f5c2' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/rss.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '458349345c4068990e8ee6-01465786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'translations' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c4068991e0e95_67808730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4068991e0e95_67808730')) {function content_5c4068991e0e95_67808730($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<h3 class="page-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['title'];?>
">&laquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['home'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['translations']->value['rss']['title'];?>
</h3>
			<p>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['rss']['intro'];?>

			</p>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss/all/"><?php echo $_smarty_tpl->tpl_vars['translations']->value['rss']['all_categories'];?>
</a></li>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['name'] = 'tmp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss/<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['translations']->value['rss']['for'];?>
 <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
