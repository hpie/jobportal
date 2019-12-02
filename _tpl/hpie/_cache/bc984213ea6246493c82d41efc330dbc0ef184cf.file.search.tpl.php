<?php /* Smarty version Smarty-3.1.15, created on 2019-01-20 20:23:54
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11703231475c448b82a02d42-77285615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc984213ea6246493c82d41efc330dbc0ef184cf' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/search.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11703231475c448b82a02d42-77285615',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c448b82c54ee6_60272497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c448b82c54ee6_60272497')) {function content_5c448b82c54ee6_60272497($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings">
				<?php echo $_smarty_tpl->getSubTemplate ("posts-loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!-- #job-listings -->
		</div><!-- #content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
